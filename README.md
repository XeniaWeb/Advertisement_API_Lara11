## Oksana Bürki

[//]: # (<https://xeniaweb.art>)

### About this project

XeniaWeb Project - Laravel 11 API sample

------
## Docker
### Add alias for sail
```sh
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

### Start containers
```sh
make start
```
```sh
sail up -d
```
```sh
./vendor/bin/sail up -d
```

### Stop containers
```sh
make down
```
```sh
sail down
```
```sh
./vendor/bin/sail down
```

### Refresh Database
```sh
./vendor/bin/sail artisan migrate:fresh --force
```
### Refresh Database fake data
```sh
./vendor/bin/sail artisan db:seed --force
```
---

#### If no ./vendor directory yet
<https://hub.docker.com/_/composer>
```sh
docker run --rm --interactive --tty \
  --volume $PWD:/app \
    --user $(id -u):$(id -g) \
  composer install
```
