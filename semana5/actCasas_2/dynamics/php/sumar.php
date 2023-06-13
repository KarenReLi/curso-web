<?php
    $include = include ("./config.php");
    $con = connect();
    session_start (); 
    
    $casa = $_SESSION ["casa"];
    $puntos = $_SESSION["puntos"];

    if($include && $con)
    {
        $puntos++;
        $_SESSION["puntos"] =$puntos;
        echo $puntos; 

        $peticionAct = "UPDATE casas SET puntos='$puntos' WHERE nombre='$casa'";
        $query = mysqli_query ($con, $peticionAct);
    }
