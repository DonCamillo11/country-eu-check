# Country EU Check

Checks whether a given country is a member of the European Union.

## Installation

You can install the package via composer.

    composer require doncamillo11/country-eu-check

## Usage

To check if a country is a member state of the European Union, `checkEuMembership` method.
You can pass an ISO 3166 country code or a country name to the method.

```php
use DonCamillo11\CountryEuCheck\CountryEuCheck;

CountryEuCheck::checkEuMembership('DE'); // true
CountryEuCheck::checkEuMembership('CH'); // false
```
or

```php
use DonCamillo11\CountryEuCheck\CountryEuCheck;

CountryEuCheck::checkEuMembership('Germany'); // true
CountryEuCheck::checkEuMembership('Switzerland'); // false
```

## License

VatCalculator is open-sourced software licensed under [the MIT license](LICENSE.md).