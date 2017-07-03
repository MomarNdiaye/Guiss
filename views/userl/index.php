<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserlistesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userlistes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userlistes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userlistes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdUtilisateur',
            'Utilisateur',
            'ConnectedUser',
            'Denom',
            'Autorisations',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
