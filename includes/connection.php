<?php
  $con = @new mysqli('localhost', 'root', '', 'userlistdb');     //файл коннекта к БД
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
?>
