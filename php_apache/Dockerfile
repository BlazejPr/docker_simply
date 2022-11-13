FROM php:7.2-apache
COPY app/ /var/www/html/

RUN mkdir /var/www/html/dane_strony
RUN chown www-data /var/www/html/dane_strony
RUN chmod 775 /var/www/html/dane_strony
RUN touch /var/www/html/dane_strony/index.php