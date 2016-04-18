<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Timetable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timetable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_time_on')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_room')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_mod_cl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_la')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
