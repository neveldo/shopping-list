Here is just a demo app running PHP8, Nginx, Postgresql & Symfony 5.2.

## Run project

- 1/ Add `127.0.0.1       shoppinglist.local` to /etc/hosts
- 2/ Run `make docker-build && make docker-run`
- 3/ `docker exec -it docker_shoppinglist-php-cli_1 bash`
- 4/ `cd /var/www/shopping-list && composer install`
- 5/ Go to http://shoppinglist.local:8080

## Memo

- Connect to the DB : `psql -h docker_shoppinglist-postgres_1 -U neveldo`
- Xdebug for cli commands : `php -dxdebug.start_with_request=yes /path/to/script.php`
- Xdebug conf : set proper DOCKER_HOST_IP & XDEBUG_IDE_KEY defined in .env (host ip = `ip -4 addr show docker0 | grep -Po 'inet \K[\d.]+'`)