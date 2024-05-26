create database tiendita;

use tiendita;

create table categorias(
    id int primary key auto_increment,
    nombre varchar(30)
);

create table productos(
    id int primary key auto_increment,
    nombre varchar (30),
    precio int,
    categoria_id int,
    foreign key (categoria_id) references categorias(id) 
);

create table clientes(
    id int primary key auto_increment,
    nombre varchar(30),
    telefono varchar(10)
);

create table ventas(
    id int primary key auto_increment,
    fecha varchar(10),
    producto_id int,
    cliente_id int,
    foreign key (producto_id) references productos(id),
    foreign key (cliente_id) references clientes(id)
);

    insert into categorias (nombre) values
        ("piezas de computadora"),
        ("computadoras"),
        ("software"),
        ("accesorios"),
        ("monitores"),
        ("celulares");

    insert into productos (nombre,precio,categoria_id) values
        ("Intel core i7 10700k",7500,1),
        ("Intel core i3 5600f",3500,1),
        ("Asus Rog",15000,2),
        ("alienware 7700",32000,2),
        ("Antivirus Avast",1200,3),
        ("Antivirus Malwarebites",1350,3),
        ("Bocinas JBL",1100,4),
        ("Mouse Pad 90x50",185,4),
        ("Lg 4k 43pulgadas",10500,5),
        ("Mexico conectado 25pulgadas",1000,5),
        ("Poco f5",6700,6),
        ("Nokia forja de hades",10000,6);
        
    insert into clientes (nombre,telefono) values
        ("Miguel Soto","7774475931"),
        ("Rodrigo Cambray","7773261758"),
        ("Leonel Mendoza","7771596248"),
        ("Benito Juarez","7773652664"),
        ("Sandra Lourdes","7775241863");

    insert into ventas(fecha,producto_id,cliente_id)values
        ("22-04-2024",1,1),
        ("25-03-2023",3,5),
        ("02-07-2022",6,3),
        ("03-12-2023",3,4),
        ("29-06-2020",9,2);

select nombre,telefono from clientes; /*un producto*/
select * from clientes; /*todos los productos*/

select nombre,precio from productos;
select nombre,precio from productos limit 5 asc;/*ultimos 5*/
select nombre,precio from productos limit 5 desc;/*primeros 5*/
select * from productos;

select nombre,precio from productos where precio > 5000;
select nombre,precio from productos where precio < 5000;

select nombre,precio from productos where precio < 5000 limit 4;
