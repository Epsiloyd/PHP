/* 
Viosualizar los nombre de los clienteds y la cantidad de encargos realizados 
incluiyendo los que no hayan realizado encargos
 */

INSERT INTO clientes VALUES(NULL, 1, 'Tineda los preguntones', 'MICHOACAN', 0 , CURDATE());

SELECT c.nombre, COUNT(e.id) AS 'Vehiculos'FROM clientes c
 LEFT JOIN encargos e ON c.id = e.cliente_id
GROUP BY 1;