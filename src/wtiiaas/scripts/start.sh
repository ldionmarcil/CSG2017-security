#!/bin/bash

/usr/bin/mysqld_safe &
sleep 10
mysql < /database/permissions.sql
mysql < /database/data.sql



mysqladmin -u root password "Wh@t3ver!Wh@t3ver!" 



rm /var/run/apache2/apache2.pid

source /etc/apache2/envvars
apache2 -D FOREGROUND
