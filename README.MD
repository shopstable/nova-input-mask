# Nova input mask

### Hello, this is just a wrapper for [input mask plugin](https://github.com/RobinHerbots/Inputmask). 

## Requirements

- `php: >=8.0`
- `laravel/nova: ^4.0`

## Installation

Install the package in a Laravel Nova project via Composer:

```bash
# Install nova-inputmask
composer require nurmuhammet/nova-inputmask
```

## Usage

```php
use Nurmuhammet\NovaInputmask\NovaInputmask;

// ...

NovaInputmask::make('Passport nomeri')
    ->mask('999999') // mask syntax here
```
