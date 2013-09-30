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

namespace Cliprz\HTTP;

use Cliprz\Config\Config;

class HTTP {

    /**
     * List HTTP prefix
     *
     * @var array
     * @access private
     * @static
     */
    private static $httpList = [
        'NORMAL' => 'http',
        'SSL'    => 'https',
        'FTP'    => 'ftp'
    ];

    /**
     * Get project (website) URL
     *
     * @access public
     * @static
     * @return string website URL or null otherwise
     */
    public static function url () {
        if (Config::get('PROJECT_URL') != '') {
            return trim(Config::get('PROJECT_URL'),'/').'/';
        } else {
            $host = $_SERVER['HTTP_HOST'];
            $http = ((static::isSSL()) ? static::$httpList['SSL'] : static::$httpList['NORMAL']);
            $directory = (isset($_SERVER['SCRIPT_NAME'])) ? trim(dirname($_SERVER['SCRIPT_NAME']),'/').'/' : null;
            $url = $http.'://'.$host.'/'.$directory;
            return $url;
        }
        return;
    }

    /**
     * Tell us if use SSL (Secure Sockets Layer) connection
     *
     * @access public
     * @static
     */
    public static function isSSL () {
        return ((isset($_SERVER['HTTPS']) && mb_strtolower($_SERVER['HTTPS']) == 'on') ? true : false);
    }

}

?>