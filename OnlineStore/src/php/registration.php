<?php
require_once('data_base.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    $email = $_POST['email'];
    
    if (empty($password) || empty($repeat_password) || empty($email)){
        echo "Заполните все поля!";
    } else
    {
        if($password != $repeat_password)
        {
            echo "Пароли не совпадают!";
        } else 
        {
            $sql = "INSERT INTO `User` (password, email) VALUES ('$password', '$email')";
        }
        if ($connection -> query($sql) === TRUE)
        {
         echo "Успешная регистрация!";
        } else 
        {
         echo "Ошибка: " . $connection->error;
        }
    }
}
?>