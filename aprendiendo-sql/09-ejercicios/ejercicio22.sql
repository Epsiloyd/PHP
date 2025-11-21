/* 
Mostrar listado de cliente (numero de cliente y nombre)
mostrar tambien el numero de vendedor y su nombre
 */

SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ' ,v.apellidos) 
FROM clientes c, vendedores v
WHERE c.vendedor_id = v.id;