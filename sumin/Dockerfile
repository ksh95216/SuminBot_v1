FROM ubuntu:16.04

ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update -y
RUN apt-get install -y apache2
RUN apt-get install -y php7.0-fpm libapache2-mod-php

RUN apt-get install -y vim
RUN apt-get install -y curl
RUN apt-get install -y iputils-ping


ADD . /var/www/html
RUN rm /var/www/html/index.html

RUN mv /var/www/html/setup.sh /setup.sh
RUN mv /var/www/html/flag /flag
RUN chmod +x /setup.sh
ENTRYPOINT  /setup.sh

