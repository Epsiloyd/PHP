/* 
Sacar la media de sueldos entre todos los vendedores por grupo
 */
# Recordemos que AVG sirve para sacar una media, en este caso del sueldo #


SELECT CEIL(AVG(v.sueldo)) AS 'Media salarial', g.nombre,g.ciudad FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id;