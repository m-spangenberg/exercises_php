# PHP - Hypertext Preprocessor

An open-source, server-side scripting language that's widely used for making dynamic and interactive web pages.

## Docker: Local Development Server (LAMP)

Quickly deploy a Linux/Apache/MySQL/PHP stack for local testing with Docker Compose. Make sure to set secrets in your `.env` file before performing Docker Compose.

NOTE: `docker-compose.yml` needs some changes to enable Composer for PHP

```bash
mkdir data
chmod -R 777 ./data
mv ./path/to/php/files ./data/
cp ./.env.example ./.env
sudo docker compose -f docker-compose.yml up -d
```

## Docker: Database Administration

Create your database and tables, either manually, or with MySQL Workbench/phpMyAdmin.

```bash
sudo docker ps -a | grep 'mysql'
sudo docker exec -it CONTAINER-ID /bin/bash
mysql -u root -p
CREATE DATABASE testdb;
USE testdb;
```

## Documentation

If you're looking to learn PHP, check out the resources below.

* https://phptherightway.com/
* https://www.php.net/manual/en/