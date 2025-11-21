/* 
OPERADORES DE COMPARACION;
IGUAL           = 
DISTINTO        !=
MENOR QUE       <
MAYOR QUE       >
MENOR O IGUAL   <=
MAYOR O IGUAL   >=
ENTRE           between A and B
Es nulo         null
No es nulo      not null
Como            like
No es como      not like
 */

/*
Operadores Logicos:
O               OR
Y               AND
NO              NOT
*/

/*
Comodines:
Cualquier canitidad de caracteres: %
Un caracter desconocido:           _
*/

/*
Clausulas:
Ordenar por     ORDER BY 
Limitar         LIMIT    
*/

# Consulta con una condicion #
SELECT * FROM usuarios WHERE email = 'admin@admin.com';

# Ejemplos #

# 1. Mostrar todos los usuarios registrados en 2025
SELECT nombre,apellidos FROM usuarios WHERE YEAR (fecha) = 2025;

# 2. Mostrar todos los usuarios que no se registrados en 2025
SELECT nombre,apellidos FROM usuarios WHERE YEAR (fecha) != 2025 OR ISNULL(fecha);

# 3.Mostrar Mostrar el email de los usuarios cuyo apellido contengoa la letra T
#  y que su contraseña sea 1234

# 4. Sacar todos los registro de la tabla de usuario siempr ey cuando el año sea par eh impar 
SELECT * FROM usuarios WHERE (YEAR(fecha) %2 = 0);
SELECT * FROM usuarios WHERE (YEAR(fecha) %2 != 0);

# 5. Sacar todos los registros de la tabla de usuario cuyo nombre tenga mas de 5 letras
# y que se hayan registrado antes desl 2019 , y motrar el nombre en mayusculas

SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2025;