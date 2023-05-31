<?php
    session_start ();
    if (isset($_SESSION["Nombre"]))
    {
        echo "funcionaaaa";
        header ("location:./dynamics/iniciosesion.php");
    }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorador de Archivos</title>
    <link rel="stylesheet" href="./statics/styles/estilo.css">
    <link rel="icon" href="./statics/documento.png" type="image/png">
</head>
<body>
    
        
    
    
    <h1>Inicio de sesion</h1>
        <form action="./dynamics/iniciosesion.php" id="inciosesion" method="post" target="_self">
            <fieldset>
                <label>Nombre:<input type="text" name="Nombre" required></label>
                <br><br>
                <label for="casa">Casa:</label>
                <select id="casa" name="casa">
                    <option value="Halcones">Halcones</option>
                    <option value="Teporingos">Teporingos</option>
                    <option value="Ajolotes">Ajolotes</option>
                </select>
                <br><br>
                <button id="enviar" type="submit">Acceder</button>
            </fieldset>
        </form>


</body>
</html>