<?php
// -------------------------------------------------------------
//
// $Id$
//
// FILENAME  : common.php [ English ]
// STARTED   : Sat Dec 16, 2000
// COPYRIGHT : � 2001, 2003 phpBB Group
// WWW       : http://www.phpbb.com/
// LICENCE   : GPL vs2.0 [ see /docs/COPYING ] 
// 
// -------------------------------------------------------------

// DO NOT CHANGE
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE 
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang += array(
	'ENCODING'		=> 'iso-8859-15',
	'DIRECTION'		=> 'ltr',
	'LEFT'			=> 'left',
	'RIGHT'			=> 'right',
	'DATE_FORMAT'	=> '|d M Y|',

	
	'1_DAY'					=> '1 Day',
	'1_MONTH'				=> '1 Month',
	'1_YEAR'				=> '1 Year',
	'2_WEEKS'				=> '2 Weeks',
	'3_MONTHS'				=> '3 Months',
	'6_MONTHS'				=> '6 Months',
	'7_DAYS'				=> '7 Days',

	'ACP'					=> 'Administration Control Panel',
	'ACTIVE_ERROR'			=> 'You have specified an inactive username. Please activate your account and try again. If you continue to have problems please contact a board administrator.',
	'ALLOWED'				=> 'Allowed',
	'ALL_FORUMS'			=> 'All Forums',
	'ALL_MESSAGES'			=> 'All Messages',
	'ALL_POSTS'				=> 'All Posts',
	'ALL_TIMES'				=> 'All times are %s %s',
	'ALL_TOPICS'			=> 'All Topics',
	'AND'					=> 'And',
	'ARE_WATCHING_FORUM'	=> 'You have subscribed to receive updates on this forum',
	'ARE_WATCHING_TOPIC'	=> 'You have subscribed to receive updates on this topic.',
	'ASCENDING'				=> 'Ascending',
	'ATTACHMENTS'			=> 'Attachments',
	'AUTHOR'				=> 'Author',
	'AVATAR_NOT_UPLOADED'	=> 'Avatar could not be uploaded.',
	'AVATAR_NO_SIZE'		=> 'Could not obtain width or height of linked avatar, please enter them manually.',
	'AVATAR_URL_INVALID'	=> 'The URL you specified is invalid.',
	'AVATAR_WRONG_FILESIZE'	=> 'The avatar must be between 0 and %d bytes.',
	'AVATAR_WRONG_SIZE'		=> 'The avatar must be at least %1$d pixels wide, %2$d pixels high and at most %3$d pixels wide and %4$d pixels high.',

	'BACK_TO_TOP'			=> 'Top',
	'BCC'					=> 'Bcc',
	'BIRTHDAYS'				=> 'Birthdays',
	'BOARD_BAN_PERM'		=> 'You have been <b>permanently</b> banned from this board.<br /><br />Please contact the %2$sBoard Administrator%3$s for more information.',
	'BOARD_BAN_REASON'		=> 'Reason given for ban: <b>%s</b>',
	'BOARD_BAN_TIME'		=> 'You have been banned from this board until <b>%1$s</b>.<br /><br />Please contact the %2$sBoard Administrator%3$s for more information.',
	'BOARD_DISABLE'			=> 'Sorry but this board is currently unavailable',
	'BOARD_UNAVAILABLE'		=> 'Sorry but the board is temporarily unavailable, please try again in a few minutes',
	'BROWSING_FORUM_GUEST'	=> 'Users browsing this forum: %1$s and %2$d guest',
	'BROWSING_FORUM_GUESTS'	=> 'Users browsing this forum: %1$s and %2$d guests',
	'BYTES'					=> 'Bytes',

	'CANCEL'				=> 'Cancel',
	'CHANGE'				=> 'Change',
	'CLICK_VIEW_PRIVMSG'	=> 'Click %sHere%s to visit your Inbox',
	'CONFIRM'				=> 'Confirm',
	'CONGRATULATIONS'		=> 'Congratulations to',
	'COOKIES_DELETED'		=> 'All Board Cookies successfully deleted.',
	'CURRENT_TIME'			=> 'The time is %s',

	'DAY'					=> 'Day',
	'DAYS'					=> 'Days',
	'DELETE'				=> 'Delete',
	'DELETE_ALL'			=> 'Delete All',
	'DELETE_COOKIES'		=> 'Delete all board cookies',
	'DELETE_MARKED'			=> 'Delete Marked',
	'DESCENDING'			=> 'Descending',
	'DISABLED'				=> 'Disabled',
	'DISPLAY_MESSAGES'		=> 'Display messages from previous',
	'DISPLAY_POSTS'			=> 'Display posts from previous',
	'DISPLAY_TOPICS'		=> 'Display topics from previous',
	'DOWNLOADED'			=> 'Downloaded',
	'DOWNLOAD_COUNT'		=> '%d Time',
	'DOWNLOAD_COUNTS'		=> '%d Times',
	'DOWNLOAD_NONE'			=> '0 Times',

	'EMAIL'					=> 'Email',
	'EMAIL_ADDRESS'			=> 'Email address',
	'EMPTY_SUBJECT'			=> 'You must specify a subject when posting a new topic.',
	'ENABLED'				=> 'Enabled',
	'EXTENSION'				=> 'Extension',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'The extension <b>%s</b> has been deactivated and can no longer be displayed',

	'FAQ'					=> 'FAQ',
	'FILENAME'				=> 'Filename',
	'FILESIZE'				=> 'Filesize',
	'FILE_COMMENT'			=> 'File comment',
	'FIND_USERNAME'			=> 'Find a member',
	'FOLDER'				=> 'Folder',
	'FORGOT_PASS'			=> 'I forgot my password',
	'FORUM'					=> 'Forum',
	'FORUMS_MARKED'			=> 'All forums have been marked read',
	'FORUM_INDEX'			=> 'Board Index',
	'FORUM_LOCATION'		=> 'Forum Location',
	'FORUM_LOCKED'			=> 'Forum Locked',
	'FORUM_RULES'			=> 'Forum Rules',
	'FROM'					=> 'from',

	'GO'					=> 'Go',
	'GOTO_PAGE'				=> 'Goto page',
	'GROUP_ERR_DESC_LONG'	=> 'Group description too long.',
	'GROUP_ERR_TYPE'		=> 'Inappropriate group type specified.',
	'GROUP_ERR_USERNAME'	=> 'No group name specified.',
	'GROUP_ERR_USER_LONG'	=> 'Group name too long.',
	'GUEST'					=> 'Guest',
	'GUEST_USERS_ONLINE'	=> 'There are %d Guest users online',
	'GUEST_USERS_TOTAL'		=> '%d Guests',
	'GUEST_USERS_ZERO_ONLINE'	=> 'There are 0 Guest users online',
	'GUEST_USERS_ZERO_TOTAL'=> '0 Guests',
	'GUEST_USER_ONLINE'		=> 'There is %d Guest user online',
	'GUEST_USER_TOTAL'		=> '%d Guest',
	'G_ADMINISTRATORS'		=> 'Administrators',
	'G_BOTS'				=> 'Bots',
	'G_GUESTS'				=> 'Guests',
	'G_INACTIVE'			=> 'Unapproved Users',
	'G_INACTIVE_COPPA'		=> 'Unapproved COPPA Users',
	'G_REGISTERED'			=> 'Registered Users',
	'G_REGISTERED_COPPA'	=> 'Registered COPPA Users',
	'G_SUPER_MODERATORS'	=> 'Super Moderators',

	'HIDDEN_USERS_ONLINE'	=> '%d Hidden users online',
	'HIDDEN_USERS_TOTAL'	=> '%d Hidden and ',
	'HIDDEN_USERS_ZERO_ONLINE'	=> '0 Hidden users online',
	'HIDDEN_USERS_ZERO_TOTAL'	=> '0 Hidden and ',
	'HIDDEN_USER_ONLINE'	=> '%d Hidden user online',
	'HIDDEN_USER_TOTAL'		=> '%d Hidden and ',
	'HIDE_ME'				=> 'Hide my online status this session',
	'HOURS'					=> 'Hours',

	'ICQ_STATUS'			=> 'ICQ Status',
	'IF'					=> 'If',
	'INDEX'					=> 'Index page',
	'INFORMATION'			=> 'Information',
	'INTERESTS'				=> 'Interests',
	'INVALID_EMAIL_LOG'		=> '<b>%s</b> possibly an invalid email address?',
	'IP'					=> 'IP',

	'JOINED'				=> 'Joined',
	'JUMP_PAGE'				=> 'Enter the page number you wish to goto',
	'JUMP_TO'				=> 'Jump to',

	'KARMA'					=> array(
		'-5'	=> 'Extremely Bad',
		'-4'	=> 'Very Bad', 
		'-3'	=> 'Very Poor', 
		'-2'	=> 'Bad',
		'-1'	=> 'Poor', 
		'0'		=> 'Neutral', 
		'1'		=> 'Positive',
		'2'		=> 'Good',
		'3'		=> 'Very Good', 
		'4'		=> 'Extremely good', 
		'5'		=> 'Excellent'
	),
	'KB'				=> 'KB',

	'LAST_POST'			=> 'Last Post',
	'LAST_UPDATED'		=> 'Last Updated',
	'LDAP_DN'			=> 'LDAP base dn',
	'LDAP_DN_EXPLAIN'	=> 'This is the Distinguished Name, locating the user information, e.g. o=My Company,c=US',
	'LDAP_SERVER'		=> 'LDAP server name',
	'LDAP_SERVER_EXPLAIN'	=> 'If using LDAP this is the name or IP address of the server.',
	'LDAP_UID'			=> 'LDAP uid',
	'LDAP_UID_EXPLAIN'	=> 'This is the key under which to search for a given login identity, e.g. uid, sn, etc.',
	'LEGEND'			=> 'Legend',
	'LOCATION'			=> 'Location',
	'LOCK_POST'			=> 'Lock Post',
	'LOCK_POST_EXPLAIN'	=> 'Prevent editing',
	'LOCK_TOPIC'		=> 'Lock Topic',
	'LOGIN'				=> 'Login',
	'LOGIN_CHECK_PM'	=> 'Log in to check your private messages',
	'LOGIN_ERROR'		=> 'You have specified an incorrect username or password. Please check them both and try again. If you continue to have problems please contact a board administrator.',
	'LOGIN_FORUM'		=> 'To view or post in this forum you must enter a password.',
	'LOGIN_INFO'		=> 'In order to login you must be registered. Registering takes only a few seconds but gives you increased capabilies. The board administrator may also grant additional permissions to registered users. Before you login please ensure you are familiar with our terms of use and related policies. Please ensure you read any forum rules as you navigate around the board.',
	'LOGIN_VIEWFORUM'	=> 'The board administrator requires you to be registered and logged in to view this forum.',
	'LOGOUT_USER'		=> 'Logout [ %s ]',
	'LOG_DELETE_TOPIC'	=> '<b>Deleted topic</b><br />&#187; %s',
	'LOG_ME_IN'			=> 'Log me on automatically each visit',
	'LOG_USER_GENERAL'	=> '%s',

	'MARK'				=> 'Mark',
	'MARK_ALL'			=> 'Mark all',
	'MARK_FORUMS_READ'	=> 'Mark Forums Read',
	'MB'				=> 'MB',
	'MCP'				=> 'Moderator Control Panel',
	'MEMBERLIST'		=> 'Members',
	'MERGE_TOPIC'		=> 'Merge Topic',
	'MESSAGE'			=> 'Message',
	'MESSAGE_BODY'		=> 'Message body',
	'MINUTES'			=> 'Minutes',
	'MODERATE'			=> 'Moderate',
	'MODERATOR'			=> 'Moderator',
	'MODERATORS'		=> 'Moderators',
	'MONTH'				=> 'Month',
	'MOVE'				=> 'Move',

	'NA'				=> 'N/A',
	'NEWEST_USER'		=> 'Our newest member <b>%s%s%s</b>',
	'NEW_MESSAGE'		=> 'New Message',
	'NEW_MESSAGES'		=> 'New Messages',
	'NEW_PM'			=> '<b>%d</b> new message',
	'NEW_PMS'			=> '<b>%d</b> new messages',
	'NEW_POST'			=> 'New post',
	'NEW_POSTS'			=> 'New posts',
	'NEXT'				=> 'Next',
	'NO'				=> 'No',
	'NONE'				=> 'None',
	'NOT_WATCHING_FORUM'=> 'You no subscribe to updates on this forum',
	'NOT_WATCHING_TOPIC'=> 'You are no longer subscribed to this topic.',
	'NO_BIRTHDAYS'		=> 'No birthdays today',
	'NO_FORUM'			=> 'The forum you selected does not exist',
	'NO_FORUMS'			=> 'This board has no forums',
	'NO_GROUP'			=> 'The requested usergroup does not exist.',
	'NO_MEMBERS'		=> 'No members found for this search criteria',
	'NO_MESSAGES'		=> 'No Messages',
	'NO_NEW_MESSAGES'	=> 'No new messages',
	'NO_NEW_PM'			=> '<b>0</b> new messages',
	'NO_NEW_POSTS'		=> 'No new posts',
	'NO_POSTS'			=> 'No Posts',
	'NO_TOPIC'			=> 'The requested topic does not exist.',
	'NO_TOPICS'			=> 'There are no topics or posts in this forum.',
	'NO_UNREAD_PM'		=> '<b>0</b> unread messages',
	'NO_USER'			=> 'The requested user does not exist.',

	'OCCUPATION'		=> 'Occupation',
	'OFFLINE'			=> 'Offline',
	'ONLINE'			=> 'Online',
	'ONLINE_BUDDIES'	=> 'Online Buddies',
	'ONLINE_USERS_TOTAL'=> 'In total there are <b>%d</b> users online :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'In total there are <b>0</b> users online :: ',
	'ONLINE_USER_TOTAL'	=> 'In total there is <b>%d</b> user online :: ',
	'OPTIONS'			=> 'Options',

	'PAGE_OF'			=> 'Page <b>%1$d</b> of <b>%2$d</b>',
	'PASSWORD'			=> 'Password',
	'PM'				=> 'PM',
	'POSTING_MESSAGE'	=> 'Posting message in %s',
	'POST'				=> 'Post',
	'POSTED'			=> 'Posted',
	'POSTS'				=> 'Posts',
	'POST_BY_FOE'		=> 'This post was made by <b>%1$s</b> who is currently on your ignore list. To display this post click %2$sHERE%3$s.',
	'POST_DAY'			=> '%.2f posts per day',
	'POST_DETAILS'		=> 'Post Details',
	'POST_PCT'			=> '%.2f%% of all posts',
	'POST_REPORTED'		=> 'Click to view reports',
	'POST_SUBJECT'		=> 'Post Subject',
	'POST_TIME'			=> 'Post time',
	'POST_UNAPPROVED'	=> 'Click to approve post',
	'PREVIEW'			=> 'Preview',
	'PREVIOUS'			=> 'Previous',
	'PRIVACY'			=> 'Privacy Policy',
	'PRIVATE_MESSAGE'	=> 'Private Message',
	'PRIVATE_MESSAGES'	=> 'Private Messages',
	'PRIVATE_MESSAGING'	=> 'Private Messaging',
	'PROFILE'			=> 'User Control Panel',

	'READING_FORUM'		=> 'Viewing topics in %s',
	'READING_TOPIC'		=> 'Reading topic in %s',
	'READ_PROFILE'		=> 'Profile',
	'REASON'			=> 'Reason',
	'RECORD_ONLINE_USERS'	=> 'Most users ever online was <b>%1$s</b> on %2$s',
	'REDIRECTS'			=> 'Total redirects',
	'REGISTER'			=> 'Register',
	'REGISTERED_USERS'	=> 'Registered Users:',
	'REG_USERS_ONLINE'	=> 'There are %d Registered users and ',
	'REG_USERS_TOTAL'	=> '%d Registered, ',
	'REG_USERS_ZERO_ONLINE'	=> 'There are 0 Registered users and ',
	'REG_USERS_ZERO_TOTAL'	=> '0 Registered, ',
	'REG_USER_ONLINE'	=> 'There is %d Registered user and ',
	'REG_USER_TOTAL'	=> '%d Registered, ',
	'REMOVE'			=> 'Remove',
	'REMOVE_INSTALL'	=> 'Please delete, move or rename the install directory.',
	'REPLIES'			=> 'Replies',
	'REPLY_WITH_QUOTE'	=> 'Reply with quote',
	'REPLYING_MESSAGE'	=> 'Replying to message in %s',
	'RESET'				=> 'Reset',
	'RETURN_INDEX'		=> 'Click %sHere%s to return to the index',
	'RETURN_FORUM'		=> 'Click %sHere%s to return to the forum',
	'RETURN_PAGE'		=> 'Click %sHere%s to return to the previous page',
	'RETURN_TOPIC'		=> 'Click %sHere%s to return to the topic',
	'RULES_ATTACH_CAN'	=> 'You <b>can</b> post attachments in this forum',
	'RULES_ATTACH_CANNOT'	=> 'You <b>cannot</b> post attachments in this forum',
	'RULES_DELETE_CAN'	=> 'You <b>can</b> delete your posts in this forum',
	'RULES_DELETE_CANNOT'	=> 'You <b>cannot</b> delete your posts in this forum',
	'RULES_DOWNLOAD_CAN'	=> 'You <b>can</b> download attachments in this forum',
	'RULES_DOWNLOAD_CANNOT'	=> 'You <b>cannot</b> download attachments in this forum',
	'RULES_EDIT_CAN'	=> 'You <b>can</b> edit your posts in this forum',
	'RULES_EDIT_CANNOT'	=> 'You <b>cannot</b> edit your posts in this forum',
	'RULES_LOCK_CAN'	=> 'You <b>can</b> lock your topics in this forum',
	'RULES_LOCK_CANNOT'	=> 'You <b>cannot</b> lock your topics in this forum',
	'RULES_POST_CAN'	=> 'You <b>can</b> post new topics in this forum',
	'RULES_POST_CANNOT'	=> 'You <b>cannot</b> post new topics in this forum',
	'RULES_REPLY_CAN'	=> 'You <b>can</b> reply to topics in this forum',
	'RULES_REPLY_CANNOT'=> 'You <b>cannot</b> reply to topics in this forum',
	'RULES_VOTE_CAN'	=> 'You <b>can</b> vote in polls in this forum',
	'RULES_VOTE_CANNOT'	=> 'You <b>cannot</b> vote in polls in this forum',

	'SEARCH'			=> 'Search',
	'SEARCHING_FORUMS'	=> 'Searching forums',
	'SELECT_DESTINATION_FORUM'	=> 'Please select a forum for destination',
	'SEARCH_FOR'		=> 'Search for',
	'SEARCH_NEW'		=> 'View new posts',
	'SEARCH_SELF'		=> 'View your posts',
	'SEARCH_UNANSWERED'	=> 'View unanswered posts',
	'SELECT'			=> 'Select',
	'SELECT_FORUM'		=> 'Select a forum',
	'SIGNATURE'			=> 'Signature',
	'SORT_BY'			=> 'Sort by',
	'SORT_JOINED'		=> 'Joined Date',
	'SORT_LOCATION'		=> 'Location',
	'SORT_TOPIC_TITLE'	=> 'Topic Title',
	'SORT_USERNAME'		=> 'Username',
	'SPLIT_TOPIC'		=> 'Split Topic',
	'STATISTICS'		=> 'Statistics',
	'START_WATCHING_FORUM'	=> 'Subscribe Forum',
	'START_WATCHING_TOPIC'	=> 'Subscribe Topic',
	'STOP_WATCHING_FORUM'	=> 'Unsubscribe Forum',
	'STOP_WATCHING_TOPIC'	=> 'Unsubscribe Topic',
	'SUBFORUM'			=> 'Subforum',
	'SUBFORUMS'			=> 'Subforums',
	'SUBJECT'			=> 'Subject',
	'SUBMIT'			=> 'Submit',

	'TERMS_USE'			=> 'Terms of Use',
	'TIME'				=> 'Time',
	'TOO_LONG_USER_PASSWORD'	=> 'The password you entered is too long.',
	'TOO_MANY_VOTE_OPTIONS'		=> 'You have tried to vote for too many options.',
	'TOO_SHORT_NEW_PASSWORD'	=> 'The password you entered is too short.',
	'TOO_SHORT_PASSWORD_CONFIRM'=> 'The password confirmation you entered is too short.',
	'TOO_SHORT_USER_PASSWORD'	=> 'The password you entered is too short.',
	'TOPIC'				=> 'Topic',
	'TOPICS'			=> 'Topics',
	'TOPIC_ICON'		=> 'Topic icon',
	'TOPIC_LOCKED'		=> 'This topic is locked you cannot edit posts or make replies',
	'TOPIC_TITLE'		=> 'Topic Title',
	'TOPIC_UNAPPROVED'	=> 'This topic has not been approved',
	'TOTAL_ATTACHMENTS'	=> '%d Attachments',
	'TOTAL_NO_PM'		=> '0 private messages in total',
	'TOTAL_PM'			=> '1 private messages in total',
	'TOTAL_PMS'			=> '$d private messages in total',
	'TOTAL_POSTS'		=> 'Total posts',
	'TOTAL_POSTS_OTHER'	=> 'Total posts <b>%d</b>',
	'TOTAL_POSTS_ZERO'	=> 'Total posts <b>0</b>',
	'TOTAL_TOPICS_OTHER'=> 'Total topics <b>%d</b>',
	'TOTAL_TOPICS_ZERO'	=> 'Total topics <b>0</b>',
	'TOTAL_USERS_OTHER'	=> 'Total members <b>%d</b>',
	'TOTAL_USERS_ZERO'	=> 'Total members <b>0</b>',

	'UNKNOWN_BROWSER'	=> 'Unknown Browser',
	'UNMARK_ALL'		=> 'Unmark all',
	'UNREAD_MESSAGES'	=> 'Unread Messages',
	'UNREAD_PM'			=> '<b>%d</b> unread message',
	'UNREAD_PMS'		=> '<b>%d</b> unread messages',
	'URL_REDIRECT'		=> 'If your browser does not support meta redirection please click %sHERE%s to be redirected.',
	'USERGROUPS'		=> 'Groups',
	'USERNAME'			=> 'Username',
	'USERNAMES'			=> 'Usernames',
	'USER_POST'			=> '%d Post',
	'USER_POSTS'		=> '%d Posts',
	'USERS'				=> 'Users',

	'VIEWED'			=> 'Viewed',
	'VIEWING_FAQ'		=> 'Viewing FAQ',
	'VIEWING_MEMBERS'	=> 'Viewing member details',
	'VIEWING_ONLINE'	=> 'Viewing who is online',
	'VIEWS'				=> 'Views',
	'VIEW_BOOKMARKS'	=> 'View bookmarks',
	'VIEW_LATEST_POST'	=> 'View latest post',
	'VIEW_NEWEST_POST'	=> 'View newest post',
	'VIEW_ONLINE_TIME'	=> 'This data is based on users active over the past %d minute',
	'VIEW_ONLINE_TIMES'	=> 'This data is based on users active over the past %d minutes',
	'VIEW_TOPIC'		=> 'View topic',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Announcement: ',
	'VIEW_TOPIC_LOCKED'	=> 'Locked: ',
	'VIEW_TOPIC_LOGS'	=> 'View Logs',
	'VIEW_TOPIC_MOVED'	=> 'Moved: ',
	'VIEW_TOPIC_POLL'	=> 'Poll: ',
	'VIEW_TOPIC_STICKY'	=> 'Sticky: ',

	'WEBSITE'			=> 'Website',
	'WHOIS'				=> 'Whois',
	'WHO_IS_ONLINE'		=> 'Who is Online',
	'WRONG_PASSWORD'	=> 'You entered an incorrect password.',

	'YEAR'				=> 'Year',
	'YES'				=> 'Yes',
	'YOU_LAST_VISIT'	=> 'Last visit on %s',
	'YOU_NEW_PM'		=> 'A new private message is waiting for you in your Inbox',
	'YOU_NEW_PMS'		=> 'New private messages are waiting for you in your Inbox',
	'YOU_NO_NEW_PM'		=> 'No new private messages are waiting for you',

	'datetime'			=> array(
		'TODAY'		=> 'Today, ',
		'YESTERDAY'	=> 'Yesterday, ',

		'Sunday'	=> 'Sunday',
		'Monday'	=> 'Monday',
		'Tuesday'	=> 'Tuesday',
		'Wednesday'	=> 'Wednesday',
		'Thursday'	=> 'Thursday',
		'Friday'	=> 'Friday',
		'Saturday'	=> 'Saturday',
		
		'Sun'		=> 'Sun',
		'Mon'		=> 'Mon',
		'Tue'		=> 'Tue',
		'Wed'		=> 'Wed',
		'Thu'		=> 'Thu',
		'Fri'		=> 'Fri',
		'Sat'		=> 'Sat',

		'January'	=> 'January',
		'February'	=> 'February',
		'March'		=> 'March',
		'April'		=> 'April',
		'May'		=> 'May',
		'June'		=> 'June',
		'July'		=> 'July',
		'August'	=> 'August',
		'September' => 'September',
		'October'	=> 'October',
		'November'	=> 'November',
		'December'	=> 'December',

		'Jan'		=> 'Jan',
		'Feb'		=> 'Feb',
		'Mar'		=> 'Mar',
		'Apr'		=> 'Apr',
		'Jun'		=> 'Jun',
		'Jul'		=> 'Jul',
		'Aug'		=> 'Aug',
		'Sep'		=> 'Sep',
		'Oct'		=> 'Oct',
		'Nov'		=> 'Nov',
		'Dec'		=> 'Dec',

		'TODAY'		=> 'Today',
		'YESTERDAY'	=> 'Yesterday',
	),
	
	'tz'				=> array(
		'-13'	=> 'GMT - 13 Hours',
		'-12'	=> 'GMT - 12 Hours',
		'-11'	=> 'GMT - 11 Hours',
		'-10'	=> 'GMT - 10 Hours',
		'-9'	=> 'GMT - 9 Hours',
		'-8'	=> 'GMT - 8 Hours',
		'-7'	=> 'GMT - 7 Hours',
		'-6'	=> 'GMT - 6 Hours',
		'-5'	=> 'GMT - 5 Hours',
		'-4'	=> 'GMT - 4 Hours',
		'-3.5'	=> 'GMT - 3.5 Hours',
		'-3'	=> 'GMT - 3 Hours',
		'-2.5'	=> 'GMT - 2.5 Hours',
		'-2'	=> 'GMT - 2 Hours',
		'-1'	=> 'GMT - 1 Hours',
		'0'		=> 'GMT',
		'1'		=> 'GMT + 1 Hour',
		'2'		=> 'GMT + 2 Hours',
		'3'		=> 'GMT + 3 Hours',
		'3.5'	=> 'GMT + 3.5 Hours',
		'4'		=> 'GMT + 4 Hours',
		'4.5'	=> 'GMT + 4.5 Hours',
		'5'		=> 'GMT + 5 Hours',
		'5.5'	=> 'GMT + 5.5 Hours',
		'6'		=> 'GMT + 6 Hours',
		'6.5'	=> 'GMT + 6.5 Hours',
		'7'		=> 'GMT + 7 Hours',
		'8'		=> 'GMT + 8 Hours',
		'9'		=> 'GMT + 9 Hours',
		'9.5'	=> 'GMT + 9.5 Hours',
		'10'	=> 'GMT + 10 Hours',
		'10.5'	=> 'GMT + 10.5 Hours',
		'11'	=> 'GMT + 11 Hours',
		'12'	=> 'GMT + 12 Hours',
		'13'	=> 'GMT + 13 Hours',
		'dst'	=> '[ DST ]'
	),
);

