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

namespace Josantonius\Str\Tests;

use Josantonius\Str\Str;

/**
 * Tests class for Str library.
 *
 * @since 1.0.0
 */
class StrTest {

    /**
     * Check if the string starts with a certain value.
     *
     * @since 1.0.0
     */                                              
    public static function testStartsWithTrue() {

        var_dump(Str::startsWith("Hello", "Hello world"));
    }

    /**
     * Check if the string starts with a certain value.
     *
     * @since 1.0.0
     */                                              
    public static function testStartsWithFalse() {

        var_dump(Str::startsWith("Hello", "hello world"));
    }

    /**
     * Check if the string ends with a certain value.
     *
     * @since 1.0.0
     */
    public static function testEndsWithTrue() {

        var_dump(Str::endsWith("world", "Hello world"));
    }

    /**
     * Check if the string ends with a certain value.
     *
     * @since 1.0.0
     */
    public static function testEndsWithFalse() {

        var_dump(Str::endsWith("world", "Hello world"));
    }

    /**
     * Trim matching content from the beginning of the string and return the string.
     *
     * @since 1.0.0
     */
    public static function trimStart() {
        
        var_dump(Str::trimStart('Hello', 'HelloWorld'));
    }
    
    /**
     * Trim matching content from the end of the string and return the string.
     *
     * @since 1.0.0
     */
    public static function trimEnd() {

        var_dump(Str::trimEnd('World', 'HelloWorld'));
    }
}
