<?php
require_once 'login.php';

$connection = new mysqli($hn, $un, $pw, $db);
if($connection->connect_error) die($connection->connect_error);

if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
    $un_temp = mysql_entities_fix_string($connection,$_SERVER['PHP_AUTH_USER']);
    $pw_temp = mysql_entities_fix_string($connection,$_SERVER['PHP_AUTH_PW']);

    $query = "SELECT * FROM users WHERE username='$un_temp'";
    $result = $connection->query($query);
    if(!$result) die($connection->error);
    elseif($result->num_rows)
    {
        $row = $result->fetch_array(MYSQLI_NUM);
        $result->close();
        $salt1 = "qm&h*";
        $salt2 = "pg!@";
        $token = hash('ripemd128', "$salt1$pw_temp$salt2");

        if($token == $row[3]) echo "$row[0] $row[1] :
            Привет, $row[0], теперь вы зарегестрированны под именем '$row[2]'";
        else die("Неверная комбинация имя пользователя - пароль");
    }
    else die("Неверная комбинация имя пользователя - пароль");
}
else
{
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HTTP/1.0 401 Unauthorized');
    die("пожалуйста, введите имя пользователя и пароль");
}

$connection->close();

function mysql_entities_fix_string($connection, $string)
{
    return mysql_fix_string($connection, $string);
}
function mysql_fix_string($connection, $string)
{
    $string = stripslashes($string);
    return $connection->real_escape_string($string);
}