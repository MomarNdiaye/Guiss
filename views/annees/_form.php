<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Annees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="annees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Annee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdVerrou')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
