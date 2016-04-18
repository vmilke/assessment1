<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Studentsmodules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studentsmodules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_mod_cl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SID')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
