<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Students', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SID',
            'name',
            'surname',
<<<<<<< HEAD
			'login',
//            'password',
            'email_st:email',
            'regdate:datetime',	// при помощи datetime переводим Unix-дату в нормальную
=======
            'password',
            'email_st:email',
            // 'regdate',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
