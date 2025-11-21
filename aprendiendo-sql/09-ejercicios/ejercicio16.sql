/* 
Obtener listado de clientes atendidos por el vendedor 'KIKO'
 */

SELECT * FROM clientes WHERE vendedor_id = 
(SELECT id FROM vendedores WHERE nombre = 'federico' AND apellidos = 'KIKO');