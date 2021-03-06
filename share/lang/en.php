<?php

# COPYRIGHT:
#  
# This software is Copyright (c) 2007-2008 NETWAYS GmbH, Christian Doebler 
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


// navigation
define('NAVIGATION_OVERVIEW', 'Overview');
define('NAVIGATION_NOTIFICATION', 'Notification');
define('NAVIGATION_CONTACTS', 'Contacts');
define('NAVIGATION_PROFILE', 'Profile');
define('NAVIGATION_CONTACTGROUPS', 'Contactgroups');
define('NAVIGATION_TIMEFRAMES', 'Timeframes');
define('NAVIGATION_STATUS', 'Status');
define('NAVIGATION_LOGS', 'Logs');
define('NAVIGATION_LOGOUT', 'LOGOUT');

// generic
define('GENERIC_YES', 'Yes');
define('GENERIC_NO', 'No');
define('LINKED_OBJECTS','Show linked objects');
define('LINKED_OBJECTS_SHOW','Show linked objects');
define('LINKED_OBJECTS_HIDE','Hide linked objects');

// overview
define('OVERVIEW_LOGOUT', 'Logout');
define('OVERVIEW_ADD_NEW_NOTIFICATION', 'Add new notification');
define('OVERVIEW_MANAGE_CONTACTS', 'Manage contacts');
define('OVERVIEW_MANAGE_CONTACTGROUPS', 'Manage contactgroups');
define('OVERVIEW_MANAGE_RECIPIENTS', 'Manage recipients');
define('OVERVIEW_LOG_VIEWER', 'View logs');
define('OVERVIEW_EDIT_USER_PROFILE', 'Edit user profile');
define('OVERVIEW_HEADING_NOTIFICATION_NAME', 'Name');
define('OVERVIEW_HEADING_ACTIONS', 'Actions');
define('OVERVIEW_HEADING_RECIPIENTS', 'Recipients');
define('OVERVIEW_HEADING_HOSTGROUPS', 'Hostgroups');
define('OVERVIEW_HEADING_HOSTS', 'Hosts');
define('OVERVIEW_HEADING_SERVICEGROUPS', 'Servicegroups');
define('OVERVIEW_HEADING_SERVICES', 'Services');
define('OVERVIEW_HEADING_OWNER', 'Owner');
define('OVERVIEW_HEADING_NOTIFICATION_RULE', 'No.');
define('OVERVIEW_HEADING_TIMEZONE', 'Timezone');
define('OVERVIEW_HEADING_NOTIFY_ON', 'Notify on');
define('OVERVIEW_HEADING_NOTIFY_BY', 'Notify by');
define('OVERVIEW_HEADING_NOTIFY_USERS', 'Notify users');
define('OVERVIEW_LONG_INCLUDE_HEADING', 'Include');
define('OVERVIEW_LONG_EXCLUDE_HEADING', 'Exclude');
define('OVERVIEW_TOGGLE_ACTIVE_ALT', 'Toggle active');
define('OVERVIEW_ACTIVE_TOOLTIP', 'Deactivate');
define('OVERVIEW_INACTIVE_TOOLTIP', 'Activate');
define('OVERVIEW_ACTIVE_TOOLTIP_DISABLED', 'TOGGLING DISABLED');
define('OVERVIEW_INACTIVE_TOOLTIP_DISABLED', 'TOGGLING DISABLED');
define('OVERVIEW_TOGGLE_ACTIVE_ALT_DISABLED', 'TOGGLING DISABLED');
define('OVERVIEW_EDIT_ENTRY_ALT_TOOLTIP', 'Edit entry');
define('OVERVIEW_DELETE_ENTRY_ALT_TOOLTIP', 'Delete entry');
define('OVERVIEW_NOTIFICATION_UPDATED', 'Notification updated.');
define('OVERVIEW_NOTIFICATION_ADDED', 'Notification added.');
define('OVERVIEW_NOTIFICATION_ADD_UPDATE_ERROR', 'An error occurred!');
define('OVERVIEW_TOGGLE_OK', 'Status changed.');
define('OVERVIEW_TOGGLE_ERROR', 'Invalid user!');
define('OVERVIEW_CONTACTGROUP_PREFIX', 'Grp:');


