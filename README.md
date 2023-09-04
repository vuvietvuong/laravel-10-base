
# Setup Docker Laravel 10 com PHP 8.1


Create .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=EspecializaTi
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui
```


Run comand
```sh
docker-compose up -d
```


```sh
docker-compose exec app bash
```

```sh
composer install
```

```sh
php artisan key:generate
```
