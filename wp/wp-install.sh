#!/bin/sh

/bin/wp core install \
    --title="Weef" \
    --admin_user="weef" \
    --admin_password="wordpress" \
    --admin_email="ti@weef.com.br" \
    --url="http://localhost" \
    --skip-email \
    --path=/var/www/html

/bin/wp plugin install /var/www/html/utils/advanced-custom-fields-pro.zip  --activate
/bin/wp plugin install /var/www/html/utils/acf-extended.zip --activate
/bin/wp theme activate casamento