<!DOCTYPE html>
<html lang="en">
<?php
    $accion = (isset($_POST['accion']) && $_POST["accion"]!= "")? $_POST['accion'] : NULL;
    session_start ();    
    if (!isset($_SESSION["Nombre"]))
    {
        header ("location:../index.php");
    }
    if ($accion!=NULL)
    {
        $_SESSION["Accion"] = $accion;
    }
    if (!isset($_SESSION["Accion"]))
    {
        header ("location:./iniciosesion.php");
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
    if ($accion == "Crear")
    {
        echo
        "<div class='archcarp'>
        <h2>¿Archivo o carpeta?</h2>
        <form action='./crear.php' method='post' enctype='multipart/form-data' target='_self' >
        <input type='radio' id='arch' name='grupo1' value=0 required>
        <label  class='texto'>Archivo</label><br>
        <input type='radio' id='carp' name='grupo1' value=1 required>
        <label  class='texto'>Carpeta</label><br><br>
        <label  class='texto'>Nombre del archivo o carpeta<br></label>
        <input type='text' id='nombrea' name='nombrea' placeholder='Ej. hola.txt, carpetachida' required>
        <br><br>
        <button type='submit' id='boton' target='_blank'>Enviar</button>
        </form>
        </div>";
    }
    if ($accion == "Renombrar")
    {
        echo
        "<div class='archcarp'>
        <h2>¿Archivo o carpeta?</h2>
        <form action='./renombrar.php' method='post' enctype='multipart/form-data' target='_self'>
        <input type='radio' id='arch' name='grupo1' value=0 required>
        <label class='texto'>Archivo</label><br>
        <input type='radio' id='carp' name='grupo1' value=1 required>
        <label class='texto'>Carpeta</label><br><br>
        <label class='texto'>Nombre del archivo o carpeta<br></label>
        <input type='text' id='nombrea' name='nombrea' placeholder='Ej. hola.txt, carpetachida' required>
        <br><br>
        <label class='texto'>Nombre nuevo del archivo o carpeta<br></label>
        <input type='text' id='nombren' name='nombren' placeholder='Ej. hola.txt, carpetachida' required>
        <br><br>
        <button type='submit' id='boton' target='_blank'>Enviar</button>
        </form>
        </div>";
    }
    if ($accion == "Eliminar")
    {
        echo
        "<div class='archcarp'>
        <h2>¿Archivo o carpeta?</h2>
        <form action='./eliminar.php' method='post' enctype='multipart/form-data' target='_self'>
        <input type='radio' id='arch' name='grupo1' value=0 required>
        <label class='texto'>Archivo</label><br>
        <input type='radio' id='carp' name='grupo1' value=1 required>
        <label class='texto'>Carpeta</label><br><br>
        <label class='texto'>Nombre del archivo o carpeta<br></label>
        <input type='text' id='nombrea' name='nombrea' placeholder='Ej. hola.txt, carpetachida' required>
        <br><br>
        <button type='submit' id='boton' target='_blank'>Enviar</button>
        </form>
        </div>";
    }
?>