#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

DROP DATABASE dfa;
CREATE DATABASE dfa;
USE dfa;

#------------------------------------------------------------
# Table: OFFRE
#------------------------------------------------------------

CREATE TABLE OFFRE(
        id_offre         Int  Auto_increment  NOT NULL ,
        libelle_offre    Varchar (50) NOT NULL ,
        date_debut_offre Date NOT NULL ,
        date_fin_offre   Date NOT NULL ,
        prix_offre       Float NOT NULL
	,CONSTRAINT OFFRE_PK PRIMARY KEY (id_offre)
);


#------------------------------------------------------------
# Table: PERSONNE
#------------------------------------------------------------

CREATE TABLE PERSONNE(
        code_pers   Int  Auto_increment  NOT NULL ,
        nom_pers    Varchar (50) NOT NULL ,
        prenom_pers Varchar (50) NOT NULL ,
        mail_pers   Varchar (50) NOT NULL ,
        mdp_pers    Varchar (50) NOT NULL
	,CONSTRAINT PERSONNE_PK PRIMARY KEY (code_pers)
);


#------------------------------------------------------------
# Table: CLIENT
#------------------------------------------------------------

CREATE TABLE CLIENT(
        code_pers   Int NOT NULL ,
        rs_cli      Varchar (50) NOT NULL ,
        tel_cli     Varchar (50) NOT NULL ,
        nom_pers    Varchar (50) NOT NULL ,
        prenom_pers Varchar (50) NOT NULL ,
        mail_pers   Varchar (50) NOT NULL ,
        mdp_pers    Varchar (50) NOT NULL
	,CONSTRAINT CLIENT_PK PRIMARY KEY (code_pers)

	,CONSTRAINT CLIENT_PERSONNE_FK FOREIGN KEY (code_pers) REFERENCES PERSONNE(code_pers)
);


#------------------------------------------------------------
# Table: ADMIN
#------------------------------------------------------------

CREATE TABLE ADMIN(
        code_pers   Int NOT NULL ,
        nom_pers    Varchar (50) NOT NULL ,
        prenom_pers Varchar (50) NOT NULL ,
        mail_pers   Varchar (50) NOT NULL ,
        mdp_pers    Varchar (50) NOT NULL
	,CONSTRAINT ADMIN_PK PRIMARY KEY (code_pers)

	,CONSTRAINT ADMIN_PERSONNE_FK FOREIGN KEY (code_pers) REFERENCES PERSONNE(code_pers)
);


#------------------------------------------------------------
# Table: ABONNEMENT
#------------------------------------------------------------

CREATE TABLE ABONNEMENT(
        id_abon         Int  Auto_increment  NOT NULL ,
        date_debut_abon Date NOT NULL ,
        date_fin_abon   Date NOT NULL ,
        code_pers       Int NOT NULL ,
        id_offre        Int NOT NULL
	,CONSTRAINT ABONNEMENT_PK PRIMARY KEY (id_abon)

	,CONSTRAINT ABONNEMENT_CLIENT_FK FOREIGN KEY (code_pers) REFERENCES CLIENT(code_pers)
	,CONSTRAINT ABONNEMENT_OFFRE0_FK FOREIGN KEY (id_offre) REFERENCES OFFRE(id_offre)
);


#------------------------------------------------------------
# Table: FACTURE
#------------------------------------------------------------

CREATE TABLE FACTURE(
        code_fact Varchar (50) NOT NULL
	,CONSTRAINT FACTURE_PK PRIMARY KEY (code_fact)
);


#------------------------------------------------------------
# Table: SERVICE
#------------------------------------------------------------

CREATE TABLE SERVICE(
        id_serv    Int  Auto_increment  NOT NULL ,
        libel_serv Varchar (50) NOT NULL ,
        id_abon    Int NOT NULL
	,CONSTRAINT SERVICE_PK PRIMARY KEY (id_serv)

	,CONSTRAINT SERVICE_ABONNEMENT_FK FOREIGN KEY (id_abon) REFERENCES ABONNEMENT(id_abon)
);


#------------------------------------------------------------
# Table: MACHINE
#------------------------------------------------------------

