# Laravel API Logger

A comprehensive solution for logging API requests and responses in Laravel applications. This package simplifies the process of debugging and monitoring API traffic by providing detailed logs with configurable options.

## Features

- **Easy Configuration**: Set up and configure with just a few steps.
- **Log Channels**: Use different log channels based on the environment or preference.
- **Sensitive Data Filtering**: Exclude sensitive information like passwords from logs to safeguard user privacy.
- **Flexible Log Levels**: Define log levels for different scenarios or response codes.
- **Customizable Log Output**: Format your log entries according to your specifications.

## Installation

You can install the package via Composer. Run the following command in your Laravel project:

```bash
composer require khangnhddev/api-logger-laravel
```


## Configuration
After installation, publish the configuration file to customize the package to your needs:

```bash
php artisan vendor:publish --provider="Khangnhddev\ApiLoggerLaravel\ServiceProvider" --tag="config"
```
## Usage
To activate API logging, register the middleware in your app/Http/Kernel.php or on individual routes.

```bash
protected $middleware = [
    // Other middleware...
    \Khangnhddev\ApiLoggerLaravel\Middleware\ApiLoggerMiddleware::class,
];
```

```
Route::middleware(['api-logger'])->group(function () {
    // Your API routes
});
