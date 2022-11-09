# onePlace XI Api Core
Core Module for onePlace XI Api Server.

## How to start locally
- Enter Projekt directory, run `composer install`
- Create `config/autoload/local.php`
- Start Dev Server `php -S 0.0.0.0:8080 -t public public/index.php`
- The API is now running on localhost:8080

```php
return [
    'db' => [
        'adapters' => [
            'api' => [
                'database' => 'nameOfYourDatabase',
                'driver' => 'PDO_Mysql',
                'username' => 'databaseUser',
                'password' => 'databasePassword',
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authentication' => [
            'adapters' => [
                'api' => [
                    'adapter' => \Laminas\ApiTools\MvcAuth\Authentication\OAuth2Adapter::class,
                    'storage' => [
                        'adapter' => \pdo::class,
                        'dsn' => 'mysql:dbname=nameOfYourDatabase;host=localhost;charset=utf8',
                        'route' => '/oauth',
                        'username' => 'databaseUser',
                        'password' => 'databasePassword',
                    ],
                ],
            ],
        ],
    ],
];
```
