<?php

namespace app\modules\subscription\interfaces;

interface SendEventInterface
{
    public const EVENT_SEND = 'send';

    /**
     * @param string $msg
     * @return bool
     */
    public function send(string $msg): bool;
}