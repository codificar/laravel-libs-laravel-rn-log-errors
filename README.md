# laravel-rn-log-errors
A library to log errors in react native app

## Getting Started

Add in composer.json:

```php
"repositories": [
    {
        "type": "vcs",
        "url": "https://libs:ofImhksJ@git.codificar.com.br/laravel-libs/laravel-rn-log-errors.git"
    }
]
```

```php
require:{
        "codificar/rn-log-errors": "0.1.0",
}
```

```php
"autoload": {
    "psr-4": {
        "Codificar\\ReactNativeLogErrors\\": "vendor/codificar/rn-log-errors/src/"
    }
}
```
Update project dependencies:

```shell
$ composer update
```

Register the service provider in `config/app.php`:

```php
'providers' => [
  /*
   * Package Service Providers...
   */
  Codificar\ReactNativeLogErrors\ReactNativeLogErrorsServiceProvider::class,
],
```

