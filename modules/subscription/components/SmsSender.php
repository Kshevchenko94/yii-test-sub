<?php

namespace app\modules\subscription\components;

use app\modules\subscription\interfaces\SendEventInterface;
use yii\base\Component;

class SmsSender extends Component implements SendEventInterface
{

    /**
     * @inheritDoc
     */
    public function send(string $msg): bool
    {
        //The $msg send by SMS.
        $this->trigger(SendEventInterface::EVENT_SEND);
        return true;
    }
}