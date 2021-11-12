<?php

/*
+-----------------------------------------------------------------------+
| Local configuration for the Roundcube Webmail installation.           |
|                                                                       |
| This is a sample configuration file only containing the minimum       |
| setup required for a functional installation. Copy more options       |
| from defaults.inc.php to this file to override the defaults.          |
|                                                                       |
| This file is part of the Roundcube Webmail client                     |
| Copyright (C) 2005-2013, The Roundcube Dev Team                       |
|                                                                       |
| Licensed under the GNU General Public License version 3 or            |
| any later version with exceptions for skins & plugins.                |
| See the README file for a full license statement.                     |
+-----------------------------------------------------------------------+
*/

$config = array();

/* Do not set db_dsnw here, use dpkg-reconfigure roundcube-core to configure database ! */
include_once("/etc/roundcube/debian-db-roundcube.php");

// The IMAP host chosen to perform the log-in.
// Leave blank to show a textbox at login, give a list of hosts
// to display a pulldown menu or set one host as string.
// To use SSL/TLS connection, enter hostname with prefix ssl:// or tls://
// Supported replacement variables:
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %s - domain name after the '@' from e-mail address provided at login screen
// For example %n = mail.domain.tld, %t = domain.tld
//$config['default_host'] = '';
$config['default_host'] = 'ssl://mx.trajearteoaxaca.com';
$config['default_port'] = 993;
$config['imap_auth_type'] = 'LOGIN';

// SMTP server host (for sending mails).
// Enter hostname with prefix tls:// to use STARTTLS, or use
// prefix ssl:// to use the deprecated SSL over SMTP (aka SMTPS)
// Supported replacement variables:
// %h - user's IMAP hostname
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %z - IMAP domain (IMAP hostname without the first part)
// For example %n = mail.domain.tld, %t = domain.tld
//$config['smtp_server'] = 'localhost';
$config['smtp_server'] = 'tls://mx.trajearteoaxaca.com';
$config['smtp_port'] = 587;

// SMTP port (default is 25; use 587 for STARTTLS or 465 for the
// deprecated SSL over SMTP (aka SMTPS))
//$config['smtp_port'] = 25;

// SMTP username (if required) if you use %u as the username Roundcube
// will use the current username for login
$config['smtp_user'] = '%u';

// SMTP password (if required) if you use %p as the password Roundcube
// will use the current user's password for login
$config['smtp_pass'] = '%p';

// provide an URL where a user can get support for this Roundcube installation
// PLEASE DO NOT LINK TO THE ROUNDCUBE.NET WEBSITE HERE!
$config['support_url'] = '';

// Name your service. This is displayed on the login screen and in the window title
$config['product_name'] = 'Roundcube Webmail';

// this key is used to encrypt the users imap password which is stored
// in the session record (and the client cookie if remember password is enabled).
// please provide a string of exactly 24 chars.
// YOUR KEY MUST BE DIFFERENT THAN THE SAMPLE VALUE FOR SECURITY REASONS
$config['des_key'] = '2P0w9QIi47DWO05BOO4kQxdi';

// List of active plugins (in plugins/ directory)
// Debian: install roundcube-plugins first to have any
//$config['plugins'] = array(
//);
// List of active plugins (in plugins/ directory)
$config['plugins'] = array(
	'virtuser_query',
	'additional_message_headers',
	'archive',
	'emoticons',
//	'help',
//	'hide_blockquote',
	'identity_select',
	'legacy_browser',
	'managesieve',
	'markasjunk',
	'newmail_notifier',
	'new_user_dialog',
	'new_user_identity',
	'password',
	'rcguard',
	'show_additional_headers',
//	'subscriptions_option',
//	'userinfo',
	'vcard_attachments',
	'zipdownload',
//	'xskin',
   	'identicon',
//	'enigma',
	'dkimstatus'
);

// skin name: folder from skins/
$config['skin'] = 'larry';

// Disable spellchecking
// Debian: spellshecking needs additional packages to be installed, or calling external APIs
//         see defaults.inc.php for additional informations
$config['enable_spellcheck'] = false;
$config['smtp_auth_type'] = 'LOGIN';
$config['product_name'] = 'Byteman.io - Curso de email server Udemy';
$config['useragent'] = 'Roundcube Webmail';

$config['virtuser_query'] = "SELECT email FROM mailserver.virtual_users WHERE email = '%u'";

//Cambio de password
$config['password_driver'] = 'sql';
$config['password_confirm_current'] = true;
$config['password_minimum_length'] = 6;
$config['password_require_nonalpha'] = true;
$config['password_log'] = false;
$config['password_login_exceptions'] = null;
$config['password_hosts'] = array('mx.trajearteoaxaca.com');
$config['password_force_save'] = true;
 
//SQL Driver options
$config['password__db_dsn'] = 'mysql://roundcube:@localhost/roundcube';
 
$config['password_query'] = 'UPDATE mailserver.virtual_users SET password=ENCRYPT(%p, CONCAT(\'$6$\',SUBSTRING((SHA(RAND())), -16))) WHERE email=%u LIMIT 1';
 
$config['enable_installer'] = false;
$config['htmleditor'] = 1;
