<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rooms */

<<<<<<< HEAD
$this->title = $model->room_number;
=======
$this->title = $model->id_room;
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
$this->params['breadcrumbs'][] = ['label' => 'Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rooms-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_room], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_room], [
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
//            'id_room',
=======
            'id_room',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            'room_number',
            'capacity',
        ],
    ]) ?>

</div>
