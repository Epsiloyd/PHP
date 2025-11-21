<!doctype html>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla - Master en PHp</title>
    </head>
    <body>
        <h1>Master en PHP - Felipe Torres</h1>
        <!--con <?=""?> puedes imprimir por pantalla directamente-->
        <?="Bienvenido al curso mas grande de PHP"?>
        <?php
            echo "<h3>Lista de video juegos:</h3>";
            echo "<ul>"
                . "<li>GTA</li>"
                . "<li>FIFA</li>"
                . "<li>SMITE</li>"
                . "</ul";
            //Se utiliza el . para concatenar en PHP
            echo '<p>Esta es toda '.' - '.' lista de video juegos</p>';
            
            /*esto es 
             * un comentario 
             * muiltilinea
             */
            
            




        ?>
    </body>