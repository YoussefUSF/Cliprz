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

namespace Cliprz\Singleton;

abstract class Singleton {

    /**
     * Creates and gives a new Class instance and keeps a record of it
     *
     * @access public
     * @static
     */
    public static function getInstance() {
        static $instance = [];
        $class = get_called_class();
        if (!array_key_exists($class,$instance)) {
            $instance[$class] = new $class();
        }
        return $instance[$class];
    }

    private function __construct () { }
    private function __clone () { }
    private function __wakeup () { }

}

?>