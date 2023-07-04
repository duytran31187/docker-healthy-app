#! /bin/bash

docker-compose up -d
docker-compose exec php composer install
docker-compose exec php npm install
docker-compose exec php npm run build