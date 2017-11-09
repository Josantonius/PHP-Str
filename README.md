# PHP Str library

[![Latest Stable Version](https://poser.pugx.org/josantonius/Str/v/stable)](https://packagist.org/packages/josantonius/Str) [![Latest Unstable Version](https://poser.pugx.org/josantonius/Str/v/unstable)](https://packagist.org/packages/josantonius/Str) [![License](https://poser.pugx.org/josantonius/Str/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/76e18fe6d1d74138be3e5bb76daf6127)](https://www.codacy.com/app/Josantonius/PHP-Str?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-Str&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/Str/downloads)](https://packagist.org/packages/josantonius/Str) [![Travis](https://travis-ci.org/Josantonius/PHP-Str.svg)](https://travis-ci.org/Josantonius/PHP-Str) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-Str/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-Str)

[Spanish version](README-ES.md)

PHP library for string handler.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP Str library**, simply:

    $ composer require Josantonius/Str

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require Josantonius/Str --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone https://github.com/Josantonius/PHP-Str.git

Or **install it manually**:

[Download Str.php](https://raw.githubusercontent.com/Josantonius/PHP-Str/master/src/Str.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-Str/master/src/Str.php

## Available Methods

### - Check if the string starts with a certain value:

```php
Str::startsWith($search, $string);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $search | The string to search. | string | Yes | |
| $string | The string where search. | string | Yes | |

**# Return** (boolean)

### - Check if the string ends with a certain value:

```php
Str::endsWith($search, $string);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $search | The string to search. | string | Yes | |
| $string | The string where search. | string | Yes | |

**# Return** (boolean)

## Quick Start

To use this library with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Str\Str;
```

Or If you installed it **manually**, use it:

```php
require_once __DIR__ . '/Str.php';

use Josantonius\Str\Str;
```

## Usage

Example of use for this library:

### - Check if the string starts with a certain value:

```php
Str::startsWith("Hello", "Hello world");
```

### - Check if the string ends with a certain value:

```php
Str::endsWith("world", "Hello World");
```

## Tests 

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    $ git clone https://github.com/Josantonius/PHP-Str.git
    
    $ cd PHP-Str

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    $ composer phpmd

Run all previous tests:

    $ composer tests

## ☑ TODO

- [ ] Add new feature
- [ ] Improve tests
- [ ] Improve documentation
- [ ] Refactor code

## Contribute

If you would like to help, please take a look at the list of
[issues](https://github.com/Josantonius/PHP-Str/issues) or the [To Do](#-todo) checklist.

**Pull requests**

* [Fork and clone](https://help.github.com/articles/fork-a-repo).
* Run the command `composer install` to install the dependencies.
  This will also install the [dev dependencies](https://getcomposer.org/doc/03-cli.md#install).
* Run the command `composer fix` to excute code standard fixers.
* Run the [tests](#tests).
* Create a **branch**, **commit**, **push** and send me a
  [pull request](https://help.github.com/articles/using-pull-requests).

## Repository

The file structure from this repository was created with [PHP-Skeleton](https://github.com/Josantonius/PHP-Skeleton).

## License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

## Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).