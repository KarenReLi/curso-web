<!DOCTYPE html>
<html lang="en">
<?php
    session_start ();
    if (!isset($_SESSION["Nombre"]))
    {
        header ("location:../index.php");
    }
    echo 
        '<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
    if ($_SESSION["Casa"]=="Halcones")
    {  
        echo "<link rel='stylesheet' href='../statics/styles/estiloh.css'>";
    }
    if ($_SESSION["Casa"]=="Teporingos")
    {  
        echo "<link rel='stylesheet' href='../statics/styles/estilot.css'>";
    }
    if ($_SESSION["Casa"]=="Ajolotes")
    {  
        echo "<link rel='stylesheet' href='../statics/styles/estiloa.css'>";
    }
    echo 
        '<title>Document</title>
        </head>
        <body>';
    echo "<h2>Los registros son los siguientes</h2>";  
    readfile ('registros.txt');
    echo '<form action="./cerrarsesion.php" method="post" target="_self" id="seleccion3">
    <button name="cerrar" type="submit">Cerrar sesion</button>';
    ?>