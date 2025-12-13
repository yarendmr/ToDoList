<?php

$serverName = ".\\SQLEXPRESS";
$database = "TodoDB";

$connectionInfo = array(
    "Database" => $database,
    "CharacterSet" => "UTF-8",
    "TrustServerCertificate" => true

);

$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

echo "Veritabanına bağlanıldı.";

?>
