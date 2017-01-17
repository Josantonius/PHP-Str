# PHP Str library

[![Latest Stable Version](https://poser.pugx.org/josantonius/str/v/stable)](https://packagist.org/packages/josantonius/str) [![Total Downloads](https://poser.pugx.org/josantonius/str/downloads)](https://packagist.org/packages/josantonius/str) [![Latest Unstable Version](https://poser.pugx.org/josantonius/str/v/unstable)](https://packagist.org/packages/josantonius/str) [![License](https://poser.pugx.org/josantonius/str/license)](https://packagist.org/packages/josantonius/str)

[Spanish version](README-ES.md)

PHP library for string handler.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Exception Handler](#exception-handler)
- [Contribute](#contribute)
- [Repository](#repository)
- [Author](#author)
- [Licensing](#licensing)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Str library, simply:

    $ composer require Josantonius/Str

### Requirements

This library is supported by PHP versions 7.0 or higher and is compatible with HHVM versions 3.0 or higher.

To use this library in HHVM (HipHop Virtual Machine) you will have to activate the scalar types. Add the following line "hhvm.php7.scalar_types = true" in your "/etc/hhvm/php.ini".

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Str\Str;
```
### Available Methods

Available methods in this library:

```php
Str::startsWith();
Str::endsWith();
Str::trimStart();
Str::trimEnd();
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Str\Str;

var_dump(Str::startsWith("Hello", "Hello world")); # bool(true)
var_dump(Str::startsWith("hello", "Hello world")); # bool(false)
var_dump(Str::endsWith("world", "Hello world"));   # bool(true)
var_dump(Str::endsWith("World", "Hello world"));   # bool(false)
var_dump(Str::trimStart('Hello', 'HelloWorld'));   # string(5) "World"
var_dump(Str::trimEnd('World', 'HelloWorld'));     # string(5) "Hello"
```

### Tests 

To use the [test](tests) class, simply:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\Str\\Tests\\', __DIR__ . '/vendor/josantonius/str/tests');

use Josantonius\Str\Tests\StrTest;

```
Available test methods in this library:

```php
StrTest::testStartsWithTrue();
StrTest::testStartsWithFalse();
StrTest::testEndsWithTrue();
StrTest::testEndsWithFalse();
StrTest::trimStart();
StrTest::trimEnd();
```

### Exception Handler

This library uses [exception handler](src/Exception) that you can customize.
### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Author

Maintained by [Josantonius](https://github.com/Josantonius/).

### Licensing

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.