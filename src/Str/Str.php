<?php
/**
 * PHP library for string handler.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Str
 * @since      1.0.0
 */

namespace Josantonius\Str;

/**
 * String handler.
 *
 * @since 1.0.0
 */
class Str {

    /**
     * Check if the string starts with a certain value.
     *
     * @since 1.0.0
     *
     * @param mixed $search → the string to search
     * @param mixed $string → the string to fetch
     *
     * @return boolean
     */                                              
    public static function startsWith($search, $string) {

        return (substr($string, 0, strlen($search)) === $search);
    }
    
    /**
     * Check if the string ends with a certain value.
     *
     * @since 1.0.0
     *
     * @param mixed $search → the string to search
     * @param mixed $string → the string to fetch
     *
     * @return boolean
     */
    public static function endsWith($search, $string) {

        return (substr($string, -strlen($search)) == $search);
    }
}
