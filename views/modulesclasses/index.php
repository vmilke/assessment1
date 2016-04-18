<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModulesclassesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modules & Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modulesclasses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Modulesclasses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
//            'id_mod_cl',
=======
            'id_mod_cl',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            'code',
            'title',
            'classes',
            'duration',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