// add/edit notification
define('ADD_EDIT_OVERVIEW_LINK', 'Overview');
define('ADD_EDIT_HEADING_NEW', 'Add new notification');
define('ADD_EDIT_HEADING_EDIT', 'Edit notification');
define('ADD_EDIT_HEADING_HOSTS_AND_SERVICES', 'Hosts and services:');
define('ADD_EDIT_HEADING_TIME', 'Time:');
define('ADD_EDIT_HEADING_CONTACTS_METHODS', 'Contacts and methods:');
define('ADD_EDIT_HEADING_NOTIFICATION', 'Notifications:');
define('ADD_EDIT_HEADING_OWNER', 'Owner:');
define('ADD_EDIT_INCLUDE_HOSTGROUPS', 'Include hostgroups:');
define('ADD_EDIT_EXCLUDE_HOSTGROUPS', 'Exclude hostgroups:');
define('ADD_EDIT_INCLUDE_HOSTS', 'Include hosts:');
define('ADD_EDIT_EXCLUDE_HOSTS', 'Exclude hosts:');
define('ADD_EDIT_INCLUDE_SERVICES', 'Include services:');
define('ADD_EDIT_EXCLUDE_SERVICES', 'Exclude services:');
define('ADD_EDIT_INCLUDE_SERVICEGROUPS', 'Include servicegroups:');
define('ADD_EDIT_EXCLUDE_SERVICEGROUPS', 'Exclude servicegroups:');
define('ADD_EDIT_INCLUDE_RECIPIENTS', 'Include recipients:');
define('ADD_EDIT_EXCLUDE_RECIPIENTS', 'Exclude recipients:');
define('ADD_EDIT_NOTIFICATION_NAME', 'Notification name:');
define('ADD_EDIT_TIMEZONE', 'Timezone:');
define('ADD_EDIT_TIMEFRAME', 'Timeframe:');
define('ADD_EDIT_OWNER', 'Owner:');
define('ADD_EDIT_NOTIFY_USERS', 'Notify users:');
define('ADD_EDIT_NOTIFY_GROUPS', 'Notify groups:');
define('ADD_EDIT_NOTIFY_BY', 'Notify by:');
define('ADD_EDIT_NOTIFY_ON', 'Notify on:');
define('ADD_EDIT_SUBMIT', 'Save');
define('ADD_EDIT_BUTTON_ADD_ESCALATION', 'Add escalation');
define('ADD_EDIT_CONFIRM_ADD_ESCALATION', 'All unsaved data will be lost. Are you sure?');
define('ADD_EDIT_BUTTON_REMOVE_ESCALATION', 'Remove escalation');
define('ADD_EDIT_CONFIRM_REMOVE_ESCALATION', 'Do you really want to remove this escalation?');
define('ADD_EDIT_NOTIFY_AFTER_TRIES', 'Notify after:');
define('ADD_EDIT_LET_NOTIFIER_HANDLE', 'Let notifier handle escalations:');
define('ADD_EDIT_RELOOP_DELAY', 'Delay (in s) between escalations:');
define('ADD_EDIT_ROLLOVER', 'Rollover if the last rule is reached:');
define('ADD_EDIT_NUM_NOTIFICATIONS', '(number of notifications)');
define('ADD_EDIT_ESCALATION_DELETED', 'Escalation has been deleted.');
define('ADD_EDIT_ESCALATION_ERROR', 'An error occurred!');
define('ADD_EDIT_NOTIFICATION_ADD_UPDATE_ERROR', 'An error occurred!');
define('ADD_EDIT_NOTIFICATION_UPDATED', 'Notification updated.');
define('ADD_EDIT_PREVIEW_NO_RESULTS', 'No results.');
define('ADD_EDIT_HEADING_NOTIFICATION_NAME', 'Notification information');
define('ADD_EDIT_NOTIFICATION_DESC', 'Description(optional)');

