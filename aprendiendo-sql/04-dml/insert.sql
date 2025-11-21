/* 
Insertar nuevos registros
Inmportante debes introdocir todos los calores a cada columna no puedes dejar ningun espacio vacio
 */

INSERT INTO usuarios VALUE(null,'Felipe','Torres Tavera','felipe@felipe.com','1234','2025/09/27');
INSERT INTO usuarios VALUE(null,'Fernanda','Amezquita Becerra','fernanda@fernanda.com','5678','2025/09/27');

/*
Como insertar filas solo con ciertas columnas
*/

INSERT INTO usuarios(email,password) VALUES ('ADMIN@ADMIN.COM','5681');
