<?php 
require "db.php";
$taskText= $_POST["task_text"];
$sql = "INSERT INTO tasks (task_text, completed) VALUES (?,?)";
$params = array($taskText, 0);
$stmt= sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}
header("Location: index.php");
exit;
