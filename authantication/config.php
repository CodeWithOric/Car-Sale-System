<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $datebase = "evokedrive";

    $conn = new mysqli($host, $user, $password, $datebase);

    if ($conn -> connect_error) {
        die("Connection Failed: ". $conn->connect_error);
    }

?>