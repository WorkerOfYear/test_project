<?php 
session_start();

if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $forename = $_SESSION['forename'];
    $surname = $_SESSION['surname'];

    echo "С возвращением, $forename.<br>
        Ваше полное имя $forename $surname.<br>
        Ваше имя пользователя '$username'
        и ваш пароль '$password'.";
}
else echo "Пожалувста, для входа <a href='authentication2.php'>щелкните здесь</a>.";
