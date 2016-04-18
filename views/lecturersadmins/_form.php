<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lecturersadmins */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lecturersadmins-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->dropDownList([ '' => '', 'PhD' => 'PhD', 'Prof' => 'Prof', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profession')->dropDownList([ 'lecturer' => 'Lecturer', 'administrator' => 'Administrator', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_la')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regdate')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
