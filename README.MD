# Nova input mask

### Hello, this is just a fork of [input mask plugin](https://github.com/nurmuhammet-ali/nova-inputmask).

## Requirements

- `php: >=8.0`
- `laravel/nova: ^4.0`

## Installation

Install the package in a Laravel Nova project via Composer:

```bash
# Install nova-inputmask
composer require shopstable/nova-inputmask
```

## Usage

```php
use Shopstable\NovaInputmask\NovaInputmask;

// ...

NovaInputmask::make('Phone number')
    ->mask('999999') // mask syntax here

// Storing raw value can be good for validation and search porpuses, so use storeRawValue() method. Resolved value will be masked automatically.
NovaInputmask::make('Phone number')
    ->storeRawValue()
```
