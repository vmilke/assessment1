<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AttendanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Attendances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attendance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Attendance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<<<<<<< HEAD
	
<?php print_r($dataProvider);   // Arooj 18/04/16

?>
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
//            'id_atten',

            'id_tt',
	// В дополнение к 'id_tt' текущей таблицы добавляем вставляем вторичный ключ 'id_mod_cl', а также 'date_time_on' из родительской таблицы timetables, но без возможности сортировки
	// Сортировку будем проводить по 'id_tt'
			'idTt.id_mod_cl',
			'idTt.date_time_on:datetime',	// при помощи datetime переводим Unix-дату в нормальную
	
            'id_sm',
			// Вместо 'id_sm' текущей таблицы вставляем вторичный ключ 'SID' из таблицы modules_classes, но без возможности сортировки
			'idSm.SID',
			
			//'SID',	// Arooj 18/04/16
			
=======
            'id_atten',
            'id_tt',
            'id_sm',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            'attandance',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
