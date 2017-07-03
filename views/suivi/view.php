<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Suivi */

$this->title = $model->IdSuivi;
$this->params['breadcrumbs'][] = ['label' => 'Suivis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suivi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdSuivi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdSuivi], [
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
            'IdSuivi',
            'IdIndic',
            'ReaT1',
            'ReaT2',
            'ReaT3',
            'ReaT4',
            'Obs',
        ],
    ]) ?>

</div>
