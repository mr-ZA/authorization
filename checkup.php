<?php
include("includes/connection.php");
include("includes/header.php");
    //if (isset($_POST['full_name'])) { $full_name = $_POST['full_name']; if ($full_name == '') { unset($full_name);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    //if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
		if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
		if (isset($_POST['password'])) { $password = $_POST['password']; if ($password == '') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
     exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
		//$full_name = stripslashes($full_name);
    //$full_name = htmlspecialchars($full_name);
		//$email = stripslashes($email);
    //$email = htmlspecialchars($email);
		$login = stripslashes($login);
    $login = htmlspecialchars($login);
 		$password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
		//$full_name = trim($full_name);
		//$email = trim($email);
		$login = trim($login);
    $password = trim($password);
 // подключаемся к базе
  //  $result = mysqli_query("SELECT id FROM usertbl WHERE login='$login'");
  //  $myrow = mysql_fetch_array($result);
  //  if (!empty($myrow['id'])) {
  //  exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
  //  }
 // если такого нет, то сохраняем данные

		$query = "INSERT INTO usertbl(login, password) VALUES('$login', '$password')";
    $result2 = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
    // Проверяем, есть ли ошибки
    if ($result2)
    {
      echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт.</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
?>
