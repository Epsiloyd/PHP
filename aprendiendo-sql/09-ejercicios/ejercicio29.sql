/* 
Crear una vista llamad avendedoresA que incluira
todos los vendeores del grupo que se llame vendedoresA
 */

CREATE VIEW vendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN
    (SELECT id FROM grupos WHERE nombre="vendedires A");