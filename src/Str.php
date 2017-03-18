<?php
/**
 * PHP library for string handler.
 * 
 * @author     maxgamurar - https://github.com/maxgamurar
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Str
 * @since      1.0.0
 */

namespace Josantonius\Str;

# use Josantonius\Str\Exception\StrException;

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
     * @return bool
     */                                              
    public static function startsWith($search, $string) {

        $length = strlen($search);

        return (substr($string, 0, $length) === $search);
    }
    
    /**
     * Check if the string ends with a certain value.
     *
     * @since 1.0.0
     *
     * @param mixed $search → the string to search
     * @param mixed $string → the string to fetch
     *
     * @return bool
     */
    public static function endsWith($search, $string) {

        $length = strlen($search);

        if ($length == 0) {

            return true;
        }

        $start  = $length * -1; # negative

        return (substr($string, $start) === $search);
    }

    /**
     * Trim matching content from the beginning of the string and return the string.
     *
     * @since 1.0.0
     *
     * @param mixed $search → the string to search
     * @param mixed $string → the string to fetch
     *
     * @return string
     */
    public static function trimStart($search, $string) {
        
        if (substr($string, 0, strlen($search)) == $search) {

            $string = substr($string, strlen($search), strlen($string));
        }
        
        return $string; 
    }
    
    /**
     * Trim matching content from the end of the string and return the string.
     *
     * @since 1.0.0
     *
     * @param mixed $search → the string to search
     * @param mixed $string → the string to fetch
     *
     * @return string
     */
    public static function trimEnd($search, $string) {

        if (substr($string, (strlen($search) * -1)) == $search) {

            $string = substr($string, 0, strlen($string) - strlen($search));
        }
        
        return $string; 
    }
}
