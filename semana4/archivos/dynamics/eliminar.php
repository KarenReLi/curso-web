<!DOCTYPE html>
<html lang="en">
<?php
    session_start ();
    if (!isset($_SESSION["Nombre"]))
    {
        header ("location:../index.php");
    }
    if (!isset($_SESSION["Accion"]))
    {
        header ("location:./iniciosesion.php");
    }
    $nombrea = ( isset ($_POST["nombrea"]) && $_POST["nombrea"] != "" )? $_POST["nombrea"] : false;
    $carp = ( isset ($_POST["grupo1"]) && $_POST["grupo1"] != "" )? $_POST["grupo1"] : false;
    $_SESSION["Nombrear"] = $nombrea;
    echo 
        '<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<h2>'.$_SESSION["Nombre"].':</h2><br>';
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
    if($carp!=1)
    {
        if(file_exists($_SESSION["Nombrear"]))
        {
            unlink ($_SESSION["Nombrear"]);
            $registro1 = '<p class="texto">Se elimino el archivo '.$_SESSION["Nombrear"].' exitosamente</p>';
            echo $registro1.'<br>';
            $registro = "<p class='texto'>El usuario ".$_SESSION["Nombre"]." de la casa ".$_SESSION["Casa"].", realizo la accion de ".$_SESSION["Accion"].", el en archivo ".$_SESSION["Nombrear"]."</p>";
            $file= fopen('registros.txt', 'a+');
            fwrite ($file, $registro);
        }
        else
        {
            echo '<p class="texto">El archivo no existe, intenta con otro nombre</p>';
        } 
    }
    else
    {
        if(file_exists($_SESSION["Nombrear"]))
        {
            rmdir($_SESSION["Nombrear"]);
            $registro1 = '<p class="texto">Se elimino la carpeta '.$_SESSION["Nombrear"].'</p>';
            echo $registro1.'<br>';
            $registro = "<p class='texto'>El usuario ".$_SESSION["Nombre"]." de la casa ".$_SESSION["Casa"].", realizo la accion de ".$_SESSION["Accion"].", el en archivo ".$_SESSION["Nombrear"]."</p>";
            $file= fopen('registros.txt', 'a+');
            fwrite ($file, $registro);
        }
        else
        {
            echo '<p class="texto">No existe, intenta con otro nombre</p>';
        } 
    }
    echo 
        '<form action="./registros.php" method="post" target="_self" id="seleccion2">
            <button name="registros" type="submit">Registros</button>
        </form>';
    echo 
        '<form action="./cerrarsesion.php" method="post" target="_self" id="seleccion3">
            <button name="cerrar" type="submit">Cerrar sesion</button>
        </form>';
?>