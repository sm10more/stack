<?php
if ($getResults= sqlsrv_query($conn, $tsql)){
    $response = "published";
}
else{
    $response = "unpublished";
}
?>