/* 
Modificar la comicion de los vendedores y ponerla al 2 % cuando ganan mas de 50k
 */

UPDATE vendedores SET comision=0.5  WHERE sueldo >= 33000;