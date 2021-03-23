#
#	Install Wordpress
#	Install PhpMyadmin
#	Install SQL database MariaDB Server
#	Nginx Web Server
#	S.O -> Debian:buster
#	Use SSL protocol
#
FROM debian:buster

MAINTAINER pcuadrad pcuadrad@student.42madrid.com

ADD srcs/wordpress-5.3.tar.gz /var/www/html/

ADD srcs/nginx-conf ./root/

ADD srcs/start.sh ./

ADD srcs/wp-config.php ./root/

ADD srcs/config.inc.php ./root/

ADD srcs/wordpress.sql ./root/

EXPOSE 80 443

CMD bash start.sh && tail -f /dev/null
