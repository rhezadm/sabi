# Clone Repository

````

After clone or download this repository, next step is install all dependency required by laravel and laravel-mix.

```shell
# install composer-dependency
$ composer install
````

Before we start web server make sure we already generate app key, configure `.env` file and do migration.

```shell
# create copy of .env && configuration the database
$ cp .env.example .env
# create laravel key
$ php artisan key:generate
# laravel migrate
$ php artisan migrate
```
