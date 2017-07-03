<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Responsables */

$this->title = 'Update Responsables: ' . $model->IdResp;
$this->params['breadcrumbs'][] = ['label' => 'Responsables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdResp, 'url' => ['view', 'id' => $model->IdResp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="responsables-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
