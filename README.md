# proximacode-dev Holiday

proximacode-dev/Holiday is a fork from checkdomain/Holiday library to check if a specified date is a holiday in a specific country. It also tells you if the given date is a nation wide holiday or just a holiday in some states.


## Currently supported countries

- 🇦🇹  **AT** Austria
- 🇧🇪  **BE** Belgium
- 🇧🇷  **BR** Brazil
- 🇩🇪  **DE** Germany
- 🇩🇰  **DK** Denmark
- 🇪🇪  **EE** Estonia
- 🇫🇷  **FR** France
- 🇭🇺  **HU** Hungary
- 🇮🇹  **IT** Italy
- 🇱🇹  **LT** Lithuania
- 🇱🇺  **LU** Luxembourg
- 🇱🇻  **LV** Latvia
- 🇳🇴  **NO** Norway
- 🇵🇱  **PL** Poland
- 🇵🇹  **PT** Portugal
- 🇫🇷  **RE** Réunion
- 🇷🇴  **RO** Romania
- 🇸🇪  **SE** Sweden

## Your country is not supported?

checkdomain Holiday is open source. If you use this library it would be great to get some support for currently not implemented countries which you are familiar with. Pull requests will be reviewed and merged fast.

To create a new Provider please see the `ProviderInterface` interface.


## Requirements

Proximacode-dev/Holiday requires php >= 5.5.


## Installation

The easiest way to install this library is through [composer](http://getcomposer.org/). Just add the following lines to your **composer.json** file:

```json
{
   "require": {
        "proximacode-dev/holiday": "~3.0.0"
    }
}
```

Another way would be to download this library and configure the autoloading yourself. This library relies on a [PSR-4](http://www.php-fig.org/psr/psr-4/) compatible autoloader for automatic class loading.


## Usage

To check for holidays just instantiate the Util class and call the `getHoliday` method.

```php
$util    = new \ProximaCode\Holiday\Util();
$holiday = $util->getHoliday('DE', '2014-01-01');
```

If you just need to know if there is a holiday on your date there is a `isHoliday` method, too.

If you need to know all holidays for a specific country you can instantiate one of the included providers yourself and call the `getHolidaysByYear` method. All providers must follow the `ProviderInterface` interface.


## Running Tests

Run a `php composer.phar install` command in the base directory to install the `phpunit` dependency. After that you can simply call `php vendor/bin/phpunit` to run the test suite.

To run specific test class call `php vendor/bin/phpunit --filter TestClassName`
