<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Suivi */

$this->title = 'Create Suivi';
$this->params['breadcrumbs'][] = ['label' => 'Suivis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suivi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
