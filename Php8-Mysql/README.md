## DOCKER PHP - MYSQL

- php 8
- Composer
- Mysql

Service|Address outside containers
-------|--------------------------
Webserver|[localhost:8000](http://localhost:8000)
Mysql|host: localhost port:48002

## Hosts  ##

Service| Hostname |Port number
------|----------|-----------
php-fpm| php-fpm  |9000
Mysql| mysql    |3306 (default)

## Mysql  ##

Service| default 
------|---------|
ROOT PW| root    |
DATABASE| bdd     |
 USER | admin   |
USER PW| admin   |

Change before docker-compose build:
ligne 9 - 12 docker-compose.yml

#####################
