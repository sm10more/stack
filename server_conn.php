<?php
ini_set("max_execution_time", 90);
$serverName = "DESKTOP-RMID3FD\SQLEXPRESS";  
$connectionInfo = array( "Database"=>"StackOverflow2010");  
  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if( $conn === false )  
{  
     echo "Unable to connect.</br>";  
     die( print_r( sqlsrv_errors(), true));  
}
?>