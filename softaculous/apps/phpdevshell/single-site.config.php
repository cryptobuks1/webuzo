<?php

//////////////////////////////////////////////////////////////////////////////////////////
// Mandatory Settings, these settings must be changed for the system to work correctly. //
//////////////////////////////////////////////////////////////////////////////////////////

$master = $configuration['master_database'];

/**
 * Database details.
 * MySQL database name.
 * @global string
 */
$configuration[$master]['database'] = '[[softdb]]';
/**
 * Database details.
 * MySQL database username.
 * @global string
 */
$configuration[$master]['username'] = '[[softdbuser]]';
/**
 * Database details.
 * MySQL database password.
 * @global string
 */
$configuration[$master]['password'] = '[[softdbpass]]';

// NONE MANDATORY.
// You might want to consider changing these setting while you are developing.
// IT IS VERY IMPORTANT TO SWITCH THEM TO SAFE SETTING WHEN GOING INTO PRODUCTION.
// Use settings from PHPDS-defaults.config.php to extend this file and override defaults.
/////////////////////////////////////////////////////////////////////////////////////////
/**
 * When your system goes to production, set this to TRUE to avoid informations leaks.
 * Will force compile on template engine.
 *
 * Overrides most 'debug' and 'error' settings
 * 
 * PS: IT WONT SHOW NOTICES OR GENERAL ERRORS IF THIS IS TRUE.
 *
 * @var boolean
 */
$configuration['production'] = false;
/**
 * To what email should critical errors be emailed to, make sure php can send mail, this does not use the PHPDevShell mailing engine.
 *
 * @global string
 */
$configuration['error']['email_critical'] = '[[admin_email]]';
