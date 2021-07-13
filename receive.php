<?php

require_once './vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;

$queue = 'TEST';

try {
    $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
    $channel = $connection->channel();

    $channel->queue_declare($queue, false, false, false, false);

    echo " [*] Waiting for messages. To exit press CTRL+C\n";

    $callback = function ($msg) {
        echo " [x] [", date('H:i:s'),'] Received ', $msg->body, "\n";
    };

    $channel->basic_consume($queue, '', false, true, false, false, $callback);

    while ($channel->is_open()) {
        $channel->wait();
    }

    $channel->close();
    $connection->close();
} catch(Exception $e) {
    echo " [x] Cant connect to RabbitMQ ",$e->getMessage(),"\n";
}

?>