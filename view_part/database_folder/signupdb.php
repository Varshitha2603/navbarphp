<?php
    $servername = "localhost";
    $username = "dckap";
    $password = "Dckap2023Ecommerce";
    $dbname = "blogdb";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
    if ($mysqli->connect_errno){
        die("Connection Error: " . $mysqli->connect_error);
    }
    return $mysqli;