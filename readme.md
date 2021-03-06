Here is just a demo app running PHP8, Nginx, Postgresql & Symfony 5.2.

## Run project

- 1/ Add `127.0.0.1       shoppinglist.local` to /etc/hosts
- 2/ Run `make docker-build && make docker-run`
- 3/ Install dependencies : `docker exec -i docker_shoppinglist-php-cli_1 bash -c "cd /var/www/shopping-list && make vendor"`
- 4/ Go to http://shoppinglist.local:8080

## Memo
- Exec PHP CLI container : `docker exec -it docker_shoppinglist-php-cli_1 bash`
- Connect to the DB : `psql -h docker_shoppinglist-postgres_1 -U neveldo`
- Xdebug for cli commands : `php -dxdebug.start_with_request=yes /path/to/script.php`
- Xdebug conf : set proper DOCKER_HOST_IP & XDEBUG_IDE_KEY defined in .env (host ip = `ip -4 addr show docker0 | grep -Po 'inet \K[\d.]+'`)