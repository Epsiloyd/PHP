/*
 Sub consulta: 
-Son cusultas que se ejecutan dentro de otras.

-Consiste en utilizar los resultados de la subconsulta para
operar en la consulta principal.

-Jugando con las claves foranesas / ajenas como las FK_ALGO 
*/

# Sacar usuarios con entrada #
Select * from usuarios where id in (select usuario_id from entradas);

/*No tiene registro en la tabla*/
Select * from usuarios where id not in (select usuario_id from entradas);

# Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA #

INSERT INTO entradas VALUES(NULL,3,1,"GUIA DE GTA VICE CITY","GTA",CURDATE());
# Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA #

SELECT nombre,apellidos FROM usuarios WHERE id 
    IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

# Sacar todas las entradas de la categorioa accion utilizando su nombre #
SELECT titulo FROM entradas WHERE categoria_id
        IN (SELECT id FROM categorias WHERE nombre = 'Accion');

# Mostrar las categorias con mas de 3 o mas entradas #
SELECT nombre FROM categorias WHERE 
    id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);

# Mostrar los usuarios que crearon una entrada en un dia especifico #
SELECT * FROM usuarios WHERE id In 
    (SELECT usuario_id,titulo FROM entradas WHERE DAYOFWEEK(fecha)=3);

# Mostrar el nombre del usuario que tenga mas entradas #
SELECT nombre FROM usuarios WHERE id =
    (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id)DESC LIMIT 1);
# Mostrar las categorias sin entradas #
SELECT * FROM categorias WHERE id  
    NOT IN (SELECT categoria_id FROM entradas);