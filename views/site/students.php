<?php
	// виджет, отвечающий за пагинацию - pagination
	use yii\widgets\LinkPager;
?>
<html>
<head>
	<title>Table Students</title>
</head>
<body>
	<h1 align = 'center' >Table Students</h1>
</body>
</html>

<?php
	echo '<table width="50%" align = "center" border = "3" cellspacing="10" >'; // cellspacing="10" пытаюсь сделать "зазора" между ячейками - не получается
	foreach($students as $k) {
		echo '<tr height="50">';
			
/*			foreach ($k as $item)
				{
					echo '<td><center>'.$item.'</center></td>';
				}
*/
			echo '<td><center>'.$k->name.'</center></td>';
			echo '<td><center>'.$k->surname.'</center></td>';
			echo '<td><center>'.$k->email_st.'</center></td>';

		echo '</tr>';
	} 
	echo '</table>';
	echo "<br><br>";
	// вызываем виждет, отвечающий за пагинацию
	// все виджеты вызываются одинаково: НазваниеВиджета::widget()
	echo LinkPager::widget(['pagination' => $pagination]);	// передаем массив 'pagination' с значением $pagination

?>
