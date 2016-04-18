<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Studentsmodules */

$this->title = $model->id_sm;
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => 'Students & Modules', 'url' => ['index']];
=======
$this->params['breadcrumbs'][] = ['label' => 'Studentsmodules', 'url' => ['index']];
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsmodules-view">

<<<<<<< HEAD
<!--    <h1><?= Html::encode($this->title) ?></h1>		не може поменять поэтому убираю -->
=======
    <h1><?= Html::encode($this->title) ?></h1>
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_sm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_sm], [
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
//          'id_sm',

            'SID',
	// В дополнение к 'SID' текущей таблицы добавляем вставляем 'name' и 'surname' из родительской таблицы students, но без возможности сортировки
	// Сортировку будем проводить по 'SID'
			's.name',
			's.surname',

//          'id_mod_cl',
	// Вместо 'id_mod_cl' текущей таблицы вставляем 'title' и 'classes' из родительской таблицы modules_classes, но без возможности сортировки
			'idModCl.title',	
			'idModCl.classes',
			
=======
            'id_sm',
            'id_mod_cl',
            'SID',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
        ],
    ]) ?>

</div>