// login
define('LOGIN_HEADING', 'Please login:');
define('LOGIN_USERNAME', 'User name:');
define('LOGIN_PASSWORD', 'Password:');
define('LOGIN_SUBMIT', 'Submit');
define('LOGIN_FAIL', 'Login failed!');
define('LOGIN_LOGOUT', 'You have been logged out.');


// contact manager
define('CONTACTS_OVERVIEW_LINK', 'Overview');
define('CONTACTS_ADD_EDIT_USER', 'Add and edit users');
define('CONTACTS_EDIT_USER', 'Edit user');
define('CONTACTS_SELECT_USER_NEW', 'create new');
define('CONTACTS_HEADING_NAME' , 'Name:');
define('CONTACTS_HEADING_CONTACT' , 'Contact:');
define('CONTACTS_HEADING_TIME' , 'Time:');
define('CONTACTS_HEADING_ADMIN' , 'Admin functions:');
define('CONTACTS_HEADING_HOLIDAYS' , 'Holidays:');
define('CONTACTS_HEADING_MEMBERSHIPS' , 'Memberships:');
define('CONTACTS_HEADING_NOTIFICATION_MEMBERSHIPS' , 'Notifications(direct membership):');
define('CONTACTS_HEADING_CONTACTGROUP_MEMBERSHIPS' , 'Contactgroups:');
define('CONTACTS_HEADING_NOTIFICATION_TO_CONTACTGROUP_MEMBERSHIPS', 'Notifications(inherited):');
define('CONTACTS_HEADING_ESCALATION_MEMBERSHIPS' , 'Escalations(direct membership):');
define('CONTACTS_HEADING_ESCALATION_TO_CONTACTGROUP_MEMBERSHIPS', 'Escalations(inherited):');

define('CONTACTS_NEW_USERNAME', 'Add user (username):');
define('CONTACTS_FULL_NAME', 'Full name:');
define('CONTACTS_USERNAME', 'User login:');
define('CONTACTS_PASSWORD', 'Password:');
define('CONTACTS_PASSWORD_VERIFY', 'Password (verification):');
define('CONTACTS_EMAIL', 'E-Mail:');
define('CONTACTS_PHONE', 'Phone:');
define('CONTACTS_MOBILE', 'Mobile:');
define('CONTACTS_GROWLADDRESS', 'Growl address:');
define('CONTACTS_GROWLREGISTER', 'Register with Growl(test notification):');
define('CONTACTS_RESTRICT_ALERTS', 'Suppress multiple alerts:');
define('CONTACTS_TIMEFRAME', 'Working hours:');
define('CONTACTS_TIMEZONE', 'Timezone:');
define('CONTACTS_USER', 'User to edit:');
define('CONTACTS_ADMIN', 'Administrator:');
define('CONTACTS_EDIT_BUTTON', 'Select user');
define('CONTACTS_DEL_BUTTON', 'Delete user');
define('CONTACTS_SUBMIT_ADD', 'Add user');
define('CONTACTS_SUBMIT_UPDATE', 'Update user data');
define('CONTACTS_CONFIRM_DEL', 'Do you really want to delete this contact?');
define('CONTACTS_HOLIDAYS_DELETE', 'Delete');
define('CONTACTS_HOLIDAY_ADD_NEW', 'Add new holiday:');
define('CONTACTS_HOLIDAY_DESC_NAME','Add holiday name: ');
define('CONTACTS_HOLIDAY_DESC_START','Holiday start: ');
define('CONTACTS_HOLIDAY_DESC_END','Holiday end: ');
define('CONTACTS_HOLIDAY_DESC_SHORT_START','Starts: ');
define('CONTACTS_HOLIDAY_DESC_SHORT_END','Ends: ');
define('CONTACTS_TITLE_GROUP_NAME_SHORT','Contacgroup short name');
define('CONTACTS_TITLE_GROUP_NAME','Contactgroup name ');
define('CONTACTS_TITLE_GROUP_VIEW_ONLY','Group view only ');
define('CONTACTS_TITLE_TIMEFRAME_NAME','Timeframe: ');
define('CONTACTS_TITLE_NOTIFICATION_NAME','Notification');
define('CONTACTS_TITLE_NOTIFICATION_ACTIVE', 'Active rule');
define('CONTACTS_TITLE_NOTIFICATION_NOTIFY_AFTER_TRIES', 'Notify after tries');
define('CONTACTS_TITLE_ESCALATION_NOTIFY_AFTER_TRIES', 'Notify after tries');
define('CONTACTS_UPDATED', 'Contact has been updated.');
define('CONTACTS_ADDED', 'Contact has been added.');
define('CONTACTS_DELETED', 'Contact has been deleted.');
define('CONTACTS_ADD_UPDATE_DEL_ERROR', 'An error occurred!');
define('CONTACTS_ADD_UPDATE_ERROR_PASSWD_MISMATCH', 'Password mismatch!');
define('CONTACTS_ADD_UPDATE_ERROR_INSUFF_RIGHTS', 'Insufficient rights to apply changes!');
define('CONTACTS_ADD_USER_EXISTS', 'User already exists!');
define('CONTACTS_ADD_UPDATE_PASSWD_MISSING', 'No Password set!');
define('CONTACTS_ADD_ADDED_BUT_NOT_IN_DB', 'Contact added but database has not been updated, yet.');

