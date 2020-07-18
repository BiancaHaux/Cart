
This code works with php 7+

It can be run with the basic php dev server for testing:
php -S localhost:PORT


The composer is taking care of autoloading of classes. A new autoload file can be created by running:
composer dump-autoload -o


The test is set up with phpunit tests. It can be run from the root directory with:
./vendor/bin/phpunit tests