<?php

namespace SpeakServer;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class QueueRabbitMQ implements QueueInterface
{

    public function push(SpeakObject $object)
    {
        $this->writeToQueue($object->getText());
    }

    public function writeToQueue($text) {
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        $channel->queue_declare('speak', false, false, false, false);

        $msg = new AMQPMessage($text);
        $channel->basic_publish($msg, '', 'speak');

        $channel->close();
        $connection->close();
    }
}