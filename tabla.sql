/*tabla de los datos de los estudiantes*/

create table datos_estudiante(
    codigo serial primary key not null,
    primer_nombre varchar(30) not null,
    segundo_nombre varchar(30) null,
    primer_apellido varchar(30) not null,
    segundo_apellido varchar(30) null,
    email varchar(80) not null,
    telefono varchar(20) not null,
    fecha_nacimiento datetime (year to day) not null

);