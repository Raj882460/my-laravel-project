<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Vercel serverless read-only filesystem environment override
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

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Dynamically override bootstrap cache paths to writable /tmp directory
$app->useStoragePath($appStorage);
$app->useBootstrapPath('/tmp/bootstrap');

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
