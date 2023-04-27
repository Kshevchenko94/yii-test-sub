<?php

namespace app\modules\subscription\components;

use app\modules\subscription\interfaces\SendEventInterface;
use yii\base\Component;

class EmailSender extends Component implements SendEventInterface
{

    /**
     * @inheritDoc
     */
    public function send(string $msg): bool
    {
        $this->trigger(SendEventInterface::EVENT_SEND);
        //The $msg send by Email.
        return true;
    }
}