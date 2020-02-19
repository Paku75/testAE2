/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     19/02/2020 13:29:03                          */
/*==============================================================*/


drop table if exists APPARTENIR2;

drop table if exists CLASSE;

drop table if exists COMMENTAIRE;

drop table if exists CONSERNER;

drop table if exists CONSULTER;

drop table if exists EST_INSCRIT_DANS;

drop table if exists ETUDIANT;

drop table if exists FILIERE;

drop table if exists FORUM;

drop table if exists OFFRE;

drop table if exists POST;

drop table if exists POSTULER;

drop table if exists PROMOTION;

drop table if exists TYPEOFFRE;

drop table if exists TYPEUSER;

drop table if exists USER;

/*==============================================================*/
/* Table: APPARTENIR2                                           */
/*==============================================================*/
create table APPARTENIR2
(
   IDFILIERE            int not null,
   IDPROMOTION          int not null,
   primary key (IDFILIERE, IDPROMOTION)
);

/*==============================================================*/
/* Table: CLASSE                                                */
/*==============================================================*/
create table CLASSE
(
   IDCLASSE             int not null,
   IDFILIERE            int not null,
   NOM                  varchar(255),
   primary key (IDCLASSE)
);

/*==============================================================*/
/* Table: COMMENTAIRE                                           */
/*==============================================================*/
create table COMMENTAIRE
(
   IDCOMMENAIRE         int not null,
   IDETUDIANT           int not null,
   IDPOST               int not null,
   CREATEDAT            datetime,
   COMMENT              text,
   primary key (IDCOMMENAIRE)
);

/*==============================================================*/
/* Table: CONSERNER                                             */
/*==============================================================*/
create table CONSERNER
(
   IDCLASSE             int not null,
   IDOFFRE              int not null,
   primary key (IDCLASSE, IDOFFRE)
);

/*==============================================================*/
/* Table: CONSULTER                                             */
/*==============================================================*/
create table CONSULTER
(
   IDETUDIANT           int not null,
   IDOFFRE              int not null,
   primary key (IDETUDIANT, IDOFFRE)
);

/*==============================================================*/
/* Table: EST_INSCRIT_DANS                                      */
/*==============================================================*/
create table EST_INSCRIT_DANS
(
   IDCLASSE             int not null,
   IDETUDIANT           int not null,
   primary key (IDCLASSE, IDETUDIANT)
);

/*==============================================================*/
/* Table: ETUDIANT                                              */
/*==============================================================*/
create table ETUDIANT
(
   IDETUDIANT           int not null,
   NOM                  varchar(255),
   PRENOM               varchar(255),
   TEL                  varchar(255),
   DATE_NAISSANCE       date,
   ADRESSE              varchar(255),
   VILLE                varchar(255),
   CP                   int,
   CV                   varchar(255),
   LINKEDIN             varchar(255),
   ETAT                 bool,
   LOGIN                varchar(255),
   MDP                  varchar(255),
   AVATAR               varchar(255),
   primary key (IDETUDIANT)
);

/*==============================================================*/
/* Table: FILIERE                                               */
/*==============================================================*/
create table FILIERE
(
   IDFILIERE            int not null,
   NOM                  varchar(255),
   primary key (IDFILIERE)
);

/*==============================================================*/
/* Table: FORUM                                                 */
/*==============================================================*/
create table FORUM
(
   IDFORUM              char(10) not null,
   NOM                  varchar(255),
   DESCRIPTION          text,
   IMAGE                varchar(255),
   primary key (IDFORUM)
);

/*==============================================================*/
/* Table: OFFRE                                                 */
/*==============================================================*/
create table OFFRE
(
   IDOFFRE              int not null,
   IDUSER               int not null,
   IDTYPEOFFRE          int not null,
   TITRE                varchar(255),
   POSTE                varchar(255),
   DESCRIPTION          text,
   LIEN                 varchar(255),
   primary key (IDOFFRE)
);

/*==============================================================*/
/* Table: POST                                                  */
/*==============================================================*/
create table POST
(
   IDPOST               int not null,
   IDETUDIANT           int not null,
   IDFORUM              char(10) not null,
   TITRE                varchar(255),
   CONTENU              text,
   IMAGE                varchar(255),
   primary key (IDPOST)
);

