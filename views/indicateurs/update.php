<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Indicateurs */

$this->title = 'Update Indicateurs: ' . $model->IdIndic;
$this->params['breadcrumbs'][] = ['label' => 'Indicateurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdIndic, 'url' => ['view', 'id' => $model->IdIndic]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indicateurs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
