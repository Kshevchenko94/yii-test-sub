<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\subscription\models\Subscriptions $model */

$this->title = 'Update Subscriptions: ' . $model->receiver;
$this->params['breadcrumbs'][] = ['label' => 'Subscriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subscriptions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
