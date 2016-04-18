<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lecturersadmins */

$this->title = 'Create Lecturersadmins';
$this->params['breadcrumbs'][] = ['label' => 'Lecturersadmins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lecturersadmins-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
