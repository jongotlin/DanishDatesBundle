DanishDatesBundle
==================

## Installation

Install with composer
```
$ composer require jongotlin/danish-dates-bundle
```

Add the bundle to your AppKernel.
```php
new JGI\DanishDatesBundle\JGIDanishDatesBundle(),
```

## Usage
```php
$date = $container->get('jgi.danish_dates.datemanager')->getDate(new \Datetime('2018-01-01'));
echo $date->getDateTime()->format('Y-m-d') . ": " .
    ($date->isRedDay() ? 'red day' : 'not red day') . ' - ' . $date->getName();
// 2018-01-01: red day - Nytårsdag
```

## License
Bundle under the MIT License
