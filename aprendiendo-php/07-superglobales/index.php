<?php

//Variables super globales

//Variables de servidor
echo '<h1>';
echo $_SERVER['SERVER_ADDR'];
echo '</h1>';
//En este caso como tengo mi ip es el nombre que mostrara
echo '<h1>';
echo $_SERVER['SERVER_NAME'];
echo '</h1>';
//Esta opcion me mustra el software que usal el servidor incluso mi sistema operatico y mi version de php
echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '</h1>';
//Nos puestra informacion del navegador 
echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '</h1>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR'];
echo '</h1>';

?>

