<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Suivilistes */

$this->title = 'Update Suivilistes: ' . $model->IdSuivi;
$this->params['breadcrumbs'][] = ['label' => 'Suivilistes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdSuivi, 'url' => ['view', 'id' => $model->IdSuivi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suivilistes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
