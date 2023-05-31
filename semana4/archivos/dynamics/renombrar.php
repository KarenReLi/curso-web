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
    $nombrea = (isset($_POST['nombrea']) && $_POST["nombrea"]!= "")? $_POST['nombrea'] : "Falta nombre del archivo";
    $nombren = (isset($_POST['nombren']) && $_POST["nombren"]!= "")? $_POST['nombren'] : "Falta nuevo nombre";
    $docu = (isset($_POST['grupo1']) && $_POST["grupo1"]!= "")? $_POST['grupo1'] : "Falta escoger entre archivo o carpetas";
    $_SESSION["Nombrear"] = $nombrea;
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
    echo '<h2>'.$_SESSION["Nombre"].':</h2><br>';
    if ($docu=='0')
    {
        if (file_exists($_SESSION["Nombrear"]))
        {
            $nombre = pathinfo($_SESSION["Nombrear"], PATHINFO_FILENAME);
            $ext = pathinfo($_SESSION["Nombrear"], PATHINFO_EXTENSION);
            $nombrenue = pathinfo($nombren, PATHINFO_FILENAME);
            $extnue = pathinfo($nombren, PATHINFO_EXTENSION);
            rename ("$nombre.$ext", "./$nombrenue.$extnue");
            echo "<p class='texto'>El archivo se renombro correctamente a ".$nombrenue.".".$extnue."</p>";
            $registro = "<p class='texto'>El usuario ".$_SESSION["Nombre"]." de la casa ".$_SESSION["Casa"].", realizo la accion de ".$_SESSION["Accion"].", el en archivo ".$_SESSION["Nombrear"]." a ".$nombren."</p>";
            $file= fopen('registros.txt', 'a+');
            fwrite ($file, $registro);
        }
        else 
        {
            echo "<p class='texto'>No se encontro el archivo</p>";
        }
    }
    else
    {
        if (is_dir($_SESSION["Nombrear"]))
        {
            $nombre = pathinfo($_SESSION["Nombrear"], PATHINFO_FILENAME);
            $nombrenue = pathinfo($nombren, PATHINFO_FILENAME);
            rename ("$nombre", "./$nombrenue");
            echo "<p class='texto'>El archivo se renombro correctamente a ".$nombrenue."</p>";
            $registro = "<p class='texto'>El usuario ".$_SESSION["Nombre"]." de la casa ".$_SESSION["Casa"].", realizo la accion de ".$_SESSION["Accion"].", el en archivo ".$_SESSION["Nombrear"]." a ".$nombren."</p>";
            $file= fopen('registros.txt', 'a+');
            fwrite ($file, $registro);
        }
        else 
        {
            echo "<p class='texto'>No se encontro la carpeta</p>";
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