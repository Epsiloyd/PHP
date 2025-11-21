<?php
//Conectar base de datos

$conexion = mysqli_connect("localhost","root","","phpmysql");

//Comprobar si la conexion es correcto

if(mysqli_connect_errno()){
    echo "La conexion a la base de datos MYSQL ha fallado".mysqli_connect_error();
} else {
    echo "Conexion realizada correctamente","</br>";
}

//Consulta para configurar la codificacion de caracteres
mysqli_query($conexion,"SET NAMES 'utf8'");

//consulta desde PHP
$query = mysqli_query($conexion,"SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($query)){
    //var_dump($nota);
    echo '<h2>'.$nota['titulo'].'</h2>';
    echo $nota['descripcion'],'<br/>';
}

//Insertar en la base de datos desde php
$sql = "INSERT INTO notas VALUES(null,'Nota desde PHP','Esto es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

echo "<hr>";
if($insert){
    echo "Datos insertados correctamente";
}else{
    echo "ERROR: ".mysqli_error($conexion);
}
?>