<?php

/**
 * Part of the Cliprz framework
 *
 * @package    Cliprz
 * @author     Yousef Ismaeil <cliprz@gmail.com>
 * @copyright  Copyright (c) 2013 - 2014, Cliprz Developers team
 * @license    MIT
 * @link       http://www.cliprz.org
 * @version    1.0.0
 */

namespace Cliprz\Error;

use Cliprz\Config\Config;

class Error {

    /**
     * Errors Log
     *
     * @access public
     * @static
     */
    public static function errorsLog () {
        if (Config::get('DISPLAY_ERRORS') == true) {
            ini_set('error_log',Config::get('ERROR_LOG_FILE'));
        }
    }

    /**
     * Display a error page from APPPATH/Errors folder
     *
     * @param string page name without .php
     * @param array  page data as indexes array
     * @access public
     * @static
     */
    public static function show ($page,$data=null) {
        $path = APPPATH.'Errors'.DIRECTORY_SEPARATOR.$page.'.php';
        if (is_file($path)) {
            if (is_array($data)) {
                extract($data);
            }
            include($path);
        }
    }

}

?>