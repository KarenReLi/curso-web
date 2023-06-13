<!DOCTYPE html>
<html lang="en">
<?php
    $include = include ("./config.php");
    $con = connect();
    session_start ();
    if($include && $con)
    {
        //En estas dos variables se supone se guardan los valores que se reciben del inicio de sesion, los valores establecidos aqui solo son para pruebas, se supone dependen del usuario y su casa

        $nombre="Ara"; 
        $casa= "1";
        echo 
        '<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        //if ($_SESSION["Casa"]=="Halcones")
        //{  
            //echo "<link rel='stylesheet' href='../../statics/styles/estilohalcones.css'>";
        //}
        //if ($_SESSION["Casa"]=="Teporingos")
        //{  
            //echo "<link rel='stylesheet' href='../../statics/styles/estiloteporingos.css'>";
        //}
        //if ($_SESSION["Casa"]=="Ajolotes")
        //{  
            echo "<link rel='stylesheet' href='../../statics/styles/estiloajolotes.css'>";
        //}
        echo "<title>Pagina Principal</title>
        <link rel='icon' href='../../statics/img/casa.png' type='image/png'>
        </head>
        <body>";
        $peticion = "SELECT ID_CASAS, nombre FROM usuarios WHERE nombre='$nombre'";
        $query = mysqli_query ($con, $peticion);
        $arreglo = mysqli_fetch_array ($query);
        $casa = $arreglo ['ID_CASAS'];
        $nombreUser = $arreglo ['nombre'];
        
        $peticionCasa = "SELECT nombre, puntos FROM casas WHERE ID_CASAS='$casa'";
        $query = mysqli_query ($con, $peticionCasa);
        $arreglo = mysqli_fetch_array ($query);
        $puntos = $arreglo['puntos'];
        $nombreCasa = $arreglo ['nombre'];
        
        $_SESSION ["puntos"] = $puntos;
        $_SESSION ["casa"] = $nombreCasa;
        
        echo "<h1>Pagina principal</h1>";
        echo "<div id='content'> <h2>Hola ".$nombre."</h2> <br>";
        echo "<h3> Tu casa es: ".$nombreCasa."<br><br>";
        echo 
        "<label><input type='button' id='sumar' class='btn' value='+'></label>
        <label><input type='button' id='restar' class='btn' value='-'></label>";
        echo "<div id='puntosd'><h3 class= text>Ustedes tienen un total de:".$puntos."</h3></div>";
        if ($nombreCasa=="halcones")
        {  
            echo "<img src='../../statics/img/halcon.png' alt='halcones' width='150' height='30'>";
        }
        if ($nombreCasa=="teporingos")
        {  
            echo "<img src='../../statics/img/teporingo.png' alt='teporingos' width='170' height='170'>";
        }
        if ($nombreCasa=="ajolotes")
        {  
            echo "<img src='../../statics/img/ajolote.png' alt='ajolotes' width='170' height='170'>";
        }
        echo "</div>";   
        echo
        "<script src='../js/index.js'></script>
        </body>
        </html>";
    }

?>