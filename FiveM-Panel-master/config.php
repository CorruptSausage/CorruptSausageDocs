<?php
	// PLEASE READ ALL COMMENTS AFTER PARAMETERS
	// PLEASE READ ALL COMMENTS AFTER PARAMETERS
	// PLEASE READ ALL COMMENTS AFTER PARAMETERS


	// DATABASE SETTINGS
	$GLOBALS['mysql_host'] = "localhost";										// MySQL Host
	$GLOBALS['mysql_user'] = "root";										// MySQL User
	$GLOBALS['mysql_pass'] = "";										// MySQL Password
	$GLOBALS['mysql_db'] = "fivempanel";											// MySQL Database

	// CRON SETTINGS
	$GLOBALS['phpbin'] = "/opt/cpanel/ea-php72/root/usr/bin/lsphp"; 	// Used for Multithreading (Set to EXE Location for Windows) (Find Linux Bin via cPanel Info) (Defaulted to ELHostingServices)

	// SITE SETTINGS
	$GLOBALS['domainname'] = "https://CorruptSausageFivemTestPanel.com/";				// URL (and folder if used) with protocol and trailing slash. Example: https://arthurmitchell.xyz/beta/
	$GLOBALS['subfolder'] = ""; 								// If accessing via a sub folder type the sub folder name out like the following: /foldername Example: /staff otherwise leave blank
	$GLOBALS['apikey'] = "0D698D96CA41BD4D12C6F7470D220CE8";								 			// SteamCommunity API Key https://steamcommunity.com/dev/apikey
	date_default_timezone_set('Europe/Amsterdam');						// Timezone (http://php.net/manual/en/timezones.php)

?>
