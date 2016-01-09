<?php

require_once __DIR__ . '../vendor/autoload.php';

$queue = new SpeakServer\QueueRabbitMQ();
$queue->writeToQueue('test');

