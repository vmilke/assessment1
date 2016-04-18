<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Students */

<<<<<<< HEAD
$this->title = 'Update Students: ' . ' ' . $model->name." ". $model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->surname, 'url' => ['view', 'id' => $model->SID]];
=======
$this->title = 'Update Students: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->SID]];
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="students-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
