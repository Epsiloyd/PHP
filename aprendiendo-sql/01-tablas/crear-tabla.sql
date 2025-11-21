/*
Tipos de datos:
int(numero de cifras)                       ENTERO
integer(numero de caracteres)               ENTERO (maximo 4294967295)
varchar (numero de caracteres)              STRING / ALFANUMERICO (maximo 255)
char(numero de cifras)                      STRING / ALFANUMERICO
float (numero de cifras,numero decimales)   DECIMAL/COMA FLOTANTE

date,time,timestamp
//Strings mas grandes
TEXT        65535 CARACTERES  
MEDIUMTEXT  16 MILL ONES DE CARACTERES
LONGTEXT    4 BILLONES DE CARACTERES

//Enteros mas grandes
MEDIUMINT
BIGINT
*/
/*
restricciones basicas como not null hacen que el campo deba tener un dato 
con el comando null no seria necesario 
con el comando default muestra un mensaje por defecto 
con el auto_incremento puedo auto incrementar en este caso el id
*/

/* 
Crear tabla, se le tiene que signar el tipo de dato 
 */

CREATE TABLE usuarios(
id          int(11)  auto_increment not null,    
nombre      varchar(100)not null,
apellidos   varchar(255)default 'Necesario',
email       varchar(100) not null,
password    varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);