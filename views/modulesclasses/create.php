<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Modulesclasses */

$this->title = 'Create Modulesclasses';
$this->params['breadcrumbs'][] = ['label' => 'Modulesclasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modulesclasses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
