/* 
visualizar los paellidos de los vendedores su fecha y numero de grupo 
ordenado por fecha decendente y mostrar los 4 ultimos
 */

SELECT apellidos,fecha,id FROM vendedores ORDER BY fecha DESC LIMIT 4;