# docker-larevel

## Setup
```
cd laradock
docker-compose up -d nginx mysql
docker-compose exec workspace bash
```

## Start    
```
docker-compose up -d nginx mysql
```

## Migrate
```
docker-compose run workspace php artisan migrate
```
