<?php

use app\modules\subscription\models\Subscriptions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\subscription\models\SubscriptionsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Subscriptions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscriptions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Subscriptions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Subscriptions $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                'template' => '{view} {update}'
            ],
        ],
    ]); ?>


</div>
