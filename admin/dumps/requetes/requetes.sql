create table ti_admin (id_admin serial not null primary key, pseudo text unique not null, password text unique not null);
insert into ti_admin (pseudo,password) values ('eric.loguet','bower107');
update ti_admin set password = md5('admin');
