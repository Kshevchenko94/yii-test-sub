<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\subscription\models\Subscriptions $model */

$this->title = 'Create Subscriptions';
$this->params['breadcrumbs'][] = ['label' => 'Subscriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscriptions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
