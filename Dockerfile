FROM ubuntu:latest

RUN apt-get update && apt-get -y upgrade && DEBIAN_FRONTEND=noninteractive apt-get -y install \
    apache2 php7.0 libapache2-mod-php7.0

# Enable apache mods.
RUN a2enmod php7.0
RUN a2enmod rewrite

# Update the PHP.ini file, enable <? ?> tags and quieten logging.
RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php/7.0/apache2/php.ini

# Manually set up the apache environment variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# Expose apache.
EXPOSE 80

# Copy this repo into place.
RUN rm /var/www/html/index.html
COPY html /var/www/html
COPY dynamic /var/www/dynamic

# Update the default apache site with the config we created.
COPY apache-config.conf /etc/apache2/sites-enabled/001-mysite.conf

# By default start up apache in the foreground, override with /bin/bash for interative.
ENTRYPOINT /usr/sbin/apache2ctl -D FOREGROUND