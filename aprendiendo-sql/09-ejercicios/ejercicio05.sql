/* 
Mostrar todos lo vendedores con su nombre y el numero de dias que llevan en la empresa
 */

SELECT nombre, DATEDIFF(CURDATE(),fecha) AS 'DIAS' FROM vendedores;