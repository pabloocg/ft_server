
##### UPDATE SYSTEM ######

DEBIAN_FRONTEND=noninteractive
apt-get -y update && apt-get -y upgrade &&  apt-get -y install nginx && apt-get -y install php7.3 php-fpm php-mysql
apt-get -y install mariadb-server && apt-get -y install wget unzip openssl

##### NGINX CONF #####

rm /etc/nginx/sites-available/default
rm /etc/nginx/sites-enabled/default
mv /root/nginx-conf /etc/nginx/sites-available/wordpress-conf
ln -s /etc/nginx/sites-available/wordpress-conf /etc/nginx/sites-enabled/wordpress-conf

######## WORDPRESS CONF #####

mv /root/wp-config.php /var/www/html/wordpress/wp-config.php

####### PHPMYADMIN #######

cd /root/
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-english.zip
unzip phpMyAdmin-4.9.2-english.zip && rm *.zip
mv /root/phpMyAdmin-4.9.2-english /var/www/html/phpmyadmin
mv /root/config.inc.php /var/www/html/phpmyadmin/config.inc.php
chown -R www-data:www-data /var/www/html/*
chmod -R o-wrx /var/www/html/*

##### MYSQL CONF ######

service mysql start
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
echo "update mysql.user set plugin = 'mysql_native_password' where user='root';" | mysql -u root
cd /root/
mysql -u root wordpress < wordpress.sql

#### SSL #####

openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=ES/ST=MAD/L=Madrid/O=42Madrid/CN=pcuadrad' -keyout /etc/ssl/certs/wordpress.key -out /etc/ssl/certs/wordpress.crt

######## RESTART SERVICES ########

service mysql restart
service php7.3-fpm start
service nginx restart
