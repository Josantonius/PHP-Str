<?php
/**
 * PHP library for string handler.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Str
 * @since      1.1.3
 */

namespace Josantonius\Str\Test;

use Josantonius\Str\Str,
    PHPUnit\Framework\TestCase;

/**
 * Tests class for Str library.
 *
 * @since 1.1.3
 */
class StrTest extends TestCase {

    /**
     * Check if the string starts with a certain value.
     *
     * @since 1.1.3
     *
     * @return boolean
     */                                              
    public function testStartsWithTrue() {

        $this->assertTrue(Str::startsWith("Hello", "Hello world"));
    }

    /**
     * Check if the string starts with a certain value.
     *
     * @since 1.1.3
     *
     * @return boolean
     */                                              
    public function testStartsWithFalse() {

        $this->assertFalse(Str::startsWith("Hello", "hello world"));
    }

    /**
     * Check if the string ends with a certain value.
     *
     * @since 1.1.3
     *
     * @return boolean
     */
    public function testEndsWithTrue() {

        $this->assertTrue(Str::endsWith("world", "Hello world"));
    }

    /**
     * Check if the string ends with a certain value.
     *
     * @since 1.1.3
     *
     * @return boolean
     */
    public function testEndsWithFalse() {

        $this->assertFalse(Str::endsWith("world", "Hello World"));
    }
}
