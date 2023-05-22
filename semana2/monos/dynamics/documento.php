<head>
        <title>boletos</title>
        <link rel="icon" href="../statics/documento.png" type="image/png">
    </head>
    <body>
        <?php
            $escrito = (isset($_POST['texto']) && $_POST["texto"]!= "")? $_POST['texto'] : "Falta esribir el texto";
            $buscador = (isset($_POST['tipobuscador']) && $_POST["tipobuscador"]!= "")? $_POST['tipobuscador'] : "Falta especificar tipo de buscador";
            $zona = (isset($_POST['zona']) && $_POST["zona"]!= "")? $_POST['zona'] : "Falta especifica zona horaria";
            /*
            var_dump ($escrito);
            echo "<br>";
            var_dump ($buscador);
            echo "<br>";
            var_dump ($zona);
            echo "<br>";
            */
            echo 
                "<table border='1' style='border-collapse:collapse;' align='center' cellpading='30px'>
                <thead>
                <tr >
                    <th> Libro numero: ";
            $num = rand ();
        
            
        ?>