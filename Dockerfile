FROM php:8.1.3-apache-buster

ARG USER=docker
ARG USER_UID=1000
ARG USER_GID=$USER_UID

RUN apt-get update && apt-get install -y \
    git zip apt-utils zlib1g-dev libpng-dev libzip-dev default-mysql-client

RUN docker-php-ext-install mysqli pdo pdo_mysql gd zip

#INSTALL COMPOSER
RUN set -xe \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('SHA384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php --install-dir=/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

#INSTALL PHP-CS-FIXER
RUN set -xe \
    && curl -L https://cs.symfony.com/download/php-cs-fixer-v3.phar -o php-cs-fixer \
    && chmod +x php-cs-fixer \
    && mv php-cs-fixer /usr/bin/php-cs-fixer \
    && echo "alias fix='php-cs-fixer fix'" >> /etc/bash.bashrc

#INSTALL PHP-DOC
RUN set -xe \
    && curl -L https://phpdoc.org/phpDocumentor.phar -o phpDocumentor.phar \
    && chmod +x phpDocumentor.phar \
    && mv phpDocumentor.phar /usr/bin/phpdoc \
    && echo "alias phpdoc_all='phpdoc -d /home/${USER} -t /home/${USER}/documentation --ignore \"vendor/\"'" >> /etc/bash.bashrc

#Instala Node Js
RUN set -xe \
    && apt-get install -y curl software-properties-common \
    && curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt-get install -y nodejs \ 
    && npm install -g npm \
    && npm install -g typescript

#APACHE CONFIG
ENV APACHE_DOCUMENT_ROOT /home/${USER}
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite

ENV TZ=America/Argentina/Buenos_Aires
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN echo 'memory_limit = 9000M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;
RUN echo 'max_execution_time = 12000' >> /usr/local/etc/php/conf.d/docker-php-maxexectime.ini;
RUN echo 'date.timezone = "${TZ}"' >> /usr/local/etc/php/conf.d/docker-php-datetimezone.ini;

### SETUP CURRENT USER ###
RUN useradd -m ${USER} --uid=${USER_UID} | chpasswd
USER ${USER_UID}:${USER_GID}
WORKDIR /home/${USER}

CMD php artisan serve --port=80 --host=0.0.0.0

