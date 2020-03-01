<?php
parse_str($_SERVER['QUERY_STRING']);
$name = $_POST['name'];
$asql = "SELECT Id
FROM Users
WHERE DisplayName = '$name';";
$getId = sqlsrv_query($conn, $asql);
$row = sqlsrv_fetch_array($getId, SQLSRV_FETCH_ASSOC);
$userId = $row['Id'];
?>