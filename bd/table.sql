


CREATE TABLE Devi (
    idD NUMBER(4) CONSTRAINT PK_DEV PRIMARY KEY,
     date_emisD date,
     qteD NUMBER(7,2),
     remiseD  NUMBER(7,2),
     serieD VARCHAR2(50),
     taxeD  NUMBER(7,2),
     idcD NUMBER(4) CONSTRAINT FK_CL REFERENCES client,
     referenceD VARCHAR2(50) CONSTRAINT FK_PROD REFERENCES produit,
     image VARCHAR2(50)
     );
   




CREATE TABLE Facture(
    idf NUMBER(4) CONSTRAINT PK_FAC PRIMARY KEY,
    referencF VARCHAR2(50) CONSTRAINT FK_FAC_PROD REFERENCES produit,
    idcF NUMBER(4) CONSTRAINT FK_FAC_CL REFERENCES client,
    date_ech date,
    date_emis date,
    serie VARCHAR2(50),
    remise NUMBER(7,2),
    taxe NUMBER(7,2),
    status VARCHAR2(50),
    paied NUMBER(7,2)
    );



CREATE TABLE societe( 
    idS NUMBRE(2) CONSTRAINT PK_SOCI PRIMARY KEY,
    nomS VARCHAR2(50) NOT NULL,
    teleS VARCHAR2(50) NOT NULL,
    webS VARCHAR2(50) NOT NULL,
    logo VARCHAR2(50),
    fix VARCHAR2(50) NOT NULL,
    adress VARCHAR2(50) NOT NULL,
    email VARCHAR2(50),
    RC VARCHAR2(50),
    CNSS VARCHAR2(50)
    );

CREATE TABLE utilisateur(/*valid*/
    username VARCHAR2(50) CONSTRAINT PK_utilisateur PRIMARY KEY,
    role VARCHAR2(50),
    password VARCHAR2(50),
    numtel VARCHAR2(50),
    nom VARCHAR2(50),
    email VARCHAR2(50),
    dateCreation date
    );


    CREATE TABLE produit (/*valid*/
    reference VARCHAR2(50) CONSTRAINT PK_PROD PRIMARY KEY,
    cout_unitaire NUMBRE(4),
    description VARCHAR2(200),
    dateCreation date
    );


 CREATE TABLE Details(
     quantite NUMBER(4),
     prix NUMBRE(7,2),
     id_comm NUMBER CONSTRAINT FK_DET_COMM REFERENCES commande ,
     reference VARCHAR2(50) CONSTRAINT FK_DET_PROD REFERENCES produit
 );

/*

CREATE SEQUENCE comm_seq START WITH 1;

CREATE TABLE commande (
  id_comm        NUMBER(4)    DEFAULT comm_seq.nextval NOT NULL,
   date_creation date,
    id_commecial NUMBRE(4),
);

ALTER TABLE commande ADD (
  CONSTRAINT pk_comm PRIMARY KEY (id_comm));
  );
*/
CREATE TABLE client(
    idc NUMBER(4) CONSTRAINT PK_EMP PRIMARY KEY,
    nom VARCHAR2(15) CONSTRAINT UN_EN UNIQUE,
    email VARCHAR2(50),
    adresse_exp VARCHAR2(200),
    adresse_fac VARCHAR2(200),
    personne_contact VARCHAR2(50),
    
    );
 

