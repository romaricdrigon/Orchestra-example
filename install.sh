#!/bin/sh

# Doctrine init
./app/console doctrine:database:create
./app/console doctrine:schema:create

# Load data fixtures
./app/console doctrine:fixtures:load