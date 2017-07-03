<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuivilistesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suivilistes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suivilistes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Suivilistes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdSuivi',
            'ReaT1',
            'ReaT2',
            'ReaT3',
            'ReaT4',
            // 'Obs',
            // 'Indic',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
