# Analyze PHP Container

This is the default container used in the [Analyze PHP Framework](https://github.com/AnalyzePHP/framework). It is [PSR-11](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md) compatable.

## Installation

### Requirements

PHP >= 7.0.0

### Via Composer

Installation via [Composer](https://getcomposer.org/) is the recommended method of installation.

## Basic Usage

```php
<?php

use Analyze\Container\Container;

// Create a new Container instance
$container = new Container;

// Add via Factory
$this->addFactory('AwesomePackage', function() {
    return new Some\Awesome\Package;
});

// Add via Constructor
$this->addClass('AwesomePackage', Some\Awesome\Package::class);

// Add via Setter
$this->addSetter('AwesomePackage', 'Some\Awesome\Package', [
    'setName' => 'Bob'
]);

// Return a new instance
$awesome = $container->get('AwesomePackage');
```