<?php
// helpers нужен чтоб вывести кнопку submit
use yii\helpers\Html;
// подключаем встроенный в Yii виджет, отвечающий за все эти формы
use yii\widgets\ActiveForm;

?>
<?php // если какое-то значение ввели в поле name, то печатаем что именно было введено
	if ($name) { ?>
<p>You have entered name: <b><?= $name ?> </b> and email: <b> <?= $email ?></b>.</p>
<?php } ?>
<?php
	$f = ActiveForm::begin();	// создаем нашу форму из этого виджета форм
	// здесь выводится тег form; name, action, get, post
?>
	
	<?= $f->field($studentsregform, 'name')	// здесь выводим поле 'name', метод field встроен в Yii
	?>
	<?= $f->field($studentsregform, 'email') ?>
	<?=	Html::submitButton('Submit');	// вызываем кнопку submit статическим методом. Параметр 'Submit'-это надпись на кнопке
	?>

<?php	// далее ОБЯЗАТЕЛЬНО закрываем этот тег формы
		ActiveForm::end();	
?>