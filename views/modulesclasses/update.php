<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Modulesclasses */


$this->title = 'Update Modules or Classes: ' . ' ' . $model->title;
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => 'Modules & Classes', 'url' => ['index']];
=======
$this->params['breadcrumbs'][] = ['label' => 'Modulesclasses', 'url' => ['index']];
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id_mod_cl]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modulesclasses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
