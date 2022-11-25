<?php
$link = mysqli_connect($hn, $un, $pw, $db);
if (mysqli_connect_errno()) die(mysqli_connect_error());

$result = mysqli_query($link, "SELECT * FROM classics");

$rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result, MYSQLI_NUM);
