<?php

require_once './vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$queue = 'TEST';
$message = 'Hello World! '.date('Y-m-d H:i:s');

try {
    $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
    $channel = $connection->channel();
    
    $channel->queue_declare($queue, false, false, false, false);
    
    $msg = new AMQPMessage($message);
    $channel->basic_publish($msg, '', $queue);

    echo " [x] Sent '$message'\n";

    $channel->close();
    $connection->close();
} catch(Exception $e) {
    echo "\n [!] RabbitMQ Error:  ",$e->getMessage(),"\n";
}
?>