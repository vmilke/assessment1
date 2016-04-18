<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Studentsmodules */

<<<<<<< HEAD
$this->title = 'Update Students & Modules: ' . ' ' . $model->id_sm;
=======
$this->title = 'Update Studentsmodules: ' . ' ' . $model->id_sm;
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
$this->params['breadcrumbs'][] = ['label' => 'Studentsmodules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sm, 'url' => ['view', 'id' => $model->id_sm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studentsmodules-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
