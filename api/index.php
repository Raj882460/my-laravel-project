<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));

// Force serverless runtime environments
putenv('LOG_CHANNEL=stderr');
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('SESSION_DRIVER=cookie');
putenv('CACHE_DRIVER=array');

$appStorage = '/tmp/storage';
$bootstrapCache = '/tmp/bootstrap/cache';

if (!is_dir($appStorage)) {
    @mkdir($appStorage . '/framework/views', 0755, true);
    @mkdir($appStorage . '/framework/sessions', 0755, true);
    @mkdir($appStorage . '/framework/cache', 0755, true);
    @mkdir($appStorage . '/logs', 0755, true);
}

if (!is_dir($bootstrapCache)) {
    @mkdir($bootstrapCache, 0755, true);
}

putenv("APP_STORAGE={$appStorage}");

require __DIR__ . '/../vendor/autoload.php';

$app = new Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Overriding write paths to /tmp directory
$app->useStoragePath($appStorage);
$app->instance('path.bootstrap', '/tmp/bootstrap');

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
