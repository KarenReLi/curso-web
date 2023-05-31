<!DOCTYPE html>
<html lang="en">
    <?php
        $nombre = (isset($_POST['Nombre']) && $_POST["Nombre"]!= "")? $_POST['Nombre'] : NULL;
        $casa = (isset($_POST['casa']) && $_POST["casa"]!= "")? $_POST['casa'] : "Falta casa";
        session_start();
        if ($nombre!=NULL)
        {
            $_SESSION["Nombre"] = $nombre;
            $_SESSION["Casa"] = $casa; 
        }
        if (!isset($_SESSION["Nombre"]))
        {
            header ("location:../index.php");
        }
        else
        {  
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
                '<link rel="icon" href="../statics/documento.png" type="image/png">
                <title>Document</title>
                </head>
                <body>';
            echo
                '<div id="accion">
                <h2>Hola '.$_SESSION["Nombre"].", estas son las acciones:</h2>
                <br>";
            echo 
                '<form action="./acciones.php" method="post" target="_self" id="seleccion">
                    <fieldset>
                        <label>
                            <br>
                            <input type="radio" name="accion" value="Crear" required> 
                            Crear
                            <br>
                            <input type="radio" name="accion" value="Renombrar" required>
                            Renombrar
                            <br>
                            <input type="radio" name="accion" value="Eliminar" required>
                            Eliminar
                            <br>
                        </label>
                        <button id="enviar" type="submit">Seleccionar</button>
                    </fieldset>
                </form>
                <form action="./registros.php" method="post" target="_self" id="seleccion2">
                    <button name="registros" type="submit">Registros</button>
                </form>
                <form action="./cerrarsesion.php" method="post" target="_self" id="seleccion3">
                    <button name="cerrar" type="submit">Cerrar sesion</button>
                </form>';
        }
    ?>   
</body>
</html>