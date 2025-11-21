/* 
Mostrar los datos del vendedor con mas antiguedad en el concesionario
 */

SELECT* FROM vendedores ORDER BY fecha ASC LIMIT 1;

/*
Obtener los datos de los coches con mas unidades vendidas en los encargos
*/

SELECT * FROM coches WHERE id IN
    (SELECT coche_id FROM encargos WHERE cantidad IN 
        (SELECT MAX(cantidad) FROM encargos));