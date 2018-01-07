<?php
/**
 * PHP library for string handler.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - PHP-Str
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Str
 * @since     1.1.3
 */
namespace Josantonius\Str;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for Str library.
 */
class StrTest extends TestCase
{
    /**
     * Str instance.
     *
     * @since 1.1.5
     *
     * @var object
     */
    protected $Str;

    /**
     * Set up.
     *
     * @since 1.1.5
     */
    public function setUp()
    {
        parent::setUp();

        $this->Str = new Str;
    }

    /**
     * Check if it is an instance of Str.
     *
     * @since 1.1.5
     */
    public function testIsInstanceOfStr()
    {
        $this->assertInstanceOf('Josantonius\Str\Str', $this->Str);
    }

    /**
     * Check if the string starts with a certain value.
     *
     * @return bool
     */
    public function testStartsWithTrue()
    {
        $str = $this->Str;

        $this->assertTrue($str::startsWith('Hello', 'Hello world'));
    }

    /**
     * Check if the string starts with a certain value.
     *
     * @return bool
     */
    public function testStartsWithFalse()
    {
        $str = $this->Str;

        $this->assertFalse($str::startsWith('Hello', 'hello world'));
    }

    /**
     * Check if the string ends with a certain value.
     *
     * @return bool
     */
    public function testEndsWithTrue()
    {
        $str = $this->Str;

        $this->assertTrue($str::endsWith('world', 'Hello world'));
    }

    /**
     * Check if the string ends with a certain value.
     *
     * @return bool
     */
    public function testEndsWithFalse()
    {
        $str = $this->Str;

        $this->assertFalse($str::endsWith('world', 'Hello World'));
    }
}
