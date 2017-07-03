<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\Autorisations ;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuiviSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suivis';
$this->params['breadcrumbs'][] = $this->title;
$autorisationUtilisateur =Autorisations::findOne(Yii::$app->user->identity->IdAutoris)->Autorisations;
?>
<div class="suivi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Suivi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdSuivi',
            'Indic',
            'ReaT1',
            'ReaT2',
            'ReaT3',
            'ReaT4',
            'Obs',

            ['class' => 'yii\grid\ActionColumn',

            'template'=>($autorisationUtilisateur=='Administrateur')?'':'{view} {update} {delete}',

             'urlCreator'=>function ($action , $model , $key , $index ,$thisa ) {
                       //return string;
                    $params[0] = 'suivi' . '/' . $action;
                    $params['id'] = (string)$model->IdSuivi; 

                    return  Url::to($params);  
                  }
            ],
        ],
    ]); ?>
</div>
