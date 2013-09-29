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

namespace Cliprz\Config;

class Config {

    /**
     * The master config array
     *
     * @access private
     * @static
     */
    private static $config = [];

    /**
     * Preparing config file
     *
     * @param string config file name
     * @access public
     * @static
     */
    public static function preparing ($fileName) {
        if (file_exists($fileName)) {
            $data = include($fileName);
            if (is_array($data)) {
                static::storeData($data);
            }
        }
    }

    /**
     * Store array data to our config array
     *
     * @access private
     * @static
     */
    private static function storeData (Array $data) {
        foreach ($data as $key => $value) {
            if (array_key_exists($key,static::$config)) {
                continue;
            }
            static::$config[$key] = $value;
        }
    }

    /**
     * Only for testing
     *
     * @access public
     * @static
     */
    public static function dump () {
        return static::$config;
    }

    /**
     * set|update item from config
     *
     * @param string item key
     * @param string item value
     * @access public
     * @static
     */
    public static function set ($key,$value) {
        if (array_key_exists($key,static::$config)) {
            static::$config[$key] = $value;
        }
    }

    /**
     * Get item from config
     *
     * @param string item key
     * @access public
     * @static
     */
    public static function get ($key) {
        if (array_key_exists($key,static::$config)) {
            return static::$config[$key];
        }
        return false;
    }

}

?>