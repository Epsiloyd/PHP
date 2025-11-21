<?php

/* 
Ejercicio 5:
 *Crear un array con el contenido de la tabla:
 * Accion  Aventura   Deporte
 * GTA     ASSASSINS  FIFA 2023
 * COD     CRASH      PES 2023
 * PUG     Prince of  MOTONETAS
 *         persia
 * 
 * Cada columna debe ir en un fichero  separado (includes).
 */
$tabla  = ["Accion" =>["GTA6","COD","PUG"],
           "Aventura" =>["Assassins creed","Crash 3logy","Prince of persia"],
           "Deporte" =>["FIFA","PES","MOTONETAS"]];
$categorias = array_keys($tabla);
?>

<table border = "1">
  <?php    require_once 'ejercicio 5/encabezado.php';?>
  <?php require_once 'ejercicio 5/primera.php'; ?>
  <?php require_once 'ejercicio 5/segunda.php';?>
  <?php require_once 'ejercicio 5/tercera.php';?>
</table>

