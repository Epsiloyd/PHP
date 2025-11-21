/* 
Obtener los nombres y ciudades de los lcientes con encargos de 3 unidades
en adelante 
 */

SELECT nombre, ciudad FROM clientes WHERE id IN
    (SELECT cliente_id FROM encargos WHERE cantidad >= 3);