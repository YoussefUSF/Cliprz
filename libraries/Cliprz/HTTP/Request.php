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

class Request {

    /**
     * Is the request a flash
     *
     * @access public
     * @static
     */
    public static function isFlash () {
        return (stristr(mb_strtolower($_SERVER["HTTP_USER_AGENT"]),'flash') ? true : false);
    }

    /**
     * Is the request a Javascript XMLHttpRequest (Ajax) ?
     *
     * @access public
     * @static
     */
    public static function isAjax () {
        return (boolean) ((!empty($_SERVER['HTTP_X_REQUESTED_WITH'])
            && mb_strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
            ? true : false);
    }

}

?>