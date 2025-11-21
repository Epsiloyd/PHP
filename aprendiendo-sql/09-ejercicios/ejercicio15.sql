/* 
Mostrar los lcientes que mas pedidos an realizado y mostrar
cuantos hicieron
 */

SELECT c.nombre, COUNT(c.id) FROM encargos  e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;