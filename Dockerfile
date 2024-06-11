FROM ubuntu:latest

RUN apt-get update && \
    apt-get install -y software-properties-common && \
    apt-get install -y composer && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update && \
    apt-get install -y apache2 php8.2 libapache2-mod-php8.2 php8.2-mysql && \
    apt-get clean

COPY ./app /var/www/html

# Настройка рабочей директории
WORKDIR /var/www/html

EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]