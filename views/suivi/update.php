<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Suivi */

$this->title = 'Update Suivi: ' . $model->IdSuivi;
$this->params['breadcrumbs'][] = ['label' => 'Suivis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdSuivi, 'url' => ['view', 'id' => $model->IdSuivi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suivi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
