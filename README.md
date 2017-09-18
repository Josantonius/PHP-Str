# PHP Str library

[![Latest Stable Version](https://poser.pugx.org/josantonius/str/v/stable)](https://packagist.org/packages/josantonius/str) [![Total Downloads](https://poser.pugx.org/josantonius/str/downloads)](https://packagist.org/packages/josantonius/str) [![Latest Unstable Version](https://poser.pugx.org/josantonius/str/v/unstable)](https://packagist.org/packages/josantonius/str) [![License](https://poser.pugx.org/josantonius/str/license)](https://packagist.org/packages/josantonius/str) [![Travis](https://travis-ci.org/Josantonius/PHP-Str.svg)](https://travis-ci.org/Josantonius/PHP-Str)

[Spanish version](README-ES.md)

PHP library for string handler.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Str library, simply:

    $ composer require Josantonius/Str

The previous command will only install the necessary files, if you prefer to download the entire source code (including tests, vendor folder, exceptions not used, docs...) you can use:

    $ composer require Josantonius/Str --prefer-source

Or you can also clone the complete repository with Git:

	$ git clone https://github.com/Josantonius/PHP-Str.git

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

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
```

### Tests 

To run [tests](tests/Str/Test) simply:

    $ git clone https://github.com/Josantonius/PHP-Str.git
    
    $ cd PHP-Str

    $ phpunit

### ☑ TODO

- [x] Create tests
- [ ] Improve documentation

### Contribute

1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).
