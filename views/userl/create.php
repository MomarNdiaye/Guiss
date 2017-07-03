<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Userlistes */

$this->title = 'Create Userlistes';
$this->params['breadcrumbs'][] = ['label' => 'Userlistes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userlistes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