// Pool of unused or currently not assignable language variables
$unused = array(
	'ALREADY_VOTED' => 'You have already voted in this poll and may not change your selection.',
	'AM' => 'AM',
	'AVATAR' => 'Avatar',
	'Add_member' => 'Add Member',
	'All_Messages' => 'All Messages',
	'Already_member_group' => 'You are already a member of this group',
	'Approve_selected' => 'Approve Selected',
	'Are_group_moderator' => 'You are the group moderator',
	'BY' => 'by',
	'CANNOT_DELETE_POLL' => 'Sorry but you cannot delete an active poll.',
	'CANNOT_SPLIT_FIRST_POST' => 'You cannot split the first post of a topic',
	'CONTACT' => 'Contact',
	'Cannot_send_privmsg' => 'Sorry but the administrator has prevented you from sending private messages',
	'Confirm_delete_pm' => 'Are you sure you want to delete this message?',
	'Confirm_delete_pms' => 'Are you sure you want to delete these messages?',
	'Confirm_unsub' => 'Are you sure you want to unsubscribe from this group?',
	'Confirm_unsub_pending' => 'Your subscription to this group has not yet been approved, are you sure you want to unsubscribe?',
	'Could_not_add_user' => 'The user you selected does not exist',
	'Could_not_anon_user' => 'You cannot make Anonymous a group member',
	'Current_memberships' => 'Current memberships',
	'DESCRIPTION' => 'Description',
	'DOWNLOAD' => 'Download',
	'Date' => 'Date',
	'Deny_selected' => 'Deny Selected',
	'Disable_BBCode_pm' => 'Disable BBCode in this message',
	'Disable_HTML_pm' => 'Disable HTML in this message',
	'Disable_Smilies_pm' => 'Disable Smilies in this message',
	'Display_messages' => 'Display messages from previous',
	'EDIT_OWN_POSTS' => 'Sorry but you can only edit your own posts.',
	'EMAIL_TAKEN_EMAIL' => 'The email address you specified is already in use, please select an alternative.',
	'ERROR' => 'Error',
	'Edit_message' => 'Edit private message',
	'Find' => 'Find',
	'Flag' => 'Flag',
	'From' => 'From',
	'Group_Control_Panel' => 'Group Control Panel',
	'Group_Information' => 'Group Information',
	'Group_Members' => 'Group Members',
	'Group_Moderator' => 'Group Moderator',
	'Group_added' => 'You have been added to this usergroup',
	'Group_approved' => 'Your request has been approved',
	'Group_closed' => 'Closed group',
	'Group_description' => 'Group description',
	'Group_hidden' => 'Hidden group',
	'Group_hidden_members' => 'This group is hidden, you cannot view its membership',
	'Group_joined' => 'You have successfully subscribed to this group<br />You will be notified when your subscription is approved by the group moderator',
	'Group_member_details' => 'Group Membership Details',
	'Group_member_join' => 'Join a Group',
	'Group_membership' => 'Group membership',
	'Group_name' => 'Group name',
	'Group_not_exist' => 'That user group does not exist',
	'Group_open' => 'Open group',
	'Group_request' => 'A request to join your group has been made',
	'Group_type' => 'Group type',
	'Group_type_updated' => 'Successfully updated group type',
	'IP_ADDRESS' => 'IP Address',
	'Inbox' => 'Inbox',
	'Inbox_size' => 'Your Inbox is %d%% full',
	'Join_group' => 'Join Group',
	'LOGOUT' => 'Logout',
	'Login_to_join' => 'Login to join or manage group memberships',
	'Member_this_group' => 'You are a member of this group',
	'Memberships_pending' => 'Memberships pending',
	'Message_sent' => 'Your message has been sent',
	'NEVER' => 'Never',
	'NOT_AUTHORISED' => 'Not Authorised',
	'NO_MODE' => 'No mode specified.',
	'No_folder' => 'No folder specified',
	'No_group_members' => 'This group has no members',
	'No_match' => 'No matches found',
	'No_messages_folder' => 'You have no messages in this folder',
	'No_pending_group_members' => 'This group has no pending members',
	'No_such_folder' => 'No such folder exists',
	'No_such_user' => 'Sorry but no such user exists',
	'No_to_user' => 'You must specify a username to send this message',
	'Non_member_groups' => 'Non-member groups',
	'Not_group_moderator' => 'You are not this groups moderator therefor you cannot preform that action.',
	'Not_logged_in' => 'You must be logged in to join a group.',
	'Notification_subject' => 'New Private Message has arrived',
	'Outbox' => 'Outbox',
	'PASSWORD_MISMATCH' => 'The passwords you entered did not match',
	'PLEASE_SELECT_FORUM' => 'Please select a forum',
	'POLL_DELETED' => 'Your poll has been deleted successfully',
	'POSTER_CHANGED_SUCESS' => 'The poster of this message has been successfully changed',
	'POST_IGNORE' => 'This post was made by <b>%1$s</b> who is on your ignore list. To display this post click %sHERE%s.',
	'POST_TOPIC_LOCKED' => 'Topic is locked',
	'Pending_members' => 'Pending Members',
	'Pending_this_group' => 'Your membership of this group is pending',
	'RATING' => 'Rating',
	'READING_GLOBAL_ANNOUNCE' => 'Reading global announcement',
	'REPLYING_GLOBAL_ANNOUNCE' => 'Replying to global announcement',
	'RESULT_DIR' => 'Order results',
	'RETURN_GROUP' => 'Click %sHere%s to return to the Group Control Panel',
	'RETURN_LOGIN' => 'Click %sHere%s to try again',
	'RETURN_MCP' => 'Click %sHere%s to return to the Moderator Control Panel',
	'Read_message' => 'Read message',
	'Read_pm' => 'Read message',
	'Remove_selected' => 'Remove Selected',
	'SEARCH_PREVIOUS' => 'Search previous',
	'SIGNATURE_NOTICE' => 'Please note that some forums limit the size and content of your signature. Be sure to read any forum or board rules to ensure you comply with them.',
	'SORT_POSTS' => 'Total posts',
	'SORT_WEBSITE' => 'Website',
	'SPELLCHECK' => 'Spellcheck',
	'START_PAGE' => 'Make my start page',
	'Save_marked' => 'Save Marked',
	'Save_message' => 'Save Message',
	'Savebox' => 'Savebox',
	'Savebox_size' => 'Your Savebox is %d%% full',
	'Saved' => 'Saved',
	'Send_a_new_message' => 'Send a new private message',
	'Send_a_reply' => 'Reply to a private message',
	'Sent' => 'Sent',
	'Sentbox_size' => 'Your Sentbox is %d%% full',
	'This_closed_group' => 'This is a closed group, no more users accepted',
	'This_hidden_group' => 'This is a hidden group, automatic user addition is not allowed',
	'This_open_group' => 'This is an open group, click to request membership',
	'To_long_subject' => 'The subject is too long it must be 60 characters or less.',
	'UNREAD_NO_PM' => 'You have no unread private messages',
	'UNWATCHED_FORUMS' => 'You are no longer watching the selected forums.',
	'UNWATCHED_FORUMS_TOPICS' => 'You are no longer watching the selected forums or topics.',
	'UNWATCHED_TOPICS' => 'You are no longer watching the selected topics.',
	'UPDATE' => 'Update',
	'USER_OFFLINE' => 'Offline',
	'Unsub_success' => 'You have been un-subscribed from this group.',
	'User_is_member_group' => 'User is already a member of this group',
	'VIEWING_MESSAGES' => 'Viewing Private Messages',
	'View_Information' => 'View Information'
);


?>