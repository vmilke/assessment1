<html>
<head>
	<title>Table Students</title>
</head>
<body>
	<h1 align = 'center' >Table Students</h1>
</body>
</html>

	<?php

		$mysqli = new mysqli("localhost", "root", "", "assessment");	
// ���������: localhost - ��� ��������� ���� ������; root - �����; "" - ������ (����� ���� ����� ������������ - ����� ����������� ����� �������); 
// assessment - �������� ���� ������
		$result_set = $mysqli->query("SELECT name, surname, email_st FROM students");	// ����� ���� �� ������� ���������
		echo '<table align = "center" border = "1">';
		while($row = $result_set->fetch_assoc()) {
			echo '<tr>';
			echo '<td>'.$row['name'].'</td>';
			echo '<td>'.$row['surname'].'</td>';
			echo '<td>'.$row['email_st'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
		$result_set->close();
		$mysqli->close();

		echo "<br>";

		function printTable($result_set) {	// ������� ������ ��������� �������, $rows - ������
			echo '<table align = "center" border = "1">';
			while($row = $result_set->fetch_assoc()) {
				echo '<tr>';

				foreach ($row as $item)
				{
					echo '<td>'.$item.'</td>';
				}
				echo '</tr>';
			}
			echo '</table>';
		}

		$mysqli1 = new mysqli("localhost", "root", "", "assessment");
		$result_set2 = $mysqli1->query("SELECT name, surname, email_st FROM students");	// ����� ������(������ ��� - �� ���) ���� �� ������� ���������
		
		printTable($result_set2);

		$result_set2->close();
		$mysqli1->close();





	?>
