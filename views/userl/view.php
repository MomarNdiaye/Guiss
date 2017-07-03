<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Userlistes */

$this->title = $model->IdUtilisateur;
$this->params['breadcrumbs'][] = ['label' => 'Userlistes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userlistes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdUtilisateur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdUtilisateur], [
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
            'IdUtilisateur',
            'Utilisateur',
            'ConnectedUser',
            'Denom',
            'Autorisations',
        ],
    ]) ?>

</div>
