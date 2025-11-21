/* 
Mostrar todo los registros / FILAS de una tabla 
 */

SELECT email,nombre,apellidos FROM usuarios;

# Mostrar todo los campos #

SELECT * FROM usuarios;

# Operadores aritmeticos / AS  e suna palabra recerbada como un alias#

SELECT email,(7+7) AS 'OPERACION' FROM usuarios;

# Funciones matematicas #
# Valor absoluto #
SELECT ABS(7) AS 'OPERACION' FROM usuarios;
# Redondeo a la alza#
SELECT CEIL(7.34) AS 'OPERACION' FROM usuarios;
# Redondeo a la baja #
SELECT FLOOR (7.34) AS 'OPERACIONES' FROM usuarios;
# Valor PI #
SELECT PI() AS 'OPERACION' FROM usuarios;
# Numero aleatorio #
SELECT RAND () AS 'OPERACION' FROM usuarios;
# Redondeo de numero #
SELECT ROUND (7.91,2) AS 'OPERACION' FROM usuarios;
# Raiz cuadrada #
SELECT SQRT(7.98) AS 'OPERACION' FROM usuarios;
/*
Fucniones para texto
*/
# Para mostrar el texto en mayusculas #
SELECT UPPER(nombre) FROM usuarios;

# Para mostrar el texto en minusculas #
SELECT LOWER(nombre) FROM usuarios;

# Para CONCATENAR variables #
SELECT CONCAT(nombre,' ',apellido)  AS'Conversion'FROM usuarios;

# Una dentro de otra #
SELECT UPPER(CONCAT(nombre,' ',apellido))  AS'Conversion'FROM usuarios;

# Una que prmite sacar la longitud #
SELECT LENGTH(CONCAT(nombre,' ',apellido))  AS'Conversion'FROM usuarios;

# Para con TRIM borramos los espacios vacios#
SELECT TRIM(CONCAT('    ',nombre,' ',apellido,'    '))  AS'Conversion'FROM usuarios;

/*
Trabajar con fechas
*/
# Seleccionar la fecha de los usuarios #
SELECT email,fecha FROM usuarios;

# Seleccionar la fecha actual #
SELECT email,fecha, CURDATE() AS 'Fecha actual' FROM usuarios;

# Seleccionar La diferencia de la fecha actual #
SELECT email, DATEDIFF(fecha, CURDATE()( AS 'Fecha actual' FROM usuarios;

# Nombre del dia del registro con  #
SELECT email,DAYNAME(fecha) AS 'Fecha actual' FROM usuarios;

# Numero del dia del mes con  #
SELECT email,DAYOFMONTH(fecha) AS 'Fecha actual' FROM usuarios;

# Numero del dia de la semana con  #
SELECT email,DAYOFWEEK(fecha) AS 'Fecha actual' FROM usuarios;

# Numero del dia del año con  #
SELECT email,DAYOFYEAR(fecha) AS 'Fecha actual' FROM usuarios;

# Numero Del mes con  #
SELECT email,MONTH(fecha) AS 'Fecha actual' FROM usuarios;

# Tiempo actual  #
SELECT email, CURTIME() AS 'Fecha actual' FROM usuarios;

# Fecha y hora del sistema operativo #
SELECT email,SYSDATE() AS 'Fecha actual' FROM usuarios;

# Formatear el formato de la fecha #
SELECT email,DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;

/*FUNCIONES GENERALES*/

# Comprobar si algun dato es null #
SELECT email,ISNULL(apellidos) AS 'Valor nulo' FROM usuarios;

# Comprobar si algunos datos son iguales #
SELECT email,STRCMP('hola','hola') AS 'Valor nulo' FROM usuarios;

# Comprobar el usuario #
SELECT USER() FROM usuarios;

# Comprobar los registros diferentes #
SELECT DISTINCT USER() FROM usuarios;

# Comprobar los registros diferentes #
SELECT DISTINCT DATABASE() FROM usuarios;

# Comprobar que el campo esta vacio e integrar un texto #
SELECT email, IFNULL(apellidos,'Campo vacio') USER() FROM usuarios;