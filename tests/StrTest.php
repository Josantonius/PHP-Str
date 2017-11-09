<?php
/**
 * PHP library for string handler.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 (c) Josantonius - PHP-Str
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Str
 * @since     1.1.3
 */
namespace Josantonius\Str;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for Str library.
 *
 * @since 1.1.3
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
        $actual = $this->Str;
        $this->assertInstanceOf('Josantonius\Str\Str', $actual);
    }

    /**
     * Check if the string starts with a certain value.
     *
     * @since 1.1.3
     *
     * @return bool
     */
    public function testStartsWithTrue()
    {
        $this->assertTrue($this->Str->startsWith('Hello', 'Hello world'));
    }

    /**
     * Check if the string starts with a certain value.
     *
     * @since 1.1.3
     *
     * @return bool
     */
    public function testStartsWithFalse()
    {
        $this->assertFalse($this->Str->startsWith('Hello', 'hello world'));
    }

    /**
     * Check if the string ends with a certain value.
     *
     * @since 1.1.3
     *
     * @return bool
     */
    public function testEndsWithTrue()
    {
        $this->assertTrue($this->Str->endsWith('world', 'Hello world'));
    }

    /**
     * Check if the string ends with a certain value.
     *
     * @since 1.1.3
     *
     * @return bool
     */
    public function testEndsWithFalse()
    {
        $this->assertFalse($this->Str->endsWith('world', 'Hello World'));
    }
}
