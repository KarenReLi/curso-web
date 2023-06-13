<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = ""; 
    const DB = "Act_casas"; //CAMBIAR LA PRIMERA A POR MAYUSCULA
    function connect ()
    {
    $conexion = mysqli_connect (DBHOST, DBUSER, PASSWORD, DB);
    return $conexion;
    }
   
?> 