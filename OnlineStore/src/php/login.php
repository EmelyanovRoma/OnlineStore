<?php
require_once('data_base.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        echo "Заполните все поля!";
    } else {
        $sql = "SELECT * FROM `User` WHERE email = '$email' AND password = '$password'";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Добро пожаловать, " . $row['email'] . "!";
            }
        } else {
            echo "Пользователя не существует!";
        }
    }
}
?>