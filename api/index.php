<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Force writable paths for serverless
putenv('LOG_CHANNEL=stderr');
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('SESSION_DRIVER=cookie');
putenv('CACHE_DRIVER=array');

$appStorage = '/tmp/storage';

if (!is_dir($appStorage)) {
    @mkdir($appStorage . '/framework/views', 0755, true);
    @mkdir($appStorage . '/framework/sessions', 0755, true);
    @mkdir($appStorage . '/framework/cache', 0755, true);
    @mkdir($appStorage . '/logs', 0755, true);
}

putenv("APP_STORAGE={$appStorage}");

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->useStoragePath($appStorage);

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
