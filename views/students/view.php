<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Students */

$this->title = $model->name ." ". $model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SID], [
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
            'SID',
            'name',
            'surname',
<<<<<<< HEAD
			'login',
            'email_st:email',
            'regdate:datetime',	// при помощи datetime переводим Unix-дату в нормальную
=======
            'email_st:email',
            'regdate',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
        ],
    ]) ?>

</div>
