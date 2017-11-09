# CHANGELOG

## 1.1.5 - 2017-11-09

* Implemented `PHP Mess Detector` to detect inconsistencies in code styles.

* Implemented `PHP Code Beautifier and Fixer` to fixing errors automatically.

* Implemented `PHP Coding Standards Fixer` to organize PHP code automatically according to PSR standards.

## 1.1.4 - 2017-11-02

* Implemented `PSR-4 autoloader standard` from all library files.

* Implemented `PSR-2 coding standard` from all library PHP files.

* Implemented `PHPCS` to ensure that PHP code complies with `PSR2` code standards.

* Implemented `Codacy` to automates code reviews and monitors code quality over time.

* Implemented `Codecov` to coverage reports.

* Added `Str/phpcs.ruleset.xml` file.

* Deleted `Str/src/bootstrap.php` file.

* Deleted `Str/tests/bootstrap.php` file.

* Deleted `Str/vendor` folder.

* Changed `Josantonius\Str\Test\StrTest` class to  `Josantonius\Str\StrTest` class.

## 1.1.3 - 2017-09-14

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with `Travis CI` to implement continuous integration.

* Added `Str/src/bootstrap.php` file

* Added `Str/tests/bootstrap.php` file.

* Added `Str/phpunit.xml.dist` file.
* Added `Str/_config.yml` file.
* Added `Str/.travis.yml` file.

* Deleted `Josantonius\Str\Tests\StrTest::trimStart()` method.
* Deleted `Josantonius\Str\Tests\StrTest::trimEnd()` method.

* Deleted `Josantonius\Str\Tests\StrTest` class.
* Deleted `Josantonius\Str\Tests\StrTest::testStartsWithTrue()` method.
* Deleted `Josantonius\Str\Tests\StrTest::testStartsWithFalse()` method.
* Deleted `Josantonius\Str\Tests\StrTest::testEndsWithTrue()` method.
* Deleted `Josantonius\Str\Tests\StrTest::testEndsWithFalse()` method.
* Deleted `Josantonius\Str\Tests\StrTest::trimStart()` method.
* Deleted `Josantonius\Str\Tests\StrTest::trimEnd()` method.

* Added `Josantonius\Str\Test\StrTest` class.
* Added `Josantonius\Str\Test\StrTest::testStartsWithTrue()` method.
* Added `Josantonius\Str\Test\StrTest::testEndsWithTrue()` method.

## 1.1.2 - 2017-07-16

* Deleted `Josantonius\Str\Exception\StrException` class.
* Deleted `Josantonius\Str\Exception\Exceptions` abstract class.
* Deleted `Josantonius\Str\Exception\StrException->__construct()` method.

## 1.1.1 - 2017-03-18

* Some files were excluded from download and comments and readme files were updated.

## 1.1.0 - 2017-01-30

* Compatible with PHP 5.6 or higher.

* Compatible only with PHP 7.0 or higher. In the next versions, the library will be modified to make it compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-17

* Added `Josantonius\Str\Str` class.
* Added `Josantonius\Str\Str::startsWith()` method.
* Added `Josantonius\Str\Str::endsWith()` method.
* Added `Josantonius\Str\Str::trimStart()` method.
* Added `Josantonius\Str\Str::trimEnd()` method.

* Added `Josantonius\Str\Exception\StrException` class.
* Added `Josantonius\Str\Exception\Exceptions` abstract class.
* Added `Josantonius\Str\Exception\StrException->__construct()` method.

* Added `Josantonius\Str\Tests\StrTest` class.
* Added `Josantonius\Str\Tests\StrTest::testStartsWithTrue()` method.
* Added `Josantonius\Str\Tests\StrTest::testStartsWithFalse()` method.
* Added `Josantonius\Str\Tests\StrTest::testEndsWithTrue()` method.
* Added `Josantonius\Str\Tests\StrTest::testEndsWithFalse()` method.
* Added `Josantonius\Str\Tests\StrTest::trimStart()` method.
* Added `Josantonius\Str\Tests\StrTest::trimEnd()` method.
