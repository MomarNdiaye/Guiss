<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Indicateurslistes */

$this->title = 'Update Indicateurslistes: ' . $model->IdIndic;
$this->params['breadcrumbs'][] = ['label' => 'Indicateurslistes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdIndic, 'url' => ['view', 'id' => $model->IdIndic]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indicateurslistes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
