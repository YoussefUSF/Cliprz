<?php

/**
 * Cliprz framework
 *
 * An open source application development framework for PHP 5.4.0 or newer
 *
 * @package    Cliprz
 * @author     Yousef Ismaeil <cliprz@gmail.com>
 * @author     Albert Negix <a.negix@outlook.com>
 * @copyright  Copyright (c) 2013 - 2014, Cliprz Developers team
 * @license    MIT
 * @link       http://www.cliprz.org
 * @version    1.0.0
 */

// Activates the circular reference collector
if (!gc_enabled()) { gc_enable(); }

// logs the errors
#ini_set('log_errors', 'On');

// Cliprz framework charset and encoding must be UTF-8
defined('CHARSET') or define ('CHARSET','UTF-8',true);

// Set internal character encoding to UTF-8
mb_internal_encoding(CHARSET);

// Set current setting for character encoding conversion
iconv_set_encoding('internal_encoding',CHARSET);

/** set some paths */
defined('APPPATH') or define('APPPATH',BASEPATH.'app'.DIRECTORY_SEPARATOR);

defined('LIBPATH') or define('LIBPATH',BASEPATH.'lib'.DIRECTORY_SEPARATOR);

defined('CLIPRZPATH') or define('CLIPRZPATH',LIBPATH.'Cliprz'.DIRECTORY_SEPARATOR);

defined('VDRPATH') or define('VDRPATH',LIBPATH.'Vendor'.DIRECTORY_SEPARATOR);

// Call the Common file
include (CLIPRZPATH.'Common.php');

\Cliprz\on_beta();

