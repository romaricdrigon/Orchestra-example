Orchestra-example
=================

Example of usage of Orchestra framework

Using Symfony2 standard edition 2.4 (& PHP >= 5.4)

## Description ##

This is a very basic Car Rental application.

Domains objects are:

  * a `Car` has a condition, a price per day or km
  * a `Rental` has start and end dates
  * a `Customer` which can be valid or not regarding different criteria (age...) and must give his driver licence

## Installation ##

Copy this project files.
Then you need to install it with [composer](https://getcomposer.org/), typically:
```shell
php composer.phar install
```

You can then run the provided install script, ```./install.sh```

## Orchestra UI ##

To see Orchestra generated UI, go to `/admin`

## Doctrine ##

In this project we use YAML mapping for Doctrine.
We advise you not to use annotations, not to pollute your domain model.