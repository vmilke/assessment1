<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Hello, world!</h1>

	<div id="caroulsel" class="carousel slide">
		<ol class="carousel-indicators"> <!-- индикатроры слайдов -->
			<li class="active" data-target="#carousel" data-slide-to="0"></li> <!-- этот индикатрор будет активным-->
			<li data-target="#carousel" data-slide-to="1"></li> <!-- №1 - это второй слайд -->
			<li data-target="#carousel" data-slide-to="2"></li> <!-- №2 - это  слайд -->
		</ol>
	
		<div id="caroulsel" class="carousel slide">
		<ol class="carousel-indicators"> <!-- индикатроры слайдов -->
			<li class="active" data-target="#carousel" data-slide-to="0"></li> <!-- этот индикатрор будет активным-->
			<li data-target="#carousel" data-slide-to="1"></li> <!-- №1 - это второй слайд -->
			<li data-target="#carousel" data-slide-to="2"></li> <!-- №2 - это  слайд -->
		</ol>
		
		<div class="carousel-inner"> <!-- здесь данные - слайды -->
			<div class="item" active>
				<img scr="http://www.mnbconsult.ru/upload/iblock/0b8/Anglia_Ruskin_5.jpg" alt="">
				<div class="carousel-caption"> <!-- описание слайда -->
					<h3>First photo</h3>
					<p>Description of the first photo</p>
				</div>
			</div>
			<div class="item" active>
				<img scr="http://www.mnbconsult.ru/upload/iblock/0b8/Anglia_Ruskin_5.jpg" alt="">
				<div class="carousel-caption"> <!-- описание слайда -->
					<h3>Second photo</h3>
					<p>Description of the second photo</p>
				</div>
			</div>
			<div class="item" active>
				<img scr="http://www.mnbconsult.ru/upload/iblock/0b8/Anglia_Ruskin_5.jpg" alt="">
				<div class="carousel-caption"> <!-- описание слайда -->
					<h3>Third photo</h3>
					<p>Description of the third photo</p>
				</div>
			</div>
		</div>
		
		<a href="#carousel" class="left carousel-control" data-slide="prev"> <!-- стрелка влево -->
			<span class="glyphicon glyphicon-сhevron-left"></span>
		</a>
		<a href="#carousel" class="right carousel-control" data-slide="next"> <!-- стрелка вправо -->
			<span class="glyphicon glyphicon-сhevron-right"></span>
		</a>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>