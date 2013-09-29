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

namespace Cliprz\Security;

class Security {

    /**
     * __CLASS__ constructor
     *
     * @access public
     */
    public function __construct() {

        if ($this->cleanGetXss($_GET)) {
            exit("Access Denied");
        }

        foreach(["_GET","_POST","_SERVER","_COOKIE","_FILES","_ENV","GLOBALS"] as $var) {
            if(isset($_REQUEST[$var]) || isset($_FILES[$var])) {
                exit("Access Denied");
            }
        }

        // Clean server variables
        $_SERVER['PHP_SELF']     = $this->cleanURL($_SERVER['PHP_SELF']);
        $_SERVER['QUERY_STRING'] = isset($_SERVER['QUERY_STRING']) ? $this->cleanURL($_SERVER['QUERY_STRING']) : null;
        $_SERVER['PATH_INFO']    = isset($_SERVER['PATH_INFO']) ? $this->cleanURL($_SERVER['PATH_INFO']) : null;
        $_SERVER['REQUEST_URI']  = isset($_SERVER['REQUEST_URI']) ? $this->cleanURL($_SERVER['REQUEST_URI']) : null;
        $_SERVER['SCRIPT_NAME']  = isset($_SERVER['SCRIPT_NAME']) ? $this->cleanURL($_SERVER['SCRIPT_NAME']) : null;

    }

    /**
     * Clean URL Function, prevents entities in server globals
     *
     * @param string the server super global request and selfs
     * @access public
     */
    public function cleanURL($url) {
        $badEntities  = ["&", "\"", "'", '\"', "\'", "<", ">", "(", ")", "*",'$'];
        $safeEntities = ["&amp;", "", "", "", "", "", "", "", "", "",''];
        $url = str_ireplace($badEntities, $safeEntities, $url);
        return $url;
    }

    /**
     * Prevent any possible XSS attacks via $_GET Super Global
     *
     * @param string mixed url who want to filter
     * @access private
     */
    private function cleanGetXss($url) {
        if (is_array($url)) {
            foreach ($url as $value) {
                if ($this->cleanGetXss($value) == true) {
                    return true;
                }
            }
        } else {
            $url = str_replace(["\"","\'"],["",""], urldecode($url));
            if (preg_match("/<[^<>]+>/i", $url)) {
                return true;
            }
        }
        return false;
    }

}

?>