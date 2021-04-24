<?php
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '1784880092:AAGnlUNxF0h_9AuGztMA7FO6PiA5HWGh7VU';
$bot_username = 'my_test_dd_bot';

$mysql_credentials = [
   'host'     => '127.0.0.1/openserver/phpmyadmin/index.php',
   'user'     => 'root',
   'password' => 'root',
   'database' => 'telegram',
];

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Enable MySQL
    $telegram->enableMySql($mysql_credentials);

    // Handle telegram getUpdates request
    $telegram->handleGetUpdates();
    
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
     echo $e->getMessage();
}