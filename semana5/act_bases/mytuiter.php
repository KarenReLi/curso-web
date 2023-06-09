<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuiter</title>
    <link rel="icon" href="./statics/media/img/resources/tuiter.png" type="image/png">
    <link rel="stylesheet" href="./statics/styles/index.css">
</head>
<body>
    <nav id="">
        <h3>Inicio</h1>
        <div class="contenedor-navbar"></div>
    </nav>
    <div class="formulario">
        <form action="./dynamics/php/crearPublicación.php" method="post">
            <fieldset>
                <h4><label for="">¡Haz tu tuit personalizado!</label></h4>
                <h2><label for="">¿Qué estas pensando?</label></h2>
                <textarea name="descripcion" id="textaDescripcion" cols="30" rows="3" placeholder="Ingresa tu texto" required></textarea>

                <h3><label for="" id="labelMeGusta"> <span>Ingresa el número de&nbsp;</span><span class="spanRojo">Me gusta</span></label></h3>
                <input name="n_corazones" id="iptLikes"  type="number" placeholder="¿Cuántos likes quieres? :O" required>

                <label for="">Ingresa el numero de comentarios</label>
                <input name="n_comentarios" type="number" placeholder="¿Cuánto chisme quieres?" required>

                <label for="">Ingresa el numero de retuits</label>
                <input name="n_retuits" type="number" placeholder="¿Cuánta funa quieres?" required>

                <div class="cont-btns-form">
                    <button id="btnEnviar" class="btns" type="submit">Enviar</button>
                    <button class="btns" type="reset">Reset</button>
                </div>

            </fieldset>
        </form>
        <div class="contCenter">
            <a href="./misPublicaciones.php">
                <button class="btns" >Ver publicaciones anteriores</button>
            </a>
        </div>

    </div> 

    <?php

    ?>
</body>
</html>