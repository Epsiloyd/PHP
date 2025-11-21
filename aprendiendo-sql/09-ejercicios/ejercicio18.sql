/* 
Listas los clientes que han hecho algun encargo del coche 'OROCH'
 */

SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id 
        IN(SELECT id FROM coches WHERE modelo LIKE '%Renault Orch%'));