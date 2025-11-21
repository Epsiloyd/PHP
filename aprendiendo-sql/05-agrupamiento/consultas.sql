/* 
Consultas de agrupamiento
 */

SELECT COUNT(titulo)AS'Numero',CATEGORIA_ID FROM entradas GROUP BY categoria_id ;

/* 
Consultas de agrupamiento con CONDICIONES
 */

SELECT COUNT(titulo)AS'Numero',CATEGORIA_ID 
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >=4 ;

/* 
FUNCIONES DE AGRUPAMIENTO:
AVG     nos permite sacar la media
COUNT   nos permite contar el numero de elementos
MAX     nos permite devolver el valor maximo del grupo
MIN     nos permite sar el valor minimo del grupo
SUM     nos permite sumar todo el contenido del grupo
 */

SELECT AVG(id) AS'MEDIA DE ENTRADAS' FROM entradas;
SELECT MAX(id)AS'Usuario maximo id', titulo FROM entradas;
SELECT SUM(id)AS'Suma id', titulo FROM entradas;