<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Suivilistes */

$this->title = 'Create Suivilistes';
$this->params['breadcrumbs'][] = ['label' => 'Suivilistes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suivilistes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
