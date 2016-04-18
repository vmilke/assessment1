<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Modulesclasses */

$this->title = $model->title;
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => 'Modules & Classes', 'url' => ['index']];
=======
$this->params['breadcrumbs'][] = ['label' => 'Modulesclasses', 'url' => ['index']];
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modulesclasses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_mod_cl], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_mod_cl], [
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
//            'id_mod_cl',
=======
            'id_mod_cl',
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            'code',
            'title',
            'classes',
            'duration',
        ],
    ]) ?>

</div>
