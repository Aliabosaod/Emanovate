<?php

http_response_code(200);

file_put_contents(
    __DIR__ . '/telegram.log',
    date('Y-m-d H:i:s') . PHP_EOL,
    FILE_APPEND
);

$update = file_get_contents('php://input');

file_put_contents(
    __DIR__ . '/last_update.json',
    $update
);

echo "OK";
