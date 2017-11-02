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

To run [tests](tests) you just need [Composer](http://getcomposer.org/download/) and to execute the following:

    $ git clone https://github.com/Josantonius/PHP-Str.git
    
    $ cd PHP-Str

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run all previous tests:

    $ composer tests

## ☑ TODO

- [x] Create tests
- [x] Improve documentation

## Contribute

1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

## Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

## License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

## Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).
