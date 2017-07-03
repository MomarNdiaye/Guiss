<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Indicateurs */

$this->title = $model->IdIndic;
$this->params['breadcrumbs'][] = ['label' => 'Indicateurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indicateurs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdIndic], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdIndic], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdIndic',
            'OrdIndic',
            'Indic',
            'Cible',
            'ObsIndic:ntext',
            'IdProd',
        ],
    ]) ?>

</div>
