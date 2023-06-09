<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "karen";
    const DB = "mytuiter";
    function connect ()
    {
    $conexion = mysqli_connect (DBHOST, DBUSER, PASSWORD, DB);
    return $conexion;
    }

?> 