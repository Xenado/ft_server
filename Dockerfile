# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: user42 <jocaille@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/09/08 19:55:10 by user42            #+#    #+#              #
#    Updated: 2020/09/13 16:28:08 by user42           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# Image
FROM debian:buster

# Update Image
RUN apt-get update && apt-get -y upgrade

# Install dependencies
RUN apt-get install -y 	wget \
						unzip \
						nginx \
						default-mysql-server \
						php7.3 php7.3-fpm php7.3-mysql

# Generate SSL
RUN mkdir -p /etc/nginx/ssl \
	&& openssl req	-x509 \
					-nodes \
					-days 365 \
					-newkey rsa:2048 \
					-out /etc/nginx/ssl/site.crt \
					-keyout /etc/nginx/ssl/site.key \
					-subj "/C=FR/ST=Paris/0=42 School/OU=jocaille/CN=site"

# Install phpMyAdmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.zip \
	&& unzip phpMyAdmin-5.0.2-all-languages.zip -d /var/www/ \
	&& mv /var/www/phpMyAdmin-5.0.2-all-languages/ /var/www/phpmyadmin/ \
	&& rm -rf phpMyAdmin-5.0.2-all-languages.zip

# Install WordPress
RUN wget https://fr.wordpress.org/latest-fr_FR.tar.gz \
	&& tar -zvxf latest-fr_FR.tar.gz -C /var/www/ \
	&& rm -rf latest-fr_FR.tar.gz

# Configure services
ADD srcs/wp-config.php /var/www/wordpress/
ADD srcs/nginx.conf /etc/nginx/conf.d/nginx.conf

# Database config
ADD srcs/init_db.sql .

# Ports
EXPOSE	80 \
		443

# BOOM
CMD	service nginx start \
	&& service php7.3-fpm start \
	&& service mysql start \
	&& mysql < init_db.sql \
	&& rm init_db.sql \
	&& tail -f /dev/null
