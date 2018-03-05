#!/bin/bash
    #Actualizamos los repositorios
    apt-get update

    #Instalamos NGINX
    apt-get install -y nginx

    #Instalamos los modulos php necesarios
    apt-get -y install php-fpm php-mysql php-curl php-gd php-mbstring php-mcrypt php-xml php-xmlrpc

    #Configuramos php para NGINX
    sudo nano /etc/php/7.0/fpm/php.ini
    sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php/7.0/fpm/php.ini
    systemctl restart php7.0-fpm

    #Copiamos el archivo de configuración bueno
    cp /vagrant/config/nginx.default /etc/nginx/sites-available/default
    systemctl reload nginx
    
    cp /vagrant/test/info.php /var/www/html

# Install tools
apt-get install -y unzip

# Download and unzip Wordpress
cd /var/www/html
rm -f latest.zip
wget https://wordpress.org/latest.zip
unzip -o latest.zip

# Configure Wordpress to connect with MySQL
cd wordpress
cp wp-config-sample.php wp-config.php

DB_WP_NAME=wordpress
DB_WP_USER=wp_user;
DB_WP_PASSWORD=wp_password;
DB_HOST=192.168.33.11
#Comando que busca en el archivo wp-config.php y sustituye lineas de caracteres
sed -i -e "s/database_name_here/$DB_WP_NAME/" wp-config.php
sed -i -e "s/username_here/$DB_WP_USER/" wp-config.php
sed -i -e "s/password_here/$DB_WP_PASSWORD/" wp-config.php
sed -i -e "s/localhost/$DB_HOST/" wp-config.php

#Configure WP_HOME and WP_SITEURL
WP_HOME="define('WP_HOME','http://192.168.33.10');" >> wp-config.php
WP_SITEURL="define('WP_SITEURL','http://192.168.33.10/wordpress');" >> wp-config.php

sed -i "/<?php/a $WP_SITEURL" wp-config.php
sed -i "/<?php/a $WP_home" wp-config.php

#Borrar lineas inútiles de wp-config
#sed -i "/put your unique phrase here/d" wp-config.php

#Configure security keys
#curl https://api.wordpress.org/secret-key/1.1/salt/ >> wp-config.php

# Create uploads directory
cd /var/www/html
mkdir -p wordpress/wp-content/uploads
chown -R www-data:www-data *

# Configure Wordpress to rewrite wordpress subdirectory with permalinks
rm -f index.html
cp wordpress/index.php .
sed -i -e "s/wp-blog-header.php/wordpress\/wp-blog-header.php/" index.php

#cd /var/www/html
#mkdir -p wordpress/wp-content/uploads
#chown -R www-data:www-data *