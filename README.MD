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

NovaInputmask::make('Phone number')
    ->mask('999999') // mask syntax here

// Storing raw value can be good for validation and search porpuses, so use storeRawValue() method. Resolved value will be masked automatically.
NovaInputmask::make('Phone number')
    ->storeRawValue()
```

##  *If you find my open-source library helpful, consider supporting it by buying me a coffee: [Buy Me a Coffee](https://www.buymeacoffee.com/nurmuhammet). ☕*
