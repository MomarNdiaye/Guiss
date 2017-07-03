<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produits */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produits-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'OrdProd')->textInput() ?>

    <?= $form->field($model, 'LibProd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdAnnee')->textInput() ?>

    <?= $form->field($model, 'IdResp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
