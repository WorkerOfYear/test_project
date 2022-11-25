<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


// Создание таблицы
// $query = "CREATE TABLE cats (
//     id SMALLINT NOT NULL AUTO_INCREMENT,
//     family VARCHAR(32) NOT NULL,
//     name VARCHAR(32) NOT NULL,
//     age TINYINT NOT NULL,
//     PRIMARY KEY (id))";


// Удаление таблицы
// $query = "DROP TABLE cats";
// $result = $conn->query($query);
// if (!$result) die ("Сбой при доступе к базе данных: " .$conn->error);


// Добавление данных
// $query = "INSERT INTO cats VALUES(NULL, 'Lynx', 'Stumpy', 5)";
// $result = $conn->query($query);
// if (!$result) die ("Сбой при доступе к базе данных" .$conn->error);
// Сохранение ID 
// $insertID = $conn->insert_id;
// $query = "INSERT INTO owners VALUES($insertID, 'Ann', 'Smith')";
// $result = $conn->query($query);


// Извлечение данных
// $query = "SELECT * FROM cats";
// $result = $conn->query($query);
// if (!$result) die ("Сбой при доступе к базе данных: " .$conn->error);
// $rows = $result->num_rows;
// echo "<table><tr> <th>Id</th> <th>Family</th>
// <th>Name</th><th>Age</th> </tr>";
// for ($j = 0; $j < $rows; ++$j)
// {
//     $result->data_seek($j);
//     $row = $result->fetch_array(MYSQLI_NUM);
//     echo "<tr>";
//     for ($k = 0; $k < 4; ++$k) echo "<td>$row[$k]</td>";
//     echo "</tr>";
// }
// echo "</table>";


// Обновление данных
// $query = "UPDATE cats SET name='Charlie' WHERE name='Charly'";
// $result = $conn->query($query);
// if (!$result) die ("Сбой при доступе к базе данных: " .$conn->error);


// Удаление данных
// $query = "DELETE FROM cats WHERE name='Growler'";
// $result = $conn->query($query);
// if (!$result) die ("Сбой при доступе к базе данных: " .$conn->error);