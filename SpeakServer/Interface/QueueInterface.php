<?php
namespace SpeakServer;

interface QueueInterface
{
    public function push(SpeakObject $object);

    public function pop(SpeakObject $object);
}