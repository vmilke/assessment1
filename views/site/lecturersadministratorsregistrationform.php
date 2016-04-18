<?php
// helpers нужен чтоб вывести кнопку submit
use yii\helpers\Html;
// подключаем встроенный в Yii виджет, отвечающий за все эти формы
use yii\widgets\ActiveForm;

?>
<h2>Lecturer's and Administrator's registration form</h2>
<?php // если какое-то значение ввели в поле name, то печатаем что именно было введено
	if ($name) { ?>
<p> <b>Hellow  <?= $title ?> </b>  <b> <?= $name ?></b> <b> <?= $surname ?></b> ! </p>
<p>You have entered profession: <b> <?= $profession ?></b>, email: <b> <?= $email ?></b> </b> and login: <b> <?= $login ?> </p>
<?php } ?>
<?php										// здесь выводится тег form; name, action, get, post
	$f = ActiveForm::begin([				// создаем нашу форму из этого виджета форм
		// весь текст ниже - это форматирование полей для ввода информации - просто скопировал с встроенной модели Login
		'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]
	);	
	
?>
	<?= $f->field($lecturersadministratorsregistrationform, 'title')->dropDownList([
		"" => "",
		'PhD' => 'PhD',
		'Prof' => 'Prof'
	]) ?>
	<?= $f->field($lecturersadministratorsregistrationform, 'profession')->dropDownList([
		'lecturer' => 'lecturer',
		'administrator' => 'administrator'
	]) ?>
	<?= $f->field($lecturersadministratorsregistrationform, 'name') // здесь выводим поле 'title', метод field встроен в Yii ?>	
	<?= $f->field($lecturersadministratorsregistrationform, 'surname') ?>
	<?= $f->field($lecturersadministratorsregistrationform, 'email') ?>
	<?= $f->field($lecturersadministratorsregistrationform, 'login') ?>
	<?= $f->field($lecturersadministratorsregistrationform, 'password')->passwordInput() ?>
	<?=	Html::submitButton('Registration');	// вызываем кнопку submit статическим методом. Параметр 'Registration'-это надпись на кнопке
	?>

<?php	// далее ОБЯЗАТЕЛЬНО закрываем этот тег формы
		ActiveForm::end();	
?>
