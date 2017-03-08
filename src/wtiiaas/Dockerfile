# Pull image and upgrade / fetch packages
FROM ubuntu:latest
MAINTAINER Louis Dion-Marcil <ldionmarcil@riseup.net>
RUN apt-get update
RUN apt-get -y upgrade
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install mysql-client mysql-server apache2 php libapache2-mod-php python-setuptools vim-tiny php-mysql sudo wget iputils-ping nmap cron xvfb phantomjs


# Hack to get SSL working
RUN mkdir /etc/pki
RUN mkdir /etc/pki/tls
RUN mkdir /etc/pki/tls/certs
RUN wget http://curl.haxx.se/ca/cacert.pem
RUN mv cacert.pem ca-bundle.crt
RUN mv ca-bundle.crt /etc/pki/tls/certs


# Bootstrap MySQL
RUN mkdir /var/run/mysqld
RUN chown mysql:mysql /var/run/mysqld


# Copy app-specific configs
ADD ./configs/000-default.conf /etc/apache2/sites-available/000-default.conf
ADD ./scripts/start.sh /start.sh
ADD ./scripts/foreground.sh /etc/apache2/foreground.sh


# Copy and clean httpd workdir
RUN rm -rf /var/www/
COPY ./www /var/www
RUN chown -R www-data:www-data /var/www/


# Package sysadmin user
adduser --disabled-password --gecos '' sysadmin
COPY ./files/.bash_history /home/sysadmin/.bash_history
COPY ./files/banking.txt.pgp /home/sysadmin/banking.txt.pgp
RUN chown -R sysadmin:sysadmin /home/sysadmin/
RUN chmod 600 /home/sysadmin/.bash_history


# Start main execution loop
RUN chmod 755 /start.sh
#RUN chmod 755 /etc/apache2/foreground.sh
EXPOSE 80
CMD ["/bin/bash", "/start.sh"]