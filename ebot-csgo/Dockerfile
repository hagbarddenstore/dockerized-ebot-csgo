FROM php:5.6.25-zts

RUN apt-get update -y && apt-get install -y git unzip nodejs npm

# Application assumes NodeJS binary is called node.
RUN ln -s /usr/bin/nodejs /usr/bin/node

RUN npm install socket.io@0.9.12 archiver formidable

RUN pecl install pthreads-2.0.10

RUN docker-php-ext-enable pthreads

RUN docker-php-ext-install mysql sockets

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /usr/src/ebot-csgo

WORKDIR /usr/src/ebot-csgo

RUN composer install

CMD [ "php", "./bootstrap.php" ]
