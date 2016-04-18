<!DOCTYPE html>
<html>
<head>
	<title>Page of Registration</title>
<!--			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />			<meta name="keywords" content="регистрация сайт myrusakov.ru, зарегистрироваться сайт myrusakov.ru" />
			<meta name="viewport" content="width=device-width" />
				<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
				<link type="text/css" rel="stylesheet" href="/styles/main.css" />
			<link type="text/css" rel="stylesheet" href="/styles/prettify.css" />
			<link type="text/css" rel="stylesheet" href="/styles/wbbtheme.css" />
				<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="/js/jquery.wysibb.min.js"></script>
			<script type="text/javascript" src="/js/functions.js"></script>
			<script type="text/javascript" src="/js/validator.js"></script>
			<script type="text/javascript" src="/js/sr.js"></script>
			<script type="text/javascript" src="/js/prettify.js"></script>
-->
</head>
<body>
	<div id="container">
		<header>
			<h2>Anglia Ruskin University</h2>
			<nav>
			<ul id="topmenu">
				<li>
					<a   href="/">Main</a>
				</li>
				<li>
					<a   href="/rusakov-mihail.html">About</a>
				</li>
			</ul>
			</nav>
		</header>

		<div id="auth">
			<table>
				<tr>
					<td>
						<form name="auth" action="/register.html" method="post">
							<div>
								<input type="text" name="login" placeholder="Login" />
								<input type="password" name="password" placeholder="Password" />
								<input type="submit" name="auth" value="Enter" />
							</div>
						</form>
					</td>
					
					<td>
						<img src="/images/bg_item_top.png" alt="" id="top_sep" />
					</td>
			
					<td>
						<img src="/images/icon_register.png" alt="" id="icon_register" />
					</td>
			
					<td>
						<a href="/register.html" id="link_register">Registration</a>
					</td>
			
					<td>
						<img src="/images/bg_item_top.png" alt="" />
					</td>
				</tr>
			</table>
		</div>
	</div>
		
	<div class="clear"></div>
		<h1>Registration</h1>
		<div class="form">
			<div id="register">
				<form name="register" action="/register.html" method="post" onsubmit="return checkForm(this)" >
				<div>
					<label for="name">Name:</label>
					<input id="name" type="text" name="name" value="" placeholder="" data-type="name" data-minlen="" data-maxlen="50" data-tminlen="" data-tmaxlen="The name is very long" data-tempty="You did not write your name" data-ttype="The name is incorrect" data-fequal="" data-tequal="" />
				</div>	
				<label for="name">Surname:</label>
				<input id="name" type="text" name="name" value="" placeholder="" data-type="name" data-minlen="" data-maxlen="50" data-tminlen="" data-tmaxlen="The surname is very long" data-tempty="You did not write your surname" data-ttype="The surname is incorrect" data-fequal="" data-tequal="" />
			</div>

		<div>
		<label for="login">Login:</label>
		<input id="login" type="text" name="login" value="" placeholder="" data-type="login" data-minlen="" data-maxlen="50" data-tminlen="" data-tmaxlen="The login is very long" data-tempty="You did not write your login" data-ttype="The login is incorrect" data-fequal="" data-tequal="" />
	</div>							

	<div>
		<label for="email">Email:</label>
		<input id="email" type="text" name="email" value="" placeholder="" data-type="email" data-minlen="" data-maxlen="50" data-tminlen="" data-tmaxlen="The E-mail is very long" data-tempty="You did not write your e-mail" data-ttype="The e-mail is incorrect" data-fequal="" data-tequal="" />
	</div>

	<div>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" data-type="" data-minlen="6" data-maxlen="50" data-tminlen="Пароль слишком короткий!" data-tmaxlen="The password is very long" data-tempty="You did not write your password" data-ttype="" data-fequal="password_conf" data-tequal="The passwords are not equal" />
	</div>

	<div>
		<label for="password_conf">Confirm the password:</label>
		<input type="password" name="password_conf" id="password_conf"  />
	</div>							
							
	<div class="center">
		<input type="submit" name="register" value="Registration"  />
	</div>

</body>
</html>