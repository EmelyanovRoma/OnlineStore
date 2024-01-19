<?php
require_once('data_base.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeat_pass = $_POST['repeat_password'];
$email = $_POST['email'];


if (empty($login) || empty($pass) || empty($repeat_pass) || empty($email)){
	echo "Заполните все поля!";
} else
{
	if($pass != $repeat_pass)
	{
		echo "Пароли не совпадают!";
	} else 
	{
		$sql = "INSERT INTO `users` (login, password, email) VALUES ('$login', '$pass', '$email')";
	}
	if ($connection -> query($sql) === TRUE)
	{
	 echo "Успешная регистрация!";
	} else 
	{
	 echo "Ошибка: " . $connection->error;
	}
}
?>