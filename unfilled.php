<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($name)) {
            echo "<h3>Name is empty</h3>";
        }   
        if (empty($body)) {
            echo "<h3>Body is empty</h3>";
        }
        else{
    echo "<h3>{$name}, your post was {$response}</h3>";
        } 
    }
    ?>