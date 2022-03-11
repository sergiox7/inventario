CREATE DATABASE inventarios;
USE inventarios;

--Usuarios proveedor

CREATE TABLE usuario(
	idUsuario int auto_increment,
	nombre VARCHAR(50),
	pass VARCHAR(100),
	rol BOOLEAN,
	PRIMARY KEY (idUsuario)
);

CREATE TABLE registroSesion(
	idUsuario int,
	resultado BOOLEAN,
	fecha TIMESTAMP,
	FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE puntoVenta(
	idPuntoVenta int auto_increment,
	idUsuario int,
	nombre VARCHAR(50),
	FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario),
	PRIMARY KEY (idPuntoVenta)
);

CREATE TABLE proveedor(
	idProveedor int auto_increment,
	nombre VARCHAR(50),
	PRIMARY KEY (idProveedor)
);

--productos

CREATE TABLE producto(
	idProducto int auto_increment,
	unidadMedida VARCHAR(5),
	idProveedor int,
	nombre VARCHAR(50),
	precioVenta FLOAT,
	PRIMARY KEY (idProducto)
);

CREATE TABLE puntoVentaProducto(
	idPuntoVenta int,
	idProducto int,
	cantidad int,
	FOREIGN KEY (idPuntoVenta) REFERENCES puntoVenta(idPuntoVenta),
	FOREIGN KEY (idProducto) REFERENCES producto(idProducto)
);

CREATE TABLE mermaProducto(
	idProducto int,
	fecha TIMESTAMP,
	cantidad int,
	FOREIGN KEY (idProducto) REFERENCES producto(idProducto)
);

CREATE TABLE comprasProducto(
	idProducto int,
	fecha TIMESTAMP,
	cantidad int,
	precio FLOAT,
	FOREIGN KEY (idProducto) REFERENCES producto(idProducto)
);


-- Inventario

CREATE TABLE inventario(
	idInsumo int,
	idPuntoVenta int,
	cantidad int,
	fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (idPuntoVenta) REFERENCES puntoVenta(idPuntoVenta),
	FOREIGN KEY (idInsumo) REFERENCES insumo(idInsumo)
);


-- Insumos

CREATE TABLE insumo(
	idInsumo int auto_increment,
	unidadMedida VARCHAR(5),
	idProveedor int,
	nombre VARCHAR(50),
	FOREIGN KEY (idProveedor) REFERENCES proveedor(idProveedor),
	PRIMARY KEY (idInsumo)
);

CREATE TABLE puntoVentaInsumo(
	idPuntoVenta int,
	idInsumo int,
	cantidad FLOAT,
	FOREIGN KEY (idPuntoVenta) REFERENCES puntoVenta(idPuntoVenta),
	FOREIGN KEY (idInsumo) REFERENCES insumo(idInsumo)
);

CREATE TABLE mermaInsumo(
	idInsumo int,
	fecha TIMESTAMP,
	cantidad FLOAT,
	FOREIGN KEY (idInsumo) REFERENCES insumo(idInsumo)
);

CREATE TABLE comprasInsumo(
	idInsumo int,
	fecha TIMESTAMP,
	cantidad FLOAT,
	precio FLOAT,
	FOREIGN KEY (idInsumo) REFERENCES insumo(idInsumo)
);

CREATE TABLE receta(
	idReceta int auto_increment,
	nombre VARCHAR(50),
	precioVenta FLOAT,
	PRIMARY KEY (idReceta)
);

CREATE TABLE insumoReceta(
	idInsumo int,
	idReceta int,
	cantidad FLOAT,
	FOREIGN KEY (idInsumo) REFERENCES insumo(idInsumo),
	FOREIGN KEY (idReceta) REFERENCES receta(idReceta)
);

