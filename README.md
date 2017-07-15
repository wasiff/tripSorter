###TRIP SORTER

### Requirments
Install [Composer](https://getcomposer.org/)

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar /usr/local/bin/composer
composer -V
```

Install [PHPUnit 6](https://phpunit.de)

```
➜ wget https://phar.phpunit.de/phpunit.phar

➜ chmod +x phpunit.phar

➜ sudo mv phpunit.phar /usr/local/bin/phpunit

➜ phpunit --version
PHPUnit 6.2.0 by Sebastian Bergmann and contributors.
```

Install [PHP-Doc](https://www.phpdoc.org/)

```
➜ Download http://www.phpdoc.org/phpDocumentor.phar

➜ chmod +x phpDocumentor.phar

➜ sudo mv phpDocumentor.phar /usr/local/bin/phpdoc

➜ phpdoc -V
```

Clone project on your web server root eg \var\www\tripSorter\public_html

Run composer install for Generating autoload files

```
composer install
```


Browse the URL on your browser, it will show sorted list.

### Dependencies
- PHP 7


Files
----------------------------------------------
    docs
    └── [Documentation]
    src
    └── Trip.php
    └── BoardingCards
    │   │  │
    │   │  ├── BoardingcardAbstract.php
    │   │  ├── BoardingcardAirportbus.php
    │   │  └── BoardingcardFlight.php
    │   │  └── BoardingcardTrain.php
    └── libs
    │   │  │
    │   │  ├── Sorter.php
    │   │  ├── SorterInterface.php
     test
     └── BoardingCardAirportbusTest.php
     ├── BoardingcardFlightTest.php
     ├── BoardingcardTrainTest.php
     └── TripTest.php


### Add new transportation
* Add new transportation method by extending the BoardingcardAbstract class

## Dev Stack Used

LAMP with PHP 7

- Visual Studio Code
- MAC Terminal
- PHP-Doc for documentation
- composer for dependencies and autoload

## More Info
- Tried to write the code as simple as possible using OOP and Interface
- Wrote tests as simple as possible
- I wrote it on mac and tested on both mac and linux system