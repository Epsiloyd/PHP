/* 
Obteber un listado con los encargos realizados por el cliente 'GO'
 */

SELECT e.id AS 'Numero de encargo', cantidad,c.nombre,co.modelo,e.fecha FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
 WHERE e.cliente_id IN
(SELECT id FROM clientes WHERE nombre = 'GOCONSULTING');