<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use app\models\Autorisations ; 

/* @var $this yii\web\View */
/* @var $searchModel app\models\IndicateursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Indicateurs';
$this->params['breadcrumbs'][] = $this->title;
$autorisationUtilisateur =Autorisations::findOne(Yii::$app->user->identity->IdAutoris)->Autorisations;
?>
<div class="indicateurs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Indicateurs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'OrdIndic',
            'LibProd',
            'Indic',
            'Cible',
            'ObsIndic:ntext',
            // 'IdProd',

            ['class' => 'yii\grid\ActionColumn',

            'template'=>($autorisationUtilisateur=='Administrateur')?'':'{view} {update} {delete}',

            'urlCreator'=>function ($action , $model , $key , $index ,$thisa ) {
                       //return string;
                    $params[0] = 'indicateurs' . '/' . $action;
                    $params['id'] =  (string) $model->IdIndic; 

                    return  Url::to($params);  
                  }
            ],
        ],
    ]); ?>
</div>
