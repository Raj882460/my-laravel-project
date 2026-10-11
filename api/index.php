<?php

// Vercel read-only filesystem fix
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

require __DIR__ . '/../public/index.php';
