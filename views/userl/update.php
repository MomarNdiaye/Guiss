<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userlistes */

$this->title = 'Update Userlistes: ' . $model->IdUtilisateur;
$this->params['breadcrumbs'][] = ['label' => 'Userlistes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdUtilisateur, 'url' => ['view', 'id' => $model->IdUtilisateur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userlistes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
