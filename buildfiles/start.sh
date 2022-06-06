#!/bin/sh

# Replace commas with spaces
DOMAIN=$(echo $DOMAIN | sed 's/,/ /g')

sed -i "s/XXXXX/$DOMAIN/g" /sharpnet/nginx.conf
sed -i "s/XXXXX/$DOMAIN/g" /etc/nginx/conf.d/site.conf


nginx && php-fpm