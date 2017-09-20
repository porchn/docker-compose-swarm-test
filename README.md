# nginx-php5-apache-docker-compose
nginx php5.6.28 apache2.4 docker-compose

## Docker hub repo 
* https://hub.docker.com/r/porchn/php5.6.28-apache/
* https://hub.docker.com/_/nginx/

## How to use
Clone this Repo And
```bash
$ docker network create \
  --driver overlay \
  --subnet 10.0.9.0/24 \
  --gateway 10.0.9.99 \
  my-network
```
and next
```bash
$ docker stack deploy -c docker-compose.yml <prefix_name>
```
