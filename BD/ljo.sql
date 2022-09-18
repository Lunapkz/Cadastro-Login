create database ljo;

use ljo;

create table CLIENTE(
NR_CLIENTE integer not null auto_increment primary key ,
CLIENTE varchar(50) not null ,
senha varchar(50) not null
);