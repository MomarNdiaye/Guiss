<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserlistesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userlistes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdUtilisateur') ?>

    <?= $form->field($model, 'Utilisateur') ?>

    <?= $form->field($model, 'ConnectedUser') ?>

    <?= $form->field($model, 'Denom') ?>

    <?= $form->field($model, 'Autorisations') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
