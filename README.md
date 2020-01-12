
# Image loader app built with LAMP stack in docker-compose.yml

This is a basic LAMP stack environment built using Docker Compose. It consists following:

* PHP 7.2
* Apache 2.4
* MySQL 5.7
* phpMyAdmin

## Installation

```shell
cp sample.env .env
docker-compose up -d
```

Your LAMP stack is now ready!! You can access it via `http://localhost`.


## phpMyAdmin

phpMyAdmin is configured to run on port 8080. Use following default credentials.

http://localhost:8080/  
username: root  
password: root
