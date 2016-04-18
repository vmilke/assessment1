<html>
<head>
	<title>Table Modules & Classes</title>
</head>
<body>
	<h1 align = 'center' >Table Modules & Classes</h1>
</body>
</html>

<?php
	echo '<table width="50%" align = "center" border = "3" cellspacing="10" >'; // cellspacing="10" пытаюсь сделать "зазора" между ячейками - не получается
	foreach($modulesclasses as $k) {
		echo '<tr height="50">';
			
/*			foreach ($k as $item)
				{classes
					echo '<td><center>'.$item.'</center></td>';
				}
*/
			echo '<td><center>'.$k->code.'</center></td>';
			echo '<td><center>'.$k->title.'</center></td>';
			echo '<td><center>'.$k->classes.'</center></td>';
			echo '<td><center>'.$k->duration.'</center></td>';

		echo '</tr>';
	} 
	echo '</table>';

?>
