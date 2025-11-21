<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario en HTML</h1>
        <form action = "" method="POST" entype="multipat/form-data">
            
            <label for="nombre">Nombre: </label>
            <p><input type="text" name="nombre"autofocus="autofocus" 
                      maxlength="20" pattern="[A-Z ]+" required="required" placeholder="Introduce el dato.." /></p>
            
            <label for="apellido">Apellido: </label> 
            <p><input type="text" name="apellido" autofocus="autofocus" 
                      maxlength="20" pattern="[A-Z ]+" required="required" placeholder="Introduce el dato.." /></p>
            
            <label for="boton">boton</label>
            <p><input type="button" name="boton"></p>
            
             <label for="sexo">Sexo</label>
            <p>
            Hombre:   <input type="checkbox" name="sexo" value="Hombre" required="required"/>
            Mujer:   <input type="checkbox" name="sexo" value="Mujer" required="required"/> 
            </p>
            
            <label for="color">Color</label>
            <p><input type="color" name="color"></p>
            
            <label for="fecha">Fecha</label>
            <p><input type="date" name="fecha"></p>
            
            <label for="correo">Email</label>
            <p><input type="email" name="correo"></p>
            
            <label for="archivo">Archivo</label>
            <p><input type="file" name="archivo" multiple="multiple"></p>
            
            <label for="numero">Numero</label>
            <p><input type="number" name="numero"></p>
            
            <label for="pass">Contraseña</label>
            <p><input type="password" name="pass"></p>
            
            <label for="contienete">Continente</label>
            <p>
            Asiatico<input type="radio" name="continete" value="Asia" >
            Europeo<input type="radio" name="continete" value="Europeo" >
            Africano<input type="radio" name="continete" value="Africano" >
            Americano<input type="radio" name="continete" value="Americano" >
            Oceania<input type="radio" name="continete" value="Oceanico" ></p>
            
              <label for="web">Web</label>
            <p><input type="URL" name="web"></p>
            
            <!-- Con textarea podemos incluir un cuadro de texto mas grande -->
            <textarea placeholder="Describete"></textarea></br>
            Peliculas:
            <select name="Peliculas">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="El ow yeah">El ow yeah</option>
            </select><br>
            
            <label for="desabilidato">Desabilitado</label>
            <p><input type="text" name="desabilitado" disabled="disabled" placeholder="Desabilitado" ></p>
            
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
