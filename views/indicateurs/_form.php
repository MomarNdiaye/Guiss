<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Indicateurs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indicateurs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'OrdIndic')->textInput() ?>

    <?= $form->field($model, 'Indic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cible')->textInput() ?>

    <?= $form->field($model, 'ObsIndic')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IdProd')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
