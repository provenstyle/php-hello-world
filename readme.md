## Local
    php -S localhost:8080

## Docker
    docker build -t helloworld-php .
    docker run -it --rm --name my-running-app helloworld-php
    docker run -it -p 127.0.0.1:8080:8080 php:8.2.0-cli 


    docker run -it -v $(pwd):/test -p 127.0.0.1:8080:8080 --entrypoint /bin/sh helloworld-php

## Tests

    ./vendor/bin/phpunit ./tests/*
    