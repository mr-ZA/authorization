<!DOCTYPE html>
	<html lang="en">
	<head>
<meta charset="utf-8">
<title>PHP и MySQL создание системы регистрации и авторизации пользователей</title>
<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
</head>
<body>
<div class="container mlogin">
<div id="login">
<h1>Вход</h1>
<form action="" id="loginform" method="post" name="loginform">
<p><label for="user_login">Имя пользователя<br>
<input class="input" id="username" name="username"size="20"
type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>
 <input class="input" id="password" name="password"size="20"
  type="password" value=""></label></p>
	<p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
	<p class="regtext">Еще не зарегистрированы?<br><a href= "reg.php">Регистрация</a>!</p>
   </form>
 </div>
  </div>
<footer>
	FOOTER HERE..
</footer>
</body>
</html>
