<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
<title>PHP и MySQL создание системв регистрации и авторизации пользователей</title>
<?php include("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
</head>
<body>
<div class="container mregister">
<div id="login">
 <h1>Регистрация</h1>
<form action="checkup.php" method="post">
	<!--**** checkup.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
	<p>
	    <label>Ваш логин:<br></label>
	    <input name="login" type="text" size="15" maxlength="15">
	    </p>
	<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
	<p>
	    <label>Ваш пароль:<br></label>
	    <input name="password" type="password" size="15" maxlength="15">
	    </p>
	<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
	<p>
	    <input type="submit" name="submit" value="Зарегистрироваться">
	  <p class="regtext">Уже зарегистрированы? <a href= "login.php">Введите имя пользователя</a>!</p>
 </form>
</div>
</div>
<footer>

</footer>

</body>
</html>
