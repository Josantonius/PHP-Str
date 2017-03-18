# PHP Str library

[![Latest Stable Version](https://poser.pugx.org/josantonius/str/v/stable)](https://packagist.org/packages/josantonius/str) [![Total Downloads](https://poser.pugx.org/josantonius/str/downloads)](https://packagist.org/packages/josantonius/str) [![Latest Unstable Version](https://poser.pugx.org/josantonius/str/v/unstable)](https://packagist.org/packages/josantonius/str) [![License](https://poser.pugx.org/josantonius/str/license)](https://packagist.org/packages/josantonius/str)

[Spanish version](README-ES.md)

Librería PHP para manejo de strings.

---

- [Instalación](#instalación)
- [Requisitos](#requisitos)
- [Cómo empezar y ejemplos](#cómo-empezar-y-ejemplos)
- [Métodos disponibles](#métodos-disponibles)
- [Uso](#uso)
- [Tests](#tests)
- [Manejador de excepciones](#manejador-de-excepciones)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

### Instalación 

La mejor forma de instalar esta extensión es a través de [composer](http://getcomposer.org/download/).

Para instalar PHP Str library, simplemente escribe:

    $ composer require Josantonius/Str

El comando anterior sólo instalará los archivos necesarios, si prefieres descargar todo el código fuente (incluyendo tests, directorio vendor, excepciones no utilizadas, documentos...) puedes utilizar:

    $ composer require Josantonius/Str --prefer-source

También puedes clonar el repositorio completo con Git:

	$ git clone https://github.com/Josantonius/Str.git
	
### Requisitos

Esta ĺibrería es soportada por versiones de PHP 5.6 o superiores y es compatible con versiones de HHVM 3.0 o superiores.

### Cómo empezar y ejemplos

Para utilizar esta librería, simplemente:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Str\Str;
```
### Métodos disponibles

Métodos disponibles en esta librería:

```php
Str::startsWith();
Str::endsWith();
Str::trimStart();
Str::trimEnd();
```
### Uso

Ejemplo de uso para esta librería:

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

Para utilizar la clase de [pruebas](tests), simplemente:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\Str\\Tests\\', __DIR__ . '/vendor/josantonius/str/tests');

use Josantonius\Str\Tests\StrTest;
```
Métodos de prueba disponibles en esta librería:

```php
StrTest::testStartsWithTrue();
StrTest::testStartsWithFalse();
StrTest::testEndsWithTrue();
StrTest::testEndsWithFalse();
StrTest::trimStart();
StrTest::trimEnd();
```

### Manejador de excepciones

Esta librería utiliza [control de excepciones](src/Exception) que puedes personalizar a tu gusto.
### Contribuir
1. Comprobar si hay incidencias abiertas o abrir una nueva para iniciar una discusión en torno a un fallo o función.
1. Bifurca la rama del repositorio en GitHub para iniciar la operación de ajuste.
1. Escribe una o más pruebas para la nueva característica o expón el error.
1. Haz cambios en el código para implementar la característica o reparar el fallo.
1. Envía pull request para fusionar los cambios y que sean publicados.

Esto está pensado para proyectos grandes y de larga duración.

### Repositorio

Los archivos de este repositorio se crearon y subieron automáticamente con [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).