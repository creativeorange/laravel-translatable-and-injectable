# Laravel Injectable translatable extension

[![Total Downloads](https://poser.pugx.org/creativeorange/laravel-translatable-and-injectable/d/total.svg)](https://packagist.org/packages/creativeorange/laravel-translatable-and-injectable)
[![Latest Stable Version](https://poser.pugx.org/creativeorange/laravel-translatable-and-injectable/v/stable.svg)](https://packagist.org/packages/creativeorange/laravel-translatable-and-injectable)
[![License](https://poser.pugx.org/creativeorange/laravel-translatable-and-injectable/license.svg)](https://packagist.org/packages/creativeorange/laravel-translatable-and-injectable)

For explanation see [Laravel Injectable package](https://packagist.org/packages/creativeorange/laravel-injectable)

## Installation

You can install the package via composer:

```bash
composer require creativeorange/laravel-translatable-and-injectable
```

For support for Laravel 8 or lower, please install version 1.

## Usage
Instead of using HasTranslations on your model use:
``` php
<?php

namespace App\Models;

use Creativeorange\LaravelTranslatableAndInjectable\Traits\HasTranslationsTrait;

class Question extends Model
{
    use HasTranslationsTrait;
    // use Spatie\Translatable\HasTranslations; remove this one
}
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Credits

- [Jaco Tijssen](https://github.com/creativeorange)
- [Jonathan Hafkamp](https://github.com/creativeorange)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