/*==============================================================*/
/* Table: POSTULER                                              */
/*==============================================================*/
create table POSTULER
(
   IDETUDIANT           int not null,
   IDFORUM              char(10) not null,
   primary key (IDETUDIANT, IDFORUM)
);

/*==============================================================*/
/* Table: PROMOTION                                             */
/*==============================================================*/
create table PROMOTION
(
   IDPROMOTION          int not null,
   NOM                  varchar(255),
   primary key (IDPROMOTION)
);

/*==============================================================*/
/* Table: TYPEOFFRE                                             */
/*==============================================================*/
create table TYPEOFFRE
(
   NOM                  varchar(255),
   IDTYPEOFFRE          int not null,
   primary key (IDTYPEOFFRE)
);

/*==============================================================*/
/* Table: TYPEUSER                                              */
/*==============================================================*/
create table TYPEUSER
(
   IDTYPEUSER           int not null,
   NOM                  varchar(255),
   primary key (IDTYPEUSER)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   IDUSER               int not null,
   IDTYPEUSER           int not null,
   LOGIN                varchar(255),
   MPD                  varchar(255),
   primary key (IDUSER)
);

alter table APPARTENIR2 add constraint FK_APPARTENIR2 foreign key (IDFILIERE)
      references FILIERE (IDFILIERE) on delete restrict on update restrict;

alter table APPARTENIR2 add constraint FK_APPARTENIR3 foreign key (IDPROMOTION)
      references PROMOTION (IDPROMOTION) on delete restrict on update restrict;

alter table CLASSE add constraint FK_APPARTENIR foreign key (IDFILIERE)
      references FILIERE (IDFILIERE) on delete restrict on update restrict;

alter table COMMENTAIRE add constraint FK_AVOIR foreign key (IDPOST)
      references POST (IDPOST) on delete restrict on update restrict;

alter table COMMENTAIRE add constraint FK_COMMENTER foreign key (IDETUDIANT)
      references ETUDIANT (IDETUDIANT) on delete restrict on update restrict;

alter table CONSERNER add constraint FK_CONSERNER foreign key (IDCLASSE)
      references CLASSE (IDCLASSE) on delete restrict on update restrict;

alter table CONSERNER add constraint FK_CONSERNER2 foreign key (IDOFFRE)
      references OFFRE (IDOFFRE) on delete restrict on update restrict;

alter table CONSULTER add constraint FK_CONSULTER foreign key (IDETUDIANT)
      references ETUDIANT (IDETUDIANT) on delete restrict on update restrict;

alter table CONSULTER add constraint FK_CONSULTER2 foreign key (IDOFFRE)
      references OFFRE (IDOFFRE) on delete restrict on update restrict;

alter table EST_INSCRIT_DANS add constraint FK_EST_INSCRIT_DANS foreign key (IDCLASSE)
      references CLASSE (IDCLASSE) on delete restrict on update restrict;

alter table EST_INSCRIT_DANS add constraint FK_EST_INSCRIT_DANS2 foreign key (IDETUDIANT)
      references ETUDIANT (IDETUDIANT) on delete restrict on update restrict;

alter table OFFRE add constraint FK_APPARTENIR33 foreign key (IDTYPEOFFRE)
      references TYPEOFFRE (IDTYPEOFFRE) on delete restrict on update restrict;

alter table OFFRE add constraint FK_GERER foreign key (IDUSER)
      references USER (IDUSER) on delete restrict on update restrict;

alter table POST add constraint FK_CONTENIR foreign key (IDFORUM)
      references FORUM (IDFORUM) on delete restrict on update restrict;

alter table POST add constraint FK_CREER foreign key (IDETUDIANT)
      references ETUDIANT (IDETUDIANT) on delete restrict on update restrict;

alter table POSTULER add constraint FK_POSTULER foreign key (IDETUDIANT)
      references ETUDIANT (IDETUDIANT) on delete restrict on update restrict;

alter table POSTULER add constraint FK_POSTULER2 foreign key (IDFORUM)
      references FORUM (IDFORUM) on delete restrict on update restrict;

alter table USER add constraint FK_APPARTENIR24 foreign key (IDTYPEUSER)
      references TYPEUSER (IDTYPEUSER) on delete restrict on update restrict;

