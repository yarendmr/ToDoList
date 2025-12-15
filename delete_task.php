<?php
require "db.php";

$id = $_POST["id"];
$sql= "DELETE FROM tasks WHERE id = ?";
$params= array($id);

$stmt= sqlsrv_query($conn, $sql, $params);
if($stmt=== false) {
    die(print_r(sqlsrv_errors(), true));
}

header("Location: index.php");
exit;
?>