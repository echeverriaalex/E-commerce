drop database ecommerce;
create database ecommerce;
use ecommerce;


create table categorias(
	categoriaId int auto_increment,
    descripcion varchar (20),
    constraint pk_categoriaId primary key (categoriaId)
);

insert into categorias (descripcion) values ("informatica"), ("vehiculos"), ("otros");
select * from categorias;

drop table productos;
create table productos(
	categoriaId int,
	productoId int auto_increment,
	imagen varchar (500),
    nombre varchar (20),
    precio float,
    email varchar (20),
    constraint pk_categoriaId primary key (productoId)
);

insert into productos(categoriaId, imagen, nombre, precio, email) 
	values	(1, "https://www.macstation.com.ar/img/productos/2599-2.jpg","Iphone 13", 3000,"mai@ale.com"),
			(2, "https://cdn1.mecum.com/auctions/ca0822/ca0822-532315/images/3-1658929186462@2x.jpg?1660951716000","Nissan R34", 34000,"nissan@r34.com"),
            (3, "https://cortineriaconfort.com/wp-content/uploads/2022/04/sillon-sofa-3-cuerpos-napoles-premium-83779.jpg","Sillon", 2000,"muebles@si.com"),
            (1, "https://http2.mlstatic.com/D_NQ_NP_995961-MLA53452151923_012023-O.jpg","Samsung s23", 2500,"samsung@ya.com"),
            (2, "https://wallpaperaccess.com/full/2107299.jpg","Nissan 240SX", 29000,"24@sx.com"),
            (3, "https://osterar.vteximg.com.br/arquivos/ids/156388-700-700/BLST4655B_ATF-1.jpg?v=637771220391130000/","Licuadora oster", 1000,"oster@licua.com");

select * from productos;

select p.categoriaId,
	p.productoId,
	p.imagen ,
    p.nombre ,
    p.precio ,
    p.email ,
    c.descripcion from productos p inner join categorias c on p.categoriaId = c.categoriaId;


create table usuarios(
	usuarioId int auto_increment,
	email varchar (30),
    password varchar (20),
    nombre varchar (30),    
    constraint pk_categoriaId primary key (usuarioId)
);


select    
	p.categoriaId,
	p.productoId,
	p.imagen ,
	p.nombre ,
	p.precio ,
	p.email ,
	c.descripcion 
	from productos p inner join categorias c 
	on p.categoriaId = c.categoriaId where (productoId = 4);
