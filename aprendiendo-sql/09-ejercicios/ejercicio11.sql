/* 
Visualizar todos los cargos de los vendedores y el numero de los 
vendedores que hay en cada cargo
 */

SELECT cargo, COUNT(id) FROM vendedores GROUP BY cargo ORDER BY COUNT(ID) DESC;