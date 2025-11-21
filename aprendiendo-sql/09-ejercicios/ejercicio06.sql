/* 
Visualizar el nombre y los apellidos de los vendedores en una misma columna
y su fecha de registro y que dia de la semana en la que se registraron
 */

SELECT CONCAT(nombre, ' ' , apellidos) AS 'nombre y apellido',
    fecha,DAYNAME(fecha) FROM vendedores;