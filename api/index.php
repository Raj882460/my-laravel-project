<?php

// Vercel serverless environment ke liye temporary directory setup
$_ENV['APP_STORAGE'] = '/tmp';

require __DIR__ . '/../public/index.php';
