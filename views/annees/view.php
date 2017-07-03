<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Annees */

$this->title = $model->IdAnnee;
$this->params['breadcrumbs'][] = ['label' => 'Annees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="annees-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdAnnee], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdAnnee], [
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
            'IdAnnee',
            'Annee',
            'IdVerrou',
        ],
    ]) ?>

</div>
