<?php

use app\modules\subscription\models\Subscriptions;
use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\subscription\models\Subscriptions $model */

$this->title = $model->receiver;
$this->params['breadcrumbs'][] = ['label' => 'Subscriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="subscriptions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'event',
                'format' => 'text',
                'value' => function($data) {
                    return Subscriptions::$events[$data->event];
                },
            ],
            'receiver',
            [
                'attribute'=>'is_blocked',
                'format' => 'text',
                'value' => function($data) {
                    return Subscriptions::$selectBlocked[$data->is_blocked];
                },
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
