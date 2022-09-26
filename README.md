# docker-lamp

Docker with Apache, MySQL 8.0, PHPMyAdmin and PHP.

I use docker-compose as an orchestrator. To run these containers:

``` bash
docker-compose up -d
```

## Services
- phpmyadmin at [http://127.0.0.1:8000](http://127.0.0.1:8000)
- served app at [http://127.0.0.1:80](http://127.0.0.1:80)

## Project Setup
Clone YourProject on `www/` and then, open web [http://127.0.0.1/YourProject](http://127.0.0.1/YourProject)


## Other
Run MySQL client:

```bash
docker-compose exec db mysql -u root -p
```
