# Validator

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Angythub/Validator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Angythub/Validator/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Angythub/Validator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Angythub/Validator/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Angythub/Validator/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Angythub/Validator/build-status/master)

This lib can check php types as Int, String etc.

## Documentation

### IntegerValidator

The IntegerValidator class can check multiple types of Integer :
* equal : Check if two integers are equal.
* higher : Check if an integer is higher than an other.
* lower : Check if an integer is lower than an other.
* between : Check if an integer is between a range.
* negative : Check if an integer is negative.
* positive : Check if an integer is positive.

#### Example 
```php
require __DIR__.'/vendor/autoload.php';

$validator =  \Wreyno\Validator\IntegerValidator::equal($integer, 2); // True or False
```


### String
### Boolean
### Array
### DateTime
