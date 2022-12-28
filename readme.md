# Learning PHP

So far I have:
* composer configured and working
* some working unit tests
* a basic index.php page 

## To serve locally
    php -S localhost:8080


## Tests

Execute all the tests

    vendor/bin/phpunit tests/.

## Docker

Not currently working

    docker build -t helloworld-php .
    docker run -it --rm --name my-running-app helloworld-php
    docker run -it -p 127.0.0.1:8080:8080 php:8.2.0-cli 


    docker run -it -v $(pwd):/test -p 127.0.0.1:8080:8080 --entrypoint /bin/sh helloworld-php