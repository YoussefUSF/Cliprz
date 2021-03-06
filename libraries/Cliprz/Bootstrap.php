<?php

/**
 * Part of the Cliprz framework
 *
 * @package    Cliprz
 * @author     Yousef Ismaeil <cliprz@gmail.com>
 * @author     Albert Negix <negix@outlook.com>
 * @copyright  Copyright (c) 2013 - 2014, Cliprz Developers team
 * @license    MIT
 * @link       http://www.cliprz.org
 * @version    1.0.0
 */

// Report all PHP errors
error_reporting(-1);

// logs the errors
ini_set('log_errors', 'On');

// Activates the circular reference collector
if (!gc_enabled()) { gc_enable(); }

// Cliprz framework charset and encoding must be UTF-8
defined('CHARSET') or define ('CHARSET','UTF-8',true);

// Set internal character encoding to UTF-8
mb_internal_encoding(CHARSET);

// Set current setting for character encoding conversion
iconv_set_encoding('internal_encoding',CHARSET);

/** set some paths */
// application path
defined('APPPATH') or define('APPPATH',BASEPATH.'application'.DIRECTORY_SEPARATOR);
// libraries path
defined('LIBPATH') or define('LIBPATH',BASEPATH.'libraries'.DIRECTORY_SEPARATOR);
// Cliprz library path
defined('CLIPRZPATH') or define('CLIPRZPATH',LIBPATH.'Cliprz'.DIRECTORY_SEPARATOR);
// Vendor path
defined('VDRPATH') or define('VDRPATH',LIBPATH.'Vendor'.DIRECTORY_SEPARATOR);

// Call the Common file
include (CLIPRZPATH.'Common.php');

\Cliprz\on_beta();

// call Autoload class
include (CLIPRZPATH.'Loader/Autoload.php');
use Cliprz\Loader\Autoload;
// Set the core path for autoloader
Autoload::setCore(LIBPATH);
// Add a classes map to autoloader
Autoload::addMaps(include(CLIPRZPATH.'Loader/Maps/Classes.php'));
// register Cliprz\Loader\Autoload class in SPL stack
Autoload::register();

// Namespaces to alias
Autoload::namespaceAlias('Cliprz\\MVC\View\\View');
Autoload::namespaceAlias('Cliprz\\Filesystem\\Filesystem');
Autoload::namespaceAlias('Cliprz\\Config\\Config');
Autoload::namespaceAlias('Cliprz\\HTTP\\HTTP');

Config::preparing(APPPATH.'Config/Config.php');
Config::preparing(APPPATH.'Config/Error.php');
#Cliprz\pre_print_r(Config::dump());

use Cliprz\Error\Error;
Error::errorsLog();

// Use Security
use Cliprz\Security\Security;
$__SECURITY = new Security();

// Router
use Cliprz\Router\Exceptions\ProcessorException;
use Cliprz\Router\Router;

Router::initialization();

if (Filesystem::getInstance()->isFile(APPPATH.'Config/Router.php')) {
    include (APPPATH.'Config/Router.php');
} else {
    exit('Cannot access to website, Router.php not found.');
}

try {
    Router::processor();
} catch (ProcessorException $e) {
    echo $e->getMessage();
}

// Test compiling
/*
use Cliprz\MVC\View\Engines\Compiler\Compiler;
$c = new Compiler();
$c->save(APPPATH.'Cache/compile.php');
*/

// un register Cliprz\Loader\Autoload from SPL stack
Autoload::unRegister();