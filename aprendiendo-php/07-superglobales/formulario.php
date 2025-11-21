<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulario PHP</title>
    </head>
    <body><!--Esto es por GET
        <h1>Formulario en PHP</h1>
        <form method="GET" action="recibir.php">
            <p>
            <label for ="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            </p>
            
            <p>
            <label for ="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
            </p>
            
            <p>
                <label for="trabajo">Trabajo</label>    
                <input type="text" name="trabajo"/>
            </p>
            
            <p>
            <input type="submit" value="Enviar datos"/>
            </p>
        </form>--> <!--Esto es por POST-->
         <h1>Formulario en PHP</h1>
        <form method="POST" action="recibir.php">
            <p>
            <label for ="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            </p>
            
            <p>
            <label for ="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
            </p>
            
            <p>
                <label for="trabajo">Trabajo</label>    
                <input type="text" name="trabajo"/>
            </p>
            
            <p>
            <input type="submit" value="Enviar datos"/>
            </p>
        </form>
    </body>