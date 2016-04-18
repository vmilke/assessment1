<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Studentsmodules */

$this->title = 'Create Studentsmodules';
$this->params['breadcrumbs'][] = ['label' => 'Studentsmodules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsmodules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
