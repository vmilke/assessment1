<?php
// helpers нужен чтоб вывести кнопку submit
use yii\helpers\Html;
// подключаем встроенный в Yii виджет, отвечающий за все эти формы
use yii\widgets\ActiveForm;
<<<<<<< HEAD
// подключаем кнопку Bootstrap
use yii\bootstrap\Button;
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e

?>
<h2>Student's registration form</h2>
<?php // если какое-то значение ввели в поле name, то печатаем что именно было введено
	if ($name) { ?>
<<<<<<< HEAD
<h3> Hello <b> <?= $name ?> </b> <b> <?= $surname ?></b> ! </h3>
<h3>You have entered login: <b> <?= $login ?></b> <b> and email: <?= $email ?></b> </h3>
<?php
	// кнопка Bootstrap
	echo Button::widget([
		'label' => 'Continue',
		'options' => [
			'class' => 'btn-lg btn-primary',
			'style' => 'margin:5px'
		],
//		'url' => ['/site/about']	// Потом поменять about на модель страницы для студентов
	]);

	} ?>
=======
<p> <b>Hello  <?= $name ?> </b> <b> <?= $surname ?></b> ! </p>
<p>You have entered email: <b> <?= $email ?></b> </p>
<?php } ?>
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
<?php										// здесь выводится тег form; name, action, get, post
	$f = ActiveForm::begin([				// создаем нашу форму из этого виджета форм
		// весь текст ниже - это форматирование полей для ввода информации - просто скопировал с встроенной модели Login
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ] );	
?>
	
	<?= $f->field($studentsregistrationform, 'name')	// здесь выводим поле 'name', метод field встроен в Yii
	?>
	<?= $f->field($studentsregistrationform, 'surname') ?>
	<?= $f->field($studentsregistrationform, 'email') ?>
<<<<<<< HEAD
	<?= $f->field($studentsregistrationform, 'login') ?>
	<?= $f->field($studentsregistrationform, 'password')->passwordInput() // passwordInput() скрывает пароль, введенный в форму ?>
	<?=	Html::submitButton('Registration');	// вызываем кнопку submit статическим методом. Параметр 'Registration'-это надпись на кнопке
	?>

<?php	
// далее ОБЯЗАТЕЛЬНО закрываем этот тег формы
=======
	<?= $f->field($studentsregistrationform, 'password')->passwordInput() ?>
	<?=	Html::submitButton('Registration');	// вызываем кнопку submit статическим методом. Параметр 'Registration'-это надпись на кнопке
	?>

<?php	// далее ОБЯЗАТЕЛЬНО закрываем этот тег формы
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
		ActiveForm::end();	
?>