<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Autorisations; 

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Guiss',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    !Yii::$app->user->isGuest?($AutorisationUtilisateur =Autorisations::findOne(Yii::$app->user->identity->IdAutoris)->Autorisations):($AutorisationUtilisateur='Visiteur');

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
                     ['label'=>'Home' , 'url'=>['site/index'] ],
                    
                     ['label' => 'Produits', 'url' => ['/produits/index'] ,'visible'=>!Yii::$app->user->isGuest ],

                    ['label' => 'Indicateurs', 'url' => ['/indicateurs/index'] ,'visible'=>!Yii::$app->user->isGuest],

                    ['label' => 'Suivis', 'url' => ['/suivi/index'] ,'visible'=>!Yii::$app->user->isGuest],

                    //------------------------------- Utilisateur ordinaire -------------

                    ['label' => 'Utilisateur', 'url' => ['/user/index'] ,'visible'=>((!Yii::$app->user->isGuest)&&($AutorisationUtilisateur=='Administrateur'))||((!Yii::$app->user->isGuest)&&($AutorisationUtilisateur=='Super Admin'))

                    ],

                    ['label' => 'Annnées', 'url' => ['/annees/index'] ,'visible'=>((!Yii::$app->user->isGuest)&&($AutorisationUtilisateur=='Administrateur'))||((!Yii::$app->user->isGuest)&&($AutorisationUtilisateur=='Super Admin'))
                    ],
                    // --------------------------------Administrateur -----------------------

                    ['label' => 'Responsables', 'url' => ['/responsables/index'] ,'visible'=>(!Yii::$app->user->isGuest)&&($AutorisationUtilisateur=='Super Admin')],


                    //----------------------------------Super Admin ----------------------


                    Yii::$app->user->isGuest?(
                        ['label' => 'Login', 'url' =>['/site/login'], ]
                    )
                    :
                    (

                        '<li>'

                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->Utilisateur . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                    )
                   
                    
                    ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Guiss <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
