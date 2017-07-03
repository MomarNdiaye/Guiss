<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IndicateursSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indicateurs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdIndic') ?>

    <?= $form->field($model, 'OrdIndic') ?>

    <?= $form->field($model, 'Indic') ?>

    <?= $form->field($model, 'Cible') ?>

    <?= $form->field($model, 'ObsIndic') ?>

    <?php // echo $form->field($model, 'IdProd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
