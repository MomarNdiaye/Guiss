<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdUtilisateur',
            'Utilisateur',
            'Denom',
            'Autorisations',

            ['class' => 'yii\grid\ActionColumn',
             'urlCreator'=>function ($action , $model , $key , $index ,$thisa ) {
                       //return string;
                    $params[0] = 'user' . '/' . $action;
                    $params['id'] = (string)$model->IdUtilisateur; 

                    return  Url::to($params);  
                  }

            ],
        ],
    ]); ?>
</div>
