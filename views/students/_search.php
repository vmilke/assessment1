<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'SID') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'surname') ?>
<<<<<<< HEAD
	
	<?= $form->field($model, 'login') ?>
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'email_st') ?>

    <?php // echo $form->field($model, 'regdate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
