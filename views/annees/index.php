<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnneesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Annees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="annees-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Annees', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdAnnee',
            'Annee',
            'IdVerrou',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
