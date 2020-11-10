CREATE DATABASE "SetDB";

USE SetDB;

CREATE TABLE "feedback"; (
    "name" VARCHAR (30) NOT NULL;
    "mail" VARCHAR (30) NOT NULL;
    "phone" INT (13) NOT NULL;
    "message" VARCHAR (200) NOT NULL;
    PRIMARY KEY("phone")

)