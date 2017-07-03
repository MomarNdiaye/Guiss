<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userlistes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userlistes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdUtilisateur')->textInput() ?>

    <?= $form->field($model, 'Utilisateur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ConnectedUser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Denom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Autorisations')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