// timeframe manager
define('TIMEFRAME_OVERVIEW_LINK', 'Overview');
define('TIMEFRAME_HEADING', 'Manage timeframes');
define('TIMEFRAME_HEADING_SELECT', 'Select timeframe:');
define('TIMEFRAME_HEADING_ADD', 'Add timeframe:');
define('TIMEFRAME_HEADING_NAME' , 'Timeframe');
define('TIMEFRAME_HEADING_EDIT', 'Edit timeframe:');
define('TIMEFRAME_HEADING_HOLIDAYS' , 'Holidays:');
define('TIMEFRAME_HEADING_MEMBERSHIPS' , 'Memberships:');
define('TIMEFRAME_HEADING_NOTIFICATION_MEMBERSHIPS' , 'Notifications:');
define('TIMEFRAME_HEADING_CONTACTGROUP_MEMBERSHIPS' , 'Contactgroups:');
define('TIMEFRAME_HEADING_CONTACT_MEMBERSHIPS' , 'Contacts:');

define('TIMEFRAME_TITLE_GROUP_NAME_SHORT','Contacgroup short name');
define('TIMEFRAME_TITLE_GROUP_NAME','Contactgroup name ');
define('TIMEFRAME_TITLE_GROUP_VIEW_ONLY','Group view only ');
define('TIMEFRAME_TITLE_NOTIFICATION_NAME','Notification');
define('TIMEFRAME_TITLE_NOTIFICATION_ACTIVE', 'Active rule');
define('TIMEFRAME_TITLE_CONTACT_USERNAME', 'Username');
define('TIMEFRAME_TITLE_CONTACT_FULL_NAME', 'Full name');
define('TIMEFRAME_TITLE_SUPPRESS_MULTIPLE', 'Suppress multiple alerts');
define('TIMEFRAME_TITLE_TIMEZONE','Timezone');
define('TIMEFRAME_SELECT_FRAME_NEW', 'create new');
define('TIMEFRAME_EDIT_FRAMES', 'Edit timeframe:');
define('TIMEFRAME_EDIT_USERS', 'User(s):');
define('TIMEFRAME_EDIT_BUTTON', 'Edit timeframe');
define('TIMEFRAME_ADD_BUTTON', 'Add timeframe');
define('TIMEFRAME_DELETE_BUTTON', 'Delete timeframe');
define('TIMEFRAME_ADD_FRAME', 'New timeframe:');
define('TIMEFRAME_SUBMIT_CHANGES_BUTTON', 'Submit changes');
define('TIMEFRAME_FRAME_ADDED', 'Successfully created new timeframe!');
define('TIMEFRAME_ADDING_FAILED', 'Could not add new timeframe!');
define('TIMEFRAME_FRAME_UPDATE', 'Timeframe updated!');
define('TIMEFRAME_UPDATE_FAILED', 'Could not update timeframe!');
define('TIMEFRAME_FRAME_DELETED', 'Timeframe deleted!');
define('TIMEFRAME_DELETE_FAILED', 'Could not delete timeframe!');
define('TIMEFRAME_EDIT_NAME_SHORT', 'Name (short):');
define('TIMEFRAME_EDIT_NAME', 'Name:');
define('TIMEFRAME_CONFIRM_DEL', 'Do you really want to delete this timeframe?');
define('TIMEFRAME_TIMEFRAME', 'Notification hours:');

