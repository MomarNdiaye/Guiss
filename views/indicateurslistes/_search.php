<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IndicateurslistesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indicateurslistes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdIndic') ?>

    <?= $form->field($model, 'OrdIndic') ?>

    <?= $form->field($model, 'Indic') ?>

    <?= $form->field($model, 'ObsIndic') ?>

    <?= $form->field($model, 'Cible') ?>

    <?php // echo $form->field($model, 'LibProd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
