<?php

    session_start();
    session_unset();
    session_destroy();
    header("location: ../authantication/auth.php");
    exit();

?>