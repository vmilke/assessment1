<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TimetableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Timetables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timetable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Timetable', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
//            'id_tt',
            'date_time_on:datetime',	// при помощи datetime переводим Unix-дату в нормальную
//			'id_mod_cl'	
			'idModCl.title',	// Вместо 'id_mod_cl' текущей таблицы вставляем 'title' из родительской таблицы modules_classes, но без возможности сортировки
/*			[		// Вместо 'id_mod_cl' текущей таблицы вставляем 'id_mod_cl' из родительской таблицы modules_classes - не получается - косяк
				'attribute'=>'id_mod_cl',
				'label'=>'Родительская категория',
				'format'=>'text', // Возможные варианты: raw, html
				'content'=>function($data){
					return $data->getIdModClTitle();
				},
				'filter' => Modulesclasses::getIdModClList()
			],
*/			'idModCl.classes',	// тоже берем из родительской таблицы modules_classes
//			'id_la',
			'idLa.surname',	// Вместо 'id_la' текущей таблицы вставляем 'surname' из родительской таблицы lectures_admins, но без возможности сортировки
//			'id_room',
			'idRoom.room_number',	// Вместо 'id_room' текущей таблицы вставляем 'room_number' из родительской таблицы rooms, но без возможности сортировки
=======
            'id_tt',
            'date_time_on',
            'id_room',
            'id_mod_cl',
            'id_la',

>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
