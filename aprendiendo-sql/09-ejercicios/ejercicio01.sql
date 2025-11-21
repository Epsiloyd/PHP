/* 
Diseñar y crear la base de datos de un concecionario
 */
CREATE DATABASE     IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
id      int(10)auto_increment not null,
modelo  varchar(100) not null,
marca   varchar(50) ,
precio  int(20) not null,
stock   int(255) not null,
CONSTRAINT pk_coches PRIMARY KEY (id)
)ENGINE = InnoDB;

CREATE TABLE grupos(
id      int(10) auto_increment not null,
nombre  varchar(200) not null,
ciudad  varchar(100) not null,
CONSTRAINT pk_grupos PRIMARY KEY (id)
)ENGINE = InnoDB;

CREATE TABLE vendedores (
id          int(10) auto_increment not null,
grupo_id    int(10) not null,
jefe        int(10),
nombre      varchar(100) not null,
apellidos   varchar(100) not null,
cargo       varchar(100) not null,
fecha       date,
sueldo      float(20,2),
comision    float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY (grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY (jefe) REFERENCES vendedores(id)
)ENGINE = InnoDB;

CREATE TABLE clientes (
id              int(10) auto_increment not null,
vendedor_id     int(10),
nombre          varchar(100) not null,
ciudad          varchar(100),
gastado         float(20,2),
fecha           date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY (vendedor_id) REFERENCES vendedores(id)
)ENGINE = InnoDB;

CREATE TABLE encargos(
id              int(10) auto_increment not null,
cliente_id      int(10) not null,
coche_id        int(10) not null,
cantidad        int(100),
fecha           date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY (coche_id)  REFERENCES coches(id)
)ENGINE = InnoDB;


# Rellenar la base de datos con informacion #
# COCHES #
INSERT INTO coches VALUES (null,'Renault Orch', 'RENAULT', 12000, 14);
INSERT INTO coches VALUES (null,'Nissan Tida', 'NISSAN', 20000, 14);
INSERT INTO coches VALUES (null,'Ford Fio', 'FORD', 15000, 14);
INSERT INTO coches VALUES (null,'Porche Cayene', 'PORCHE', 130000, 14);
INSERT INTO coches VALUES (null,'Ferrari La ferrari', 'FERRARI', 110000, 14);
INSERT INTO coches VALUES (null,'Mercedes Ranchera', 'Mercedes Benz', 100000, 14);
# GRUPOS #
INSERT INTO grupos VALUES (null,'Vendedores A', 'CDMX');
INSERT INTO grupos VALUES (null,'Vendedores B', 'CDMX');
INSERT INTO grupos VALUES (null,'Talleres mecanicos', 'CDMX');
INSERT INTO grupos VALUES (null,'Vendedores A', 'JALISCO');
INSERT INTO grupos VALUES (null,'Vendedores B', 'JALISCO');
INSERT INTO grupos VALUES (null,'Talleres Mecanicos', 'JALISCO');
INSERT INTO grupos VALUES (null,'Vendedores A', 'MICHOACAN');
INSERT INTO grupos VALUES (null,'Vendedores B', 'MICHOACAN');
INSERT INTO grupos VALUES (null,'Talleres Mecanicos', 'MICHOACAN');

# VENDEODRES #
INSERT INTO vendedores VALUES (null,1,null,'Federico','KIKO','Responsable de tienda',curdate(),50000,4);
INSERT INTO vendedores VALUES (null,1,1,'Alexis','chavo','Ayudante',curdate(),20000,4);
INSERT INTO vendedores VALUES (null,2,null,'Nelson','simp','Responsable de tienda',curdate(),50000,4);
INSERT INTO vendedores VALUES (null,2,3,'Salvador','Dali','Ayudante',curdate(),20000,4);
INSERT INTO vendedores VALUES (null,3,null,'Luis','Echeverria','Mecanico jefe',curdate(),50000,4);
INSERT INTO vendedores VALUES (null,4,null,'Francisco','de asis','Vendedor de recambios',curdate(),30000,4);
INSERT INTO vendedores VALUES (null,5,null,'Pedro','Anciedades','Ventas',curdate(),35000,4);
INSERT INTO vendedores VALUES (null,6,null,'Joaquin','El fenix','Ejecutivo de cuentas ',curdate(),30000,4);
INSERT INTO vendedores VALUES (null,6,8,'Felipe','Su patron','Jefe de jefes',curdate(),30000000,100);

# CLIENTES #
INSERT INTO clientes VALUES (null,1,'GOCONSULTING','JALISCO',24000,curdate());
INSERT INTO clientes VALUES (null,1,'Tacos el apa','MICHOACAN',40000,curdate());
INSERT INTO clientes VALUES (null,1,'FERRETERIA V','JALISCO',32000,curdate());
INSERT INTO clientes VALUES (null,1,'GOCONSULTING','CDMX',96000,curdate());
INSERT INTO clientes VALUES (null,1,'DULCES ALVERH','MICHOACAN',17000,curdate());
INSERT INTO clientes VALUES (null,1,'PC MANIA','JALISCO',2450000,curdate());
# ENCARGOS #
INSERT INTO encargos VALUES (null,1,1,2,curdate());
INSERT INTO encargos VALUES (null,2,2,4,curdate());
INSERT INTO encargos VALUES (null,3,3,1,curdate());
INSERT INTO encargos VALUES (null,4,3,3,curdate());
INSERT INTO encargos VALUES (null,5,5,1,curdate());
INSERT INTO encargos VALUES (null,6,6,1,curdate());