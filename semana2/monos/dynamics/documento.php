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
                    <th> Libro: ";
            for ($i=1; $i<=10; $i++){
                $numeros = rand (48, 57);
                $mayuscula = rand (65, 90);
                $minuscula = rand (97, 122);
                $valor = rand (1, 3); //32, 48-57, 65-90, 97-122
                switch ($valor){
                    case 1:
                        echo chr ($numeros);
                        break;
                    case 2:
                        echo chr ($mayuscula);
                        break;
                    case 3:
                        echo chr ($minuscula);
                        break;
                }
            }
            echo
                "</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>";
                if ($buscador='normal')
                {
                    for ($i=1; $i<=10; $i++){
                        $espacio = 32;
                        $numeros = rand (48, 57);
                        $mayuscula = rand (65, 90);
                        $minuscula = rand (97, 122);
                        $ubicacion = rand (5, 10);
                        $valor = rand (1, 10);
                        switch ($valor){
                            case $ubicacion:
                                echo "<strong>".$escrito."</strong>";
                                $ubicacion = 0;
                                break;                            
                            case 1:
                                echo chr ($espacio);
                                break;
                            case 2:
                                echo chr ($numeros);
                                break;
                            case 3:
                                echo chr ($mayuscula);
                                break;
                            case 4:
                                echo chr ($minuscula);
                                break;
                            
                        }
                        }
                }
                    
                    echo "</td>
                        </tr>
                        </tbody>";
                    var_dump ($ubicacion);  


            
        
        /*
                        var_dump ($valor);
                        if ($valor == '1'){
                            echo chr ($espacio);
                        }
                        if ($valor == '2'){
                            echo chr ($numeros);
                        }
                        if ($valor == '3'){
                            echo chr ($mayuscula);
                        }
                        if ($valor == '4'){
                            echo chr ($minuscula);
                        }
                        /*if ($valor == $ubicacion){
                            echo "Hola";
                        }*/
                        ?>