CREATE TABLE MACHINE(
        id_serv       Int NOT NULL ,
        id_mach       Int NOT NULL ,
        lib_mach      Varchar (50) NOT NULL ,
        a_creer_mach  Varchar (50) NOT NULL ,
        coeur_mach    Float NOT NULL ,
        ram_match     Float NOT NULL ,
        stockage_mach Float NOT NULL ,
        libel_serv    Varchar (50) NOT NULL ,
        id_abon       Int NOT NULL
	,CONSTRAINT MACHINE_PK PRIMARY KEY (id_serv,id_mach)

	,CONSTRAINT MACHINE_SERVICE_FK FOREIGN KEY (id_serv) REFERENCES SERVICE(id_serv)
	,CONSTRAINT MACHINE_ABONNEMENT0_FK FOREIGN KEY (id_abon) REFERENCES ABONNEMENT(id_abon)
);


#------------------------------------------------------------
# Table: UTILISATEUR
#------------------------------------------------------------

CREATE TABLE UTILISATEUR(
        id_serv       Int NOT NULL ,
        id_mach       Int NOT NULL ,
        nom_util      Varchar (50) NOT NULL ,
        prenom_util   Varchar (50) NOT NULL ,
        login_util    Varchar (50) NOT NULL ,
        mdp_util      Varchar (50) NOT NULL ,
        exe_util      Varchar (50) NOT NULL ,
        libel_serv    Varchar (50) NOT NULL ,
        lib_mach      Varchar (50) NOT NULL ,
        a_creer_mach  Varchar (50) NOT NULL ,
        coeur_mach    Float NOT NULL ,
        ram_match     Float NOT NULL ,
        stockage_mach Float NOT NULL ,
        id_abon       Int NOT NULL
	,CONSTRAINT UTILISATEUR_PK PRIMARY KEY (id_serv,id_mach)

	,CONSTRAINT UTILISATEUR_MACHINE_FK FOREIGN KEY (id_serv,id_mach) REFERENCES MACHINE(id_serv,id_mach)
	,CONSTRAINT UTILISATEUR_ABONNEMENT0_FK FOREIGN KEY (id_abon) REFERENCES ABONNEMENT(id_abon)
);


#------------------------------------------------------------
# Table: CALCUL
#------------------------------------------------------------

CREATE TABLE CALCUL(
        id_serv       Int NOT NULL ,
        id_mach       Int NOT NULL ,
        libel_serv    Varchar (50) NOT NULL ,
        lib_mach      Varchar (50) NOT NULL ,
        a_creer_mach  Varchar (50) NOT NULL ,
        coeur_mach    Float NOT NULL ,
        ram_match     Float NOT NULL ,
        stockage_mach Float NOT NULL ,
        id_abon       Int NOT NULL
	,CONSTRAINT CALCUL_PK PRIMARY KEY (id_serv,id_mach)

	,CONSTRAINT CALCUL_MACHINE_FK FOREIGN KEY (id_serv,id_mach) REFERENCES MACHINE(id_serv,id_mach)
	,CONSTRAINT CALCUL_ABONNEMENT0_FK FOREIGN KEY (id_abon) REFERENCES ABONNEMENT(id_abon)
);


#------------------------------------------------------------
# Table: SAUVEGARDE
#------------------------------------------------------------

CREATE TABLE SAUVEGARDE(
        id_serv    Int NOT NULL ,
        stockage   Float NOT NULL ,
        libel_serv Varchar (50) NOT NULL ,
        id_abon    Int NOT NULL
	,CONSTRAINT SAUVEGARDE_PK PRIMARY KEY (id_serv)

	,CONSTRAINT SAUVEGARDE_SERVICE_FK FOREIGN KEY (id_serv) REFERENCES SERVICE(id_serv)
	,CONSTRAINT SAUVEGARDE_ABONNEMENT0_FK FOREIGN KEY (id_abon) REFERENCES ABONNEMENT(id_abon)
);


#------------------------------------------------------------
# Table: LIGNE_FAC
#------------------------------------------------------------

CREATE TABLE LIGNE_FAC(
        id_abon   Int NOT NULL ,
        code_fact Varchar (50) NOT NULL ,
        date_fac  Date NOT NULL
	,CONSTRAINT LIGNE_FAC_PK PRIMARY KEY (id_abon,code_fact)

	,CONSTRAINT LIGNE_FAC_ABONNEMENT_FK FOREIGN KEY (id_abon) REFERENCES ABONNEMENT(id_abon)
	,CONSTRAINT LIGNE_FAC_FACTURE0_FK FOREIGN KEY (code_fact) REFERENCES FACTURE(code_fact)
);
