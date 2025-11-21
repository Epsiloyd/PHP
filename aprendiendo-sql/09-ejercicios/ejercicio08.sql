/* 
Visualizar todos los coches en cuyo marca exista la letra 'A' y empiecen por 'F'
*/

/* Dato importante depende de como acomodes los %% si los pones asi significa que
 todo por delante y por detrar se recorrera hasta encontrar dicha letra en esete caso y so solo lo pones por delante 
o atras se recorrera en esa direccion */

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';