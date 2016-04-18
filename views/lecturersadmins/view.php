<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lecturersadmins */

$this->title = $model->title ." ". $model->name ." ". $model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Lecturersadmins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="lecturersadmins-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_la], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_la], [
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
//            'id_la',
=======
            'id_la',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            'title',
            'name',
            'surname',
            'profession',
            'login',
            'email_la:email',
<<<<<<< HEAD
            'regdate:datetime',	// при помощи datetime переводим Unix-дату в нормальную
=======
            'regdate',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
        ],
    ]) ?>

</div>
