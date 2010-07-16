#!/usr/bin/perl -w

# COPYRIGHT:
#
# This software is Copyright (c) 2007 NETWAYS GmbH, Michael Streb
#                                <support@netways.de>
#
# (Except where explicitly superseded by other copyright notices)
#
#
# LICENSE:
#
# This work is made available to you under the terms of Version 2 of
# the GNU General Public License. A copy of that license should have
# been provided with this software, but in any event can be snarfed
# from http://www.fsf.org.
#
# This work is distributed in the hope that it will be useful, but
# WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
# General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
# 02110-1301 or visit their web page on the internet at
# http://www.fsf.org.
#
#
# CONTRIBUTION SUBMISSION POLICY:
#
# (The following paragraph is not intended to limit the rights granted
# to you to modify and distribute this software under the terms of
# the GNU General Public License and is only of importance to you if
# you choose to contribute your changes and enhancements to the
# community by submitting them to NETWAYS GmbH.)
#
# By intentionally submitting any modifications, corrections or
# derivatives to this work, or any other work intended for use with
# this Software, to NETWAYS GmbH, you confirm that
# you are the copyright holder for those contributions and you grant
# NETWAYS GmbH a nonexclusive, worldwide, irrevocable,
# royalty-free, perpetual, license to use, copy, create derivative
# works based on those contributions, and sublicense and distribute
# those contributions and any derivatives thereof.
#
# Nagios and the Nagios logo are registered trademarks of Ethan Galstad.


#
# usage: sendVoice.pl <EMAIL-FROM> <EMAIL-TO> <CHECK-TYPE> <DATETIME> <STATUS> <NOTIFICATION-TYPE> <HOST-NAME> <HOST-ALIAS> <HOST-IP> <OUTPUT> [SERVICE]
#
#


use strict;
use Digest::MD5 qw(md5_hex);
#use Data::Dumper;
use FindBin;
use lib "$FindBin::Bin";
my $scriptPath = $FindBin::Bin;
my $whoami = $FindBin::Script;
use noma_conf;
my $conf = conf();


#debugLog("argv.... ". Dumper(\$ARGV));
# check number of command-line parameters
my $numArgs = $#ARGV + 1;
if ($numArgs != 10 && $numArgs != 11)
{
	print "wrong number of parameters ($numArgs)\n";
	exit 1;
}

my $debug = $conf->{debug}->{voice};

# get parameters
my $from = $ARGV[0];
my $to = $ARGV[1];
my $check_type = $ARGV[2];	# we ignore this
my $datetime = $ARGV[3];
my $status = $ARGV[4];
my $notification_type = $ARGV[5];
my $host = $ARGV[6];
my $host_alias = $ARGV[7];
my $host_address = $ARGV[8];
my $output = $ARGV[9];
my $service = '';

$service = $ARGV[10] if ($numArgs == 11);


my $message = $conf->{voicecall}->{message}->{header};

# ensure the number contains only digits
$to =~ s/\+/00/g;
$to =~ s/[^\d]//g;

debugLog("$to\t$host\t$service\t$check_type\t$status\n");

my $unique_id = md5_hex ( $host . "_" . $service . "_" . $datetime . "_" . $to );
my $ret_str;

my $asterisk = selectAppliance($conf->{voicecall}->{server}, $conf->{voicecall}->{channel}, $conf->{voicecall}->{check_command});
my $scriptParams = "--number $to --callid $unique_id --host \"$host\" $asterisk";

if ($service eq '') {
        $message .= $conf->{voicecall}->{message}->{host};
} else {
        $message .= $conf->{voicecall}->{message}->{service};
	$scriptParams .= " --service \"$service\"";
}

if (defined($conf->{voicecall}->{suffix}) and $conf->{voicecall}->{suffix} ne '')
{
	$scriptParams .= ' --suffix '.$conf->{voicecall}->{suffix};
}

my $scriptName = 'voicecall.pl';
if (defined($conf->{voicecall}->{starface}) and $conf->{voicecall}->{starface} == '1')
{
	$scriptName = 'voicecall_starface.pl';
}

$message =~ s/(\$\w+)/$1/gee;
#debugLog("commandline: echo \"$message\" | $scriptPath/$scriptName $scriptParams");
$ret_str = `echo "$message" | $scriptPath/$scriptName $scriptParams`;


my $ret_val = $?;
$ret_val /= 256 if ($ret_val != 0);

debugLog("$to\t$host\t$service\t$check_type\t$status\t$ret_str\t$ret_val");

print $ret_str;
exit($ret_val);


sub debugLog
{
	my ($debugStr) = @_;

	if (defined($debug)) {
		open (DEBUGLOG, ">> $debug");
		print DEBUGLOG "$whoami: $debugStr\n";
		close (DEBUGLOG);
	}
}

sub selectAppliance
{
	my ($servers, $channels, $check_command) = @_;

	my $server = '';
	my $channel = '';

	if (ref($servers) eq 'ARRAY' and defined($check_command)){
		#It's an array reference...
		#you can read it with $item->[1]
		#or dereference it uisng @newarray = @{$item}
		
		# select one of the appliances - maybe one that works fine
		# ...
		for (my $i = 0; $i <= (scalar(@{$servers})-1); $i++) {
			$server = $servers->[$i];
			$channel = $channels->[$i];

			$check_command =~ s/(\$\w+)/$1/gee;
			system($check_command);
			if ($? == -1) {
				debugLog("failed to execute: $!\n");
			}
			elsif ($? & 127) {
				debugLog(sprintf "check '%s' died with signal %d, %s coredump\n",
				$check_command, ($? & 127),  ($? & 128) ? 'with' : 'without');
			}
			elsif ($? != 0) {
				debugLog(sprintf "check '%s' exited with value %d\n", $check_command, $? >> 8);
			}
			else {
				debugLog("server $server channel $channel seems to work fine - use it.");
				last;
			} 
		}

	} else {
		#not an array in any way... just take it as it is
		$server = $servers;
		$channel = $channels;
	}

	return " --asterisk " . $server . " --channel " . $channel;
}