define('TIMEFRAME_HEADING_ADMIN' , 'Admin functions:');
define('TIMEFRAME_ADD_EDIT_FRAME', 'Add and edit timeframes');
define('TIMEFRAME_DEL_BUTTON', 'Delete timeframe');
define('TIMEFRAME_SUBMIT_ADD', 'Add timeframe');
define('TIMEFRAME_SUBMIT_UPDATE', 'Update timeframe data');
define('TIMEFRAME_HOLIDAYS_DELETE', 'Delete');
define('TIMEFRAME_HOLIDAY_ADD_NEW', 'Add new holiday:');
define('TIMEFRAME_HOLIDAY_DESC_NAME','Add holiday name: ');
define('TIMEFRAME_HOLIDAY_DESC_START','Holiday start: ');
define('TIMEFRAME_HOLIDAY_DESC_END','Holiday end: ');
define('TIMEFRAME_HOLIDAY_DESC_SHORT_START','Starts: ');
define('TIMEFRAME_HOLIDAY_DESC_SHORT_END','Ends: ');
define('TIMEFRAME_ADMIN', 'Administrator:');
define('TIMEFRAME_FRAMES', 'Timeframes:');
define('TIMEFRAME_FRAME_VALID_FROM', 'Valid from:');
define('TIMEFRAME_FRAME_VALID_TO', 'Valid to:');
define('TIMEFRAME_FRAME' , 'Timeframe:');

define('TIMEFRAME_TIME_FROM', 'From time');
define('TIMEFRAME_TIME_TO', 'To time');
define('TIMEFRAME_TIME_INVERT', 'Invert time');
define('TIMEFRAME_DAYS_ALL', 'All');
define('TIMEFRAME_DAYS_1ST', '1st');
define('TIMEFRAME_DAYS_2ND', '2nd');
define('TIMEFRAME_DAYS_3RD', '3rd');
define('TIMEFRAME_DAYS_4TH', '4th');
define('TIMEFRAME_DAYS_5TH', '5th');
define('TIMEFRAME_DAYS_LAST', 'Last');
define('TIMEFRAME_DAYS_OF_WEEK', 'Day of week');
define('TIMEFRAME_DAY_MONDAY', 'Monday');
define('TIMEFRAME_DAY_TUESDAY', 'Tuesday');
define('TIMEFRAME_DAY_WEDNESDAY', 'Wednesday');
define('TIMEFRAME_DAY_THURSDAY', 'Thursday');
define('TIMEFRAME_DAY_FRIDAY', 'Friday');
define('TIMEFRAME_DAY_SATURDAY', 'Saturday');
define('TIMEFRAME_DAY_SUNDAY', 'Sunday');

