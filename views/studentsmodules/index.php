<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentsmodulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

<<<<<<< HEAD
$this->title = 'Students & Modules';
=======
$this->title = 'Studentsmodules';
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsmodules-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
<<<<<<< HEAD
        <?= Html::a('Create Students & Modules', ['create'], ['class' => 'btn btn-success']) ?>
=======
        <?= Html::a('Create Studentsmodules', ['create'], ['class' => 'btn btn-success']) ?>
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
//          'id_sm',
//          'id_mod_cl',
			// Вместо 'id_mod_cl' текущей таблицы вставляем 'title' и 'classes' из родительской таблицы modules_classes, но без возможности сортировки
			'idModCl.title',
			'idModCl.classes',
			
	// В дополнение к 'SID' текущей таблицы добавляем вставляем 'name' и 'surname' из родительской таблицы students, но без возможности сортировки
	// Сортировку будем проводить по 'SID'
			's.name',
			's.surname',
			
			'SID',
=======
            'id_sm',
            'id_mod_cl',
            'SID',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
