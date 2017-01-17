<?php 
/**
 * PHP library for string handler.
 * 
 * @category   JST
 * @package    Str
 * @subpackage StrTest
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.0.0
 * @link       https://github.com/Josantonius/PHP-Str
 * @since      File available since 1.0.0 - Update: 2017-01-17
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