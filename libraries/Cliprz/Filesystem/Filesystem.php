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

namespace Cliprz\Filesystem;

use Cliprz\Singleton\Singleton;

class Filesystem extends Singleton {

    /**
     * Tells whether the given file is a regular file
     *
     * @param string file name
     * @access public
     * @return true if the filename exists and is a regular file false otherwise
     * @see http://www.php.net/is_file
     */
    public function isFile ($fileName) {
        return (is_file($fileName));
    }

    /**
     * Checks whether a file or directory exists
     *
     * @param string path to the file or directory
     * @access public
     * @return true if the file or directory specified by filename exists false otherwise
     * @see http://www.php.net/file_exists
     */
    public function isExists($fileName) {
        return (file_exists($fileName));
    }

    /**
     * Tells whether the given filename is a directory
     *
     * @param string file name
     * @access public
     * @return true if the file name exists and is a directory false otherwise
     * @see http://www.php.net/is_dir
     */
    public function isDir($fileName) {
        return (is_dir($fileName));
    }

    /**
     * Get information about path
     *
     * @param string the path to be parsed
     * @see http://www.php.net/pathinfo
     */
    public function fileInfo ($path) {
        return pathinfo($path);
    }

}

?>