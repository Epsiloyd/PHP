<?php

/* 
 Cookie:
 * Es un fichero que se almacena en el ordenador del usuario que visita la web
 con el fin de recodar datos o rastrear cierta infomacion o compartamiento 
 de el mismo en la web .
 */

//Crear una cookie
//setcookie("nombre","valor que solo puede ser texto",caducidad,ruta,dominio);

setcookie("micookie", "valor de mi galleta");

//Cookie con expiracion
setcookie("unyear", "valor de mi cookie de 365 dias",time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las galletas</a>