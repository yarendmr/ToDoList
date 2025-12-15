<?php
require "db.php";
$id= $_POST["id"];

$sql= "
UPDATE tasks
SET completed= CASE
    WHEN completed = 1 THEN 0
    ELSE 1
END
WHERE id = ?
";

$params = array($id);
$stmt = sqlsrv_query($conn, $sql, $params);

if($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}
header("Location: index.php");
exit;
?>