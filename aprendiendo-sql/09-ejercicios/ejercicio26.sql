/* 
Sacar vendedores que tiene jefe y sacar el nombre del jefe
 */

SELECT v1.nombre AS 'Trabajador', v2.nombre AS'Jefe' FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id ; 