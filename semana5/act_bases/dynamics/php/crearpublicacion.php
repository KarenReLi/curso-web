<?php
    $include = include ("./config.php");
    $con = connect();
    
    if($include && $con)
    {
        $ID_USUARIO =1;
        $descripcion ="Descripcion nueva";
        $fecha = "01-06-2023";
        $hora = "10:00";
        $corazon = 25;
        $n_comentarios = 8;
        $n_retuits = 13;

        //$peticion = "INSERT INTO publicacion VALUES (0, 1, '$descripcion', '$fecha', '$hora', $corazon, $n_comentarios, $n_retuits)";
        //$query = mysqli_query ($con, $peticion);

        $sql ="SELECT * FROM publicacion";
        $query = mysqli_query ($con, $sql);
        var_dump ($query);
        echo "<br><br>";
        $datos = mysqli_fetch_assoc($query);
        var_dump ($datos);
        echo "<br><br>";
        
        while ($row = mysqli_fetch_assoc($query))
        {
            var_dump ($row);
            echo "<br><br>";
            var_dump ($row["n_comentarios"]);
            echo "<br><br>";
        }
        
    }

?>