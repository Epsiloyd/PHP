<!doctype html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validacion de formularios</title>
    </head>
    <body>
        <h1>Validar formulario en PHP</h1>
        <?php
            if(isset($_POST['error'])){
                $error = $_POST['error'];
                
                if($error == 'faltan_valores'){
                    echo '<strong style ="color:red">Introduce todos los datos</strong>';
                }
                if($error == 'nombre'){
                    echo '<strong style ="color:red">Introduce el nombre/s</strong>';
                }    
                if($error == 'apellidos'){
                    echo '<strong style ="color:red">Introduce tus apellidos </strong>';
                }    
                if($error == 'email'){
                    echo '<strong style ="color:red">Introduce tu email</strong>';
                }    
                if($error == 'password'){
                    echo '<strong style ="color:red">Introduce tu contraseña</strong>';
                    
                }
            }
        ?>
        <form method="POST" action ="procesar_formulario.php">
            <p><label for ="nombre">Nombre</label></p>
            <p><input type="text" name="nombre" ></p>
            
            <p><label for ="apellidos">Apellidos</label></p>
            <p><input type="text" name="apellidos"></p>
            
            <p><label for ="edad">Edad</label></p>
            <p><input type="number" name="edad"></p>
            
            <p><label for ="email">Email</label></p>
            <p><input type="email" name="email"></p>
            
            <p><label for ="pass">Contraseña</label></p>
            <p><input type="password" name="pass"></p>
            
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
