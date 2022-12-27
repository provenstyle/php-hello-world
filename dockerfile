FROM php:8.2.0-cli
COPY . /usr/src/helloworld
WORKDIR /usr/src/helloworld
#CMD [ "php", "./helloworld.php" ]
#CMD [ "php -S localhost:8080", "./helloworld.php" ]
CMD [ "bin/sh" ]