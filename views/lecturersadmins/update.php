<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lecturersadmins */

<<<<<<< HEAD
$this->title = 'Update Lecturer or Adminstrator: ' . ' ' . $model->title ." ". $model->name ." ". $model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Lecturers $ Adminstrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->surname, 'url' => ['view', 'id' => $model->id_la]];
=======
$this->title = 'Update Lecturersadmins: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Lecturersadmins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id_la]];
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lecturersadmins-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
