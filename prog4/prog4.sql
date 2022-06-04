/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     20/04/2022 9:08:13                           */
/*==============================================================*/


drop table if exists CIUDADES;

drop table if exists ESTUDIANTES;

/*==============================================================*/
/* Table: CIUDADES                                              */
/*==============================================================*/
create table CIUDADES
(
   CIUID                int not null auto_increment,
   CIUNOMBRE            varchar(128) not null,
   primary key (CIUID)
);

alter table CIUDADES comment 'tabla clave ciudades';

/*==============================================================*/
/* Table: ESTUDIANTES                                           */
/*==============================================================*/
create table ESTUDIANTES
(
   ESTUDI               int not null auto_increment comment 'campo clave para la tabla estudiantes',
   CIUID                int,
   ESTCEDULA            varchar(10) not null,
   ESTNOMBRE            varchar(128) not null,
   ESTDIRECCION         varchar(250) not null,
   ESTTELEFONO          varchar(30) not null,
   ESTGENERO            varchar(60) not null,
   ESTESTCIVIL          varchar(60) not null,
   primary key (ESTUDI)
);

alter table ESTUDIANTES comment 'Alamacena el listado de los estudiantes matriculados en la i';

alter table ESTUDIANTES add constraint FK_REFERENCE_1 foreign key (CIUID)
      references CIUDADES (CIUID) on delete restrict on update restrict;

