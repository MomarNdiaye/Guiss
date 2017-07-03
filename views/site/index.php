<?php

/* @var $this yii\web\View */

use yii\helpers\Url ; 
use yii\helpers\Html;

$this->title = 'My Yii Application';
$siteLogin = Url::to(['site/login/']);
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Bienvenue!</h1>

        <p class="lead">Bienvenue sur l'application Guiss</p>

       
        
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Produits</h2>

                <p>Il s’agit d’ensembles d’éléments de suivi des réalisations au sein de l’Organisme. Un produit se décline en fait en plusieurs indicateurs. Ex. « Le plan de passation des marchés du ministère est suivi »</p>

                
            </div>
            <div class="col-lg-4">
                <h2>Indicateurs</h2>

                <p>Ce sont les éléments effectifs de suivi. Chaque indicateur a une valeur cible à atteindre par l’Organisme. Ex : « Taux de publication des plans de passation des marchés des structures du MGLDAT ».</p>

                
            </div>
            <div class="col-lg-4">
                <h2>Suivis</h2>

                <p>Le suivi d’un indicateur se fait par trimestre (T1, T2, T3 et T4) pour une année considérée. Les utilisateurs doivent ainsi saisir à la fin de chaque trimestre, les valeurs atteintes (réalisations) pour le trimestre écoulé. Le cumul annuel de ce qui est réalisé divisé par la valeur cible est une donnée calculée par le système qui indique un taux de réalisation annuel.</p>

                
            </div>
        </div>

    </div>
</div>
