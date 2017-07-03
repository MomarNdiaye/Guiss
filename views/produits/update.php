<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Produits */

$this->title = 'Update Produits: ' . $model->IdProd;
$this->params['breadcrumbs'][] = ['label' => 'Produits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdProd, 'url' => ['view', 'id' => $model->IdProd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produits-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