// log viewer
define('LOG_VIEWER_OVERVIEW_LINK', 'Overview');
define('LOG_VIEWER_HEADING', 'Log viewer');
define('LOG_VIEWER_FIND', 'Find:');
define('LOG_VIEWER_NUM_RESULTS', 'Number of results to display:');
define('LOG_VIEWER_HEADING_NOTIFICATION_RULE', 'Rule');
define('LOG_VIEWER_HEADING_TIMESTAMP', 'Time');
define('LOG_VIEWER_HEADING_CHECK_TYPE', 'Check type');
define('LOG_VIEWER_HEADING_HOSTGROUP', 'Hostgroup');
define('LOG_VIEWER_HEADING_HOST', 'Host');
define('LOG_VIEWER_HEADING_SERVICE', 'Service');
define('LOG_VIEWER_HEADING_SERVICEGROUP', 'Servicegroup');
define('LOG_VIEWER_HEADING_CHECK_RESULT', 'Check status');
define('LOG_VIEWER_HEADING_METHOD', 'Notification method');
define('LOG_VIEWER_HEADING_USER', 'Recipient');
define('LOG_VIEWER_HEADING_RESULT', 'Notification result');
define('LOG_VIEWER_FIND_SUBMIT', 'Submit');


// contactgroup manager
define('CONTACTGROUPS_OVERVIEW_LINK', 'Overview');
define('CONTACTGROUPS_HEADING', 'Manage contactgroups');
define('CONTACTGROUPS_HEADING_SELECT', 'Select contactgroup:');
define('CONTACTGROUPS_HEADING_ADD', 'Add contactgroup:');
define('CONTACTGROUPS_HEADING_MEMBERSHIPS' , 'Memberships:');
define('CONTACTGROUPS_HEADING_NOTIFICATION_MEMBERSHIPS' , 'Notifications(direct membership):');
define('CONTACTGROUPS_HEADING_ESCALATION_MEMBERSHIPS' , 'Escalations(direct membership):');
define('CONTACTGROUPS_SELECT_GROUP_NEW', 'create new');
define('CONTACTGROUPS_EDIT_GROUPS', 'Contactgroup:');
define('CONTACTGROUPS_EDIT_USERS', 'User(s):');
define('CONTACTGROUPS_EDIT_BUTTON', 'Edit group');
define('CONTACTGROUPS_ADD_BUTTON', 'Add group');
define('CONTACTGROUPS_DELETE_BUTTON', 'Delete group');
define('CONTACTGROUPS_ADD_NAME_SHORT', 'New group (short name):');
define('CONTACTGROUPS_ADD_NAME', 'New group (long name):');
define('CONTACTGROUPS_SUBMIT_CHANGES_BUTTON', 'Submit changes');
define('CONTACTGROUPS_HEADING_EDIT', 'Edit contact group:');
define('CONTACTGROUPS_GROUP_ADDED', 'Successfully created new group!');
define('CONTACTGROUPS_ADDING_FAILED', 'Could not add new group!');
define('CONTACTGROUPS_GROUP_UPDATE', 'Group updated!');
define('CONTACTGROUPS_UPDATE_FAILED', 'Could not update group!');
define('CONTACTGROUPS_GROUP_DELETED', 'Group deleted!');
define('CONTACTGROUPS_DELETE_FAILED', 'Could not delete group!');
define('CONTACTGROUPS_EDIT_NAME_SHORT', 'Name (short):');
define('CONTACTGROUPS_EDIT_NAME', 'Name:');
define('CONTACTGROUP_CONFIRM_DEL', 'Do you really want to delete this contactgroup?');
define('CONTACTGROUPS_VIEW_ONLY', 'Do not send notifications to members:');
define('CONTACTGROUPS_TIMEFRAME', 'Notification hours:');
define('CONTACTGROUPS_TIMEZONE', 'Group TimeZone:');
define('CONTACTGROUPS_TITLE_NOTIFICATION_NAME','Notification');
define('CONTACTGROUPS_TITLE_NOTIFICATION_ACTIVE', 'Active rule');
define('CONTACTGROUPS_TITLE_NOTIFICATION_NOTIFY_AFTER_TRIES', 'Notify after tries');
define('CONTACTGROUPS_TITLE_ESCALATION_NOTIFY_AFTER_TRIES', 'Notify after tries');
define('CONTACTGROUPS_TITLE_TIMEFRAME_NAME', 'Timeframe name');

?>
