<head>
        <title>boletos</title>
        <link rel="icon" href="../statics/documento.png" type="image/png">
    </head>
    <body>
    <?php
        $escrito = (isset($_POST['texto']) && $_POST["texto"]!= "")? $_POST['texto'] : "Falta esribir el texto";
        $buscador = (isset($_POST['tipobuscador']) && $_POST["tipobuscador"]!= "")? $_POST['tipobuscador'] : "Falta especificar tipo de buscador";
        $zona = (isset($_POST['zona']) && $_POST["zona"]!= "")? $_POST['zona'] : "Falta especifica zona horaria";
        echo 
            "<table border='1' style='border-collapse:collapse;' align='center' cellpading='30px'>
            <thead>
            <tr>
            <th> <br> Libro: ";
            for ($i=1; $i<=10; $i++){
                $numeros = rand (48, 57);
                $mayuscula = rand (65, 90);
                $minuscula = rand (97, 122);
                $valor = rand (1, 3); 
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
            echo "<br><br>";
            echo
                "</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>";
                $conteo = str_word_count($escrito, 0);
                $num = 0;
                $menor=0;
                $verificador = TRUE;
                $palabras = explode (" ", $escrito);
                if ($buscador=='palabrass'){
                    
                    shuffle ($palabras);
                } 
                for ($menor=1; $menor<=$conteo; $menor++) //cambiar para frase completa
                {
                    $aleatorio= rand(0, $conteo-1);
                    $repeticiona = rand(200, 800);
                    for ($repeticion=1; $repeticion<=$repeticiona; $repeticion++){
                        $espacios=32;
                        $numeros = rand (48, 57);
                        $mayuscula = rand (65, 90);
                        $minuscula = rand (97, 122);
                        $valor = rand (1, 4); 
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
                            case 4:
                                echo chr ($espacios);
                                break;
                        }
                    }         
                    if ($buscador=='normal' && $verificador==TRUE){
                        echo "<strong> $escrito </strong>";  //fase completa
                        $verificador = FALSE;
                    }
                    if ($buscador=='palabras'){
                        echo "<strong> $palabras[$num] </strong>";
                        $num++;
                    }
                    if ($buscador=='orden' && $verificador==TRUE){
                        $palabras = explode (" ", $escrito);
                        shuffle ($palabras);
                        $orden = implode (" ", $palabras);
                        echo "<strong> $orden </strong>"; //fase palabra
                        $verificador = FALSE;
                    }            
                }
            echo
            "</td>
            </tr>
            </tbody>
            </table>
            <br>";
            $fecha=date("d-m-y");
            $tiempof= mktime(12, 30, 30, 7, 25, 2015 );
            $creacion= date("d-m-y", $tiempof);
            date_default_timezone_set($zona);
            $zonahoraria= date_default_timezone_get();
            echo "La consulta de este libro fue desde ".$zonahoraria." el ".$fecha." ";
            echo "<br>Documento creado el".$creacion."";            
        ?>
        </body>