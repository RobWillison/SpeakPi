<?php
namespace SpeakServer;

interface QueueInterface
{

    public function push(SpeakObject $object);
}