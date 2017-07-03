<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuiviSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suivi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdSuivi') ?>

    <?= $form->field($model, 'IdIndic') ?>

    <?= $form->field($model, 'ReaT1') ?>

    <?= $form->field($model, 'ReaT2') ?>

    <?= $form->field($model, 'ReaT3') ?>

    <?php // echo $form->field($model, 'ReaT4') ?>

    <?php // echo $form->field($model, 'Obs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
