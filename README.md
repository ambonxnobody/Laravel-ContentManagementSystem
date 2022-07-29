## Laravel-ContentManagementSystem Open Source - Installation

The requirements to Laravel-ContentManagementSystem application is:

- **PHP - Supported Versions**: >= 8.0
- **Webserver**: Nginx or Apache
- **Database**: MySQL, or Maria DB

### Git Clone

```
$ git clone https://github.com/ambonxnobody/Laravel-ContentManagementSystem.git
$ cd Laravel-ContentManagementSystem
$ composer update
```

## Setup

**Important**: If you have not the .env file in root folder, you must copy or rename the .env.example to .env

#### Application URL

.env file

```
APP_URL=http://yourdomain.tld (you must use protocol http or https)
```

#### Language

Options: en | id

.env file

```
APP_LANG=en
```

#### Database

.env file

```

DB_CONNECTION=mysql
DB_HOST=XXXXXX
DB_PORT=3306
DB_DATABASE=XXXXX
DB_USERNAME=XXXX
DB_PASSWORD=XXXXX
```

**Remember**: Create the database for Laravel-ContentManagementSystem before run artisan command.

```
php artisan migrate --seed
```

```
Application name: Laravel-ContentManagementSystem
Homepage URL: URL (Same as APP_URL at .env)
```

#### Proxy

.env file

```
PROXY_PORT=
PROXY_METHOD=
PROXY_SERVER=
PROXY_USER=
PROXY_PASS=
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
