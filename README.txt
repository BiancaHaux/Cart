
This code works with php 7+

Please run composer to create autoload file and phpunit test dependencies:
composer require --dev phpunit/phpunit ^9

Application can be run with the basic php dev server for testing:
php -S localhost:PORT


New autoload file can also be created by running:
composer dump-autoload -o


The test is set up with phpunit tests. It can be run from the root directory with:
./vendor/bin/phpunit tests