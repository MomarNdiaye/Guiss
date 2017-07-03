<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IndicateurslistesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Indicateurslistes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indicateurslistes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Indicateurslistes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdIndic',
            'OrdIndic',
            'Indic',
            'ObsIndic:ntext',
            'Cible',
            // 'LibProd',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
