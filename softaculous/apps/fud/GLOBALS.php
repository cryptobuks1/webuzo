<?php
/**
* copyright            : (C) 2001-2012 Advanced Internet Designs Inc.
* email                : forum@prohost.org
* $Id: GLOBALS.php 5446 2012-04-18 11:52:42Z naudefj $
*
* This program is free software; you can redistribute it and/or modify it
* under the terms of the GNU General Public License as published by the
* Free Software Foundation; version 2 of the License.
**/

	$GLOBALS['INCLUDE'] 		= '[[softdatadir]]/include/';
	$GLOBALS['WWW_ROOT'] 		= '[[softurl]]/';
	$GLOBALS['WWW_ROOT_DISK']	= '[[softpath]]/';
	$GLOBALS['DATA_DIR']		= '[[softdatadir]]/';
	$GLOBALS['ERROR_PATH'] 		= '[[softdatadir]]/errors/';
	$GLOBALS['MSG_STORE_DIR']	= '[[softdatadir]]/messages/';
	$GLOBALS['TMP']			= '[[softdatadir]]/tmp/';
	$GLOBALS['FILE_STORE']		= '[[softdatadir]]/files/';
	$GLOBALS['FORUM_SETTINGS_PATH'] = '[[softdatadir]]/cache/';
	$GLOBALS['PLUGIN_PATH'] 	= '[[softdatadir]]/plugins/';

	$GLOBALS['FUD_OPT_1']		= 1741616191;
	$GLOBALS['FUD_OPT_2']		= 1777733759;
	$GLOBALS['FUD_OPT_3']		= 41943104;
	$GLOBALS['FUD_OPT_4']		= 3;

	$GLOBALS['CUSTOM_AVATAR_MAX_SIZE'] = 10000;	/* bytes */
	$GLOBALS['CUSTOM_AVATAR_MAX_DIM']  = '64x64';	/* width x height (pixels) */

	$GLOBALS['COOKIE_PATH']		= '[[relativeurl]]/';
	$GLOBALS['COOKIE_DOMAIN']	= '.[[domhost]]';
	$GLOBALS['COOKIE_NAME']		= 'fud_session_[[timestamp]]';
	$GLOBALS['COOKIE_TIMEOUT'] 	= 604800;	/* seconds */
	$GLOBALS['SESSION_TIMEOUT'] 	= 1800;		/* seconds */

	$GLOBALS['DBHOST'] 		= '[[softdbhost]]';
	$GLOBALS['DBHOST_SLAVE_HOST']	= '';
	$GLOBALS['DBHOST_USER']		= '[[softdbuser]]';
	$GLOBALS['DBHOST_PASSWORD']	= '[[softdbpass]]';
	$GLOBALS['DBHOST_DBNAME']	= '[[softdb]]';
	$GLOBALS['DBHOST_TBL_PREFIX']	= 'fud30_';		/* do not modify this */
	$GLOBALS['DBHOST_DBTYPE']	= 'mysqli';

	$GLOBALS['FUD_SMTP_SERVER']	= '127.0.0.1';
	$GLOBALS['FUD_SMTP_PORT']	= 25;
	$GLOBALS['FUD_SMTP_TIMEOUT']	= 10;		/* seconds */
	$GLOBALS['FUD_SMTP_LOGIN']	= '';
	$GLOBALS['FUD_SMTP_PASS']	= '';

	$GLOBALS['ADMIN_EMAIL'] 	= '[[admin_email]]';

	$GLOBALS['PRIVATE_ATTACHMENTS']	= 5;		/* int */
	$GLOBALS['PRIVATE_ATTACH_SIZE']	= 1000000;	/* bytes */
	$GLOBALS['MAX_PMSG_FLDR_SIZE']	= 300000;	/* bytes */
	$GLOBALS['MAX_PMSG_FLDR_SIZE_AD']	= 1000000;	/* bytes */
	$GLOBALS['MAX_PMSG_FLDR_SIZE_PM']	= 1000000;	/* bytes */

	$GLOBALS['FORUM_IMG_CNT_SIG']	= 2;		/* int */
	$GLOBALS['FORUM_SIG_ML']	= 256;		/* int */

	$GLOBALS['UNCONF_USER_EXPIRY']	= 7;		/* days */
	$GLOBALS['MOVED_THR_PTR_EXPIRY']	= 3;		/* days */

	$GLOBALS['MAX_SMILIES_SHOWN']	= 15;		/* int */
	$GLOBALS['DISABLED_REASON']	= 'Temporarily offline; please come back soon!';
	$GLOBALS['POSTS_PER_PAGE'] 	= 40;
	$GLOBALS['THREADS_PER_PAGE']	= 40;
	$GLOBALS['WORD_WRAP']		= 60;
	$GLOBALS['NOTIFY_FROM']		= '[[admin_email]]';		/* email */
	$GLOBALS['ANON_NICK']		= 'Anonymous';	/* coward */
	$GLOBALS['FLOOD_CHECK_TIME']	= 60;		/* seconds */
	$GLOBALS['MOD_FIRST_N_POSTS']	= 1;
	$GLOBALS['POSTS_BEFORE_LINKS']	= 1;
	$GLOBALS['POST_MIN_LEN']	= 3;
	$GLOBALS['SERVER_TZ']		= 'UTC';
	$GLOBALS['SEARCH_CACHE_EXPIRY']	= 172800;	/* seconds */
	$GLOBALS['MEMBERS_PER_PAGE']	= 40;
	$GLOBALS['POLLS_PER_PAGE']	= 40;
	$GLOBALS['THREAD_MSG_PAGER']	= 5;
	$GLOBALS['GENERAL_PAGER_COUNT']	= 15;
	$GLOBALS['EDIT_TIME_LIMIT']	= 0;
	$GLOBALS['LOGEDIN_TIMEOUT']	= 5;		/* minutes */
	$GLOBALS['MAX_IMAGE_COUNT']	= 10;
	$GLOBALS['STATS_CACHE_AGE']	= 600;		/* seconds */
	$GLOBALS['FORUM_TITLE']		= '[[site_name]]';
	$GLOBALS['FORUM_DESCR']		= '[[site_desc]]';
	$GLOBALS['MAX_LOGIN_SHOW']	= 25;
	$GLOBALS['MAX_LOCATION_SHOW']	= 25;
	$GLOBALS['SHOW_N_MODS']		= 2;

	$GLOBALS['TREE_THREADS_MAX_DEPTH']	= 15;
	$GLOBALS['TREE_THREADS_MAX_SUBJ_LEN']	= 75;

	$GLOBALS['REG_TIME_LIMIT']		= 60;		/* seconds */
	$GLOBALS['POST_ICONS_PER_ROW']	= 9;		/* int */
	$GLOBALS['MAX_LOGGEDIN_USERS']	= 25;		/* int */
	$GLOBALS['PHP_COMPRESSION_LEVEL']	= 9;		/* int 1-9 */
	$GLOBALS['PHP_CLI']		= '';		/* Command line PHP exectable */
	$GLOBALS['MNAV_MAX_DATE']	= 31;		/* days */
	$GLOBALS['MNAV_MAX_LEN']	= 256;		/* characters */

	$GLOBALS['FEED_MAX_N_RESULTS']	= 20;		/* int */
	$GLOBALS['FEED_AUTH_ID']	= 0;		/* 0 - treat as anon user, >0 treat like specific forum user */
	$GLOBALS['FEED_CACHE_AGE']	= 3600;

	$GLOBALS['PDF_PAGE']		= 'letter';	/* string */
	$GLOBALS['PDF_WMARGIN']		= 15;		/* int */
	$GLOBALS['PDF_HMARGIN']		= 15;		/* int */
	$GLOBALS['PDF_MAX_CPU']		= 15;		/* seconds */

	$GLOBALS['FUD_WHOIS_SERVER']	= 'ws.arin.net';
	$GLOBALS['MIN_TIME_BETWEEN_LOGIN']	= 10;		/* seconds */

/* DO NOT EDIT FILE BEYOND THIS POINT UNLESS YOU KNOW WHAT YOU ARE DOING */

	require($INCLUDE .'core.inc');
?>
