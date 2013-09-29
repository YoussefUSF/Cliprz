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

class Response {

    /**
     * HTTP protocol version
     *
     * @var array
     * @access private
     */
    private $protocol = [
        1.0 => 'HTTP/1.0',
        1.1 => 'HTTP/1.1'
    ];

    /**
     * HTTP status codes and messages
     *
     * @var array
     * @access public
     */
    public $statuses = [
        100 => 'Continue',
        101 => 'Switching Protocols',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        307 => 'Temporary Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        422 => 'Unprocessable Entity',
        423 => 'Locked',
        424 => 'Failed Dependency',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        507 => 'Insufficient Storage',
        509 => 'Bandwidth Limit Exceeded'
    ];

    /**
     * Headers
     *
     * @var array
     * @access private
     */
    private $headers = [];

    /**
     * Set a new header in our headers array
     *
     * @param string  key name
     * @param string  header value
     * @param boolean replace existing value for the header
     */
    public function setHeader ($name,$value,$replace=true) {
        if ($replace) {
            $this->headers[$name] = $value;
        } else {
            if (!array_key_exists($name,$this->headers)) {
                $this->headers[$name] = $value;
            }
        }
        return;
    }

    public function getHeader ($name=null) {
        if ($name != null && array_key_exists($name,$this->headers)) {
            return $this->headers[$name];
        }
        return $this->headers;
    }



    /**
     * Redirecting
     *
     * @param string Redirecting page as default null index.php
     * @access public
     */
    public function redirect ($page=null) {
        header("HTTP/1.1 301 Moved Permanently");
        if (is_null($page)) {
            header("Location: index.php");
        } else {
            header("Location: ".$page);
        }
        exit();
    }

}

?>