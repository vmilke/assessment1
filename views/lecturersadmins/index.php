<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LecturersadminsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

<<<<<<< HEAD
$this->title = 'Lecturers & Adminstrators';
=======
$this->title = 'Lecturersadmins';
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lecturersadmins-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lecturersadmins', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
//            'id_la',
//            'title',
=======
            'id_la',
            'title',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            'name',
            'surname',
            'profession',
            // 'login',
            // 'password',
<<<<<<< HEAD
            'email_la:email',
            'regdate:datetime',	// при помощи datetime переводим Unix-дату в нормальную
=======
            // 'email_la:email',
            // 'regdate',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
