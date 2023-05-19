    <head>
        <title>boletos</title>
        <link rel="icon" href="../statics/boleto2.png" type="image/png">
    </head>
    <body>
        <h1 align="center">Tus boletos :)</h1>
        <h2 align="center">Disfuta del concierto!</h2>
        <?php
            $nombre = (isset($_POST['Nombre']) && $_POST["Nombre"]!= "")? $_POST['Nombre'] : "Falta nombre";
            $apellido = (isset($_POST['Apellido']) && $_POST["Apellido"]!= "")? $_POST['Apellido'] : "Falta Apellido";
            $artista = (isset($_POST['Artista']) && $_POST["Artista"]!= "")? $_POST['Artista'] : "Falta Artista";
            $fecha = (isset($_POST['Fecha']) && $_POST["Fecha"]!= "")? $_POST['Fecha'] : "Falta Fecha";
            $email = (isset($_POST['email']) && $_POST["email"]!= "")? $_POST['email'] : "Falta email";
            $zona = (isset($_POST['Zona']) && $_POST["Zona"]!= "")? $_POST['Zona'] : "Falta Zona";
            $lugar = (isset($_POST['lugar']) && $_POST["lugar"]!= "")? $_POST['lugar'] : "Falta lugar";
            $check = (isset($_POST['check']) && $_POST["check"]!= "")? $_POST['check'] : "Faltan extras";
            $boletos = (isset($_POST['Boletos']) && $_POST["Boletos"]!= "")? $_POST['Boletos'] : "Faltan Boletos";
            for ($num=$boletos; $num>=1; $num--){
            echo "<table border='1' style='border-collapse:collapse;' align='center' cellpading='30px'>
            <thead>
            <tr >
                <th colspan=\"4\">Boleto para $artista</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td align=\"center\">$nombre $apellido</td>
                <td align=\"center\">Fecha: $fecha</td>
                <td rowspan= \"2\" >
                <ul>";
                    if ($check != "Faltan extras"){
                        echo "Extras:<br>";
                        foreach ($check as $valor){
                            echo "<li>$valor</li>";
                       }
                    }
                    else if ($check == "Faltan extras"){
                        echo "Sin extras";
                    } 
                echo "</ul>
                </td>
                <td rowspan= \"2\">";
                switch ($artista){
                    case "Kenia Os":
                        echo "<img src=\"../statics/keniaOs.png\" alt=\"Kenia Os\" width=\"300\" height=\"190\">";
                        break;
                    case "Bad Bunny":
                        echo "<img src=\"../statics/badbunny.png\" alt=\"Bad Bunny\" width=\"250\" height=\"250\">";
                        break;
                    case "Taylor Swift":
                        echo "<img src=\"../statics/taylorSwift.png\" alt=\"Taylor Swift\" width=\"300\" height=\"150\">";
                        break;
                    case "Peso Pluma":
                        echo "<img src=\"../statics/pesoPluma.png\" alt=\"Peso Pluma\" width=\"250\" height=\"150\">";
                        break;
                    case "The Weekend":
                        echo "<img src=\"../statics/theWeekend.png\" alt=\"The Weekend\" width=\"250\" height=\"140\">";
                        break;
                }             
                echo "</td>
            </tr>
            <tr>
                <td align=\"center\">";
                    switch ($lugar[0]){
                        case "Foro Sol":
                            echo "Foro Sol<br><img src=\"../statics/foroSol.png\" alt=\"Foro sol\" width=\"250\" height=\"120\">";
                            break;
                        case "Arena CDMX":
                            echo "Arena CDMX<br><img src=\"../statics/arenaCDMX.png\" alt=\"Arena CDMX\" width=\"250\" height=\"120\">";
                            break;
                        case "Auditorio Nacional":
                            echo "Auditorio Nacional<br><img src=\"../statics/auditorioNacional.png\" alt=\"Auditorio Nacional\" width=\"250\" height=\"120\">";
                            break;
                        case "Palacio de los deportes":
                            echo "Palacio de los deportes<br><img src=\"../statics/palacioDeLosDeportes.png\" alt=\"Palacio de los Deportes\" width=\"250\" height=\"120\">";
                            break;
                        case "Teatro Metropolitan":
                            echo "Teatro Metropolitan<br><img src=\"../statics/teatroMetropolitan.png\" alt=\"Teatro Metropolitan\" width=\"250\" height=\"120\">";
                            break;
                    }               
                echo "</td>
                <td align=\"center\">$zona<br><img src=\"../statics/vista.png\" alt=\"Lugar\" width=\"250\" height=\"150\"></td>        
            </tr>
            </tbody>
            </table>";
            echo "<br><br><br>";
            }
        ?>    
