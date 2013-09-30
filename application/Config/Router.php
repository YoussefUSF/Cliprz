<?php

/**
 * Routing URLs file
 * 
 * easy routing more SEO ^_*
 */

// Use Router class don't remove this line
use Cliprz\Router\Router;

// Your home page
Router::index('welcome');

// Add a rule http://example.any/welcome
Router::rule([
    'regex' => 'welcome',
    'class' => 'Welcome'
]);

// Add a rule with parameters http://example.any/test/parameter
Router::rule([
    'regex'      => 'test/:ANY',
    'class'      => 'welcome',
    'function'   => 'test',
    'parameters' => [1]
]);

// Test redirect rule http://example.any/google will redirect to https://www.google.com/search?q=Cliprz
Router::rule([
    'regex'    => 'google',
    'redirect' => 'https://www.google.com/search?q=Cliprz'
]);

?>