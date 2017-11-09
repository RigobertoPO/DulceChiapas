DROP DATABASE IF EXISTS DulcesBD;
Create database DulcesBD;
use DulcesBD;
create table Usuarios(Id int NOT NULL AUTO_INCREMENT PRIMARY KEY,NombreCompleto varchar(120), Tipo Int,Correo varchar(150),Password varchar(100));
create table Dulces(Id int NOT NULL AUTO_INCREMENT PRIMARY KEY, Nombre varchar(150),Descripcion Varchar(250),Tipo Int, Precio float, Existencia Int, Imagen varchar(150));
create table Pedidos(Id int NOT NULL AUTO_INCREMENT PRIMARY KEY, IdUsuario Int, IdDulce Int, Precio float, Cantidad Int, FechaPedido Date, FechaEntregado Date, DomicilioEntrega varchar(250),FOREIGN KEY (IdUsuario) REFERENCES Usuarios(Id),FOREIGN KEY (IdDulce) REFERENCES Dulces(Id));

Insert into Usuarios(NombreCompleto,Tipo,Correo,Password)Values('Jose Antonio Diaz',1,'ventas@dulcechiapas.com','123456');

Insert into Dulces (Nombre,Descripcion,Tipo,Precio,Existencia)Values('Ante','dulce conformado por un merengue y pan macerado con aguardiente o posh y al final se espolvorea con canela',1,3.0, 20);
Insert into Dulces (Nombre,Descripcion,Tipo,Precio,Existencia)Values('Nuegadito','son dos panes alargados de 8 cm aproximadamente el cual va frito y va unido con una miel de piloncillo o azúcar con carmín rojo',1,5.0, 15);
Insert into Dulces (Nombre,Descripcion,Tipo,Precio,Existencia)Values('Suspiro','dulce en forma de perlas hecho a base de yuca al que después se les agrega un jarabe hecho con piloncillo',1,3.5, 10);


