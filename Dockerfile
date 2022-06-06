FROM php:7.4-fpm

RUN apt update -y && apt install -y nginx

COPY ./buildfiles/start.sh /start.sh
RUN chmod +x /start.sh

COPY ./code/sharex.php /sharex/files.php
COPY ./sharpnet/nginx.conf /sharpnet/nginx.conf
COPY ./site.conf /etc/nginx/conf.d/site.conf

CMD ["sh", "-c", "nginx && php-fpm"]