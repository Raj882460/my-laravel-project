<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

putenv('LOG_CHANNEL=stderr');
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('SESSION_DRIVER=cookie');
putenv('CACHE_DRIVER=array');

$storageDir = '/tmp/storage';
if (!is_dir($storageDir)) {
    @mkdir($storageDir . '/framework/views', 0755, true);
    @mkdir($storageDir . '/framework/sessions', 0755, true);
    @mkdir($storageDir . '/framework/cache', 0755, true);
    @mkdir($storageDir . '/logs', 0755, true);
}

putenv("APP_STORAGE={$storageDir}");

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->useStoragePath($storageDir);

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
