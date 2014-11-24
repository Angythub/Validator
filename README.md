# Validator

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Angythub/Validator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Angythub/Validator/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Angythub/Validator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Angythub/Validator/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Angythub/Validator/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Angythub/Validator/build-status/master)

This lib can check php types as Int, String etc.

## Documentation

### IntegerValidator

The IntegerValidator class checks multiple types of Integer :
* equal : Check if two integers are equal.
* higher : Check if an integer is higher than an other.
* lower : Check if an integer is lower than an other.
* between : Check if an integer is within a range of two numbers.
* negative : Check if an integer is negative.
* positive : Check if an integer is positive.

#### Example 
```php
require __DIR__.'/vendor/autoload.php';

$validator =  \Wreyno\Validator\IntegerValidator::equal($integer, 2); // True or False
```

### StringValidator

The StringValidator class checks multiple types of String :

* equal : Check if the string length is equal to an integer.
* higher : Check if a string length is higher than an integer.
* lower : Check if a string length is lower than an integer.
* between : Check if a string length is within a range of two numbers.
* startAndEndWhiteSpace : Check if a string starts or ends with whitespaces.
* noWhiteSpace : Check if a string contains any whitespace.

#### Example 
```php
require __DIR__.'/vendor/autoload.php';

$validator =  \Wreyno\Validator\StringValidator::noWhiteSpace($string); // True or False
```

### BooleanValidator

The BooleanValidator class checks if a boolean is true or false :

* isTrue : Check if the boolean is true.
* isFalse : Check if the boolean is false.

#### Example 
```php
require __DIR__.'/vendor/autoload.php';

$validator =  \Wreyno\Validator\BooleanValidator::isTrue($bool); // True or False
```

### ArrayValidator

The ArrayValidator class checks multiple types of array :

* isEmpty : Check if an array is empty.
* compare : Compare if the array length to an integer.
* numberElementsBetween : Check if an array length is within a range of two numbers.
* keyExists : Check if a key exists within an array.
* valueExists :  Check if a value exists within an array.

#### Example 
```php
require __DIR__.'/vendor/autoload.php';

$validator =  \Wreyno\Validator\ArrayValidator::keyExists($array, 'Apple'); // True or False
```

### DateTimeValidator

The DateTimeValidator class checks multiple types of DateTime :

* isMajor : Checks if a given birthday date matches to a major people.
* isDay : Checks if a given date's day matches to a specified day.
* isMonth : Checks if a given date's month matches to a specified month.
* isYear : Checks if a given date's year matches to a specified year.
* isToday : Checks if a given date matches to today's date.

#### Example 
```php
require __DIR__.'/vendor/autoload.php';

$validator =  \Wreyno\Validator\DateTimeValidator::isMajor('1993-07-12'); // True or False
```

