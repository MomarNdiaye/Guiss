<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Annees */

$this->title = 'Create Annees';
$this->params['breadcrumbs'][] = ['label' => 'Annees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="annees-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
