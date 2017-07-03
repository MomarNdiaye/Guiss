<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Annees */

$this->title = 'Update Annees: ' . $model->IdAnnee;
$this->params['breadcrumbs'][] = ['label' => 'Annees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdAnnee, 'url' => ['view', 'id' => $model->IdAnnee]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="annees-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
