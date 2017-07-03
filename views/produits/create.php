<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Produits */

$this->title = 'Create Produits';
$this->params['breadcrumbs'][] = ['label' => 'Produits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produits-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
