<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Timetable */

$this->title = $model->id_tt;
$this->params['breadcrumbs'][] = ['label' => 'Timetables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timetable-view">

<<<<<<< HEAD
<!--    <h1><?= Html::encode($this->title) ?></h1>		не могу поменять поэтому убираю -->
=======
    <h1><?= Html::encode($this->title) ?></h1>
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tt], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tt], [
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
<<<<<<< HEAD
//            'id_tt',
            'date_time_on:datetime',	// при помощи datetime переводим Unix-дату в нормальную
//          'id_mod_cl',
			'idModCl.title',	// Вместо 'id_mod_cl' текущей таблицы вставляем 'title' из родительской таблицы modules_classes, но без возможности сортировки
//          'id_la',
			'idModCl.classes',	// тоже берем из родительской таблицы modules_classes
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
        ],
    ]) ?>

</div>
