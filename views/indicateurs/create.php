<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Indicateurs */

$this->title = 'Create Indicateurs';
$this->params['breadcrumbs'][] = ['label' => 'Indicateurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indicateurs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
