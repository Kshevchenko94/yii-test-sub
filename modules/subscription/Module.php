<?php

namespace app\modules\subscription;

use app\modules\subscription\interfaces\SendEventInterface;
use yii\base\Event;

/**
 * Subscription module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\subscription\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        Event::on(
            'app\modules\subscription\interfaces\SendEventInterface',
            SendEventInterface::EVENT_SEND,
            function ($event) {
                //
            }
        );
    }
}
