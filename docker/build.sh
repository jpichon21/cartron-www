#!/bin/bash
set -e
 
if ! [[ -d ../logs/apache ]]; then
    mkdir -p ../logs/apache
fi
 
if ! [[ -d ../logs/mysql ]]; then
    mkdir -p ../logs/mysql
fi
 
if ! [[ -d ../logs/php ]]; then
    mkdir -p ../logs/php
fi
 
if ! [[ -d ../database ]]; then
    mkdir ../database
fi
 
docker-compose up -d --build
 
docker exec helloworld_apache_con chown -R root:www-data /usr/local/apache2/logs
docker exec helloworld_php_con chown -R root:www-data /usr/local/etc/logs
