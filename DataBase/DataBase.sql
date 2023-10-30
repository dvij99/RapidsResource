CREATE DATABASE webDataBase;

USE webDataBase;

CREATE TABLE Person (
PersonID int PRIMARY KEY,
FirstName varchar(255) NOT NULL,
LastName varchar(255) NOT NULL,
DoB date,
ClubName varchar(255),
StartDate date,
EndDate date
);

ALTER TABLE Person ADD FOREIGN KEY (ClubName) REFERENCES Club(ClubName);

insert into person values (1, "John", "Smith", "2000-01-1", "Main", "2013-05-12", NULL);
insert into person values (2, "Bob", "Wayne", "2003-09-21", "Main", "2010-05-19", NULL);
insert into person values (3, "Peter", "Low", "2002-03-17", "CBT", "2007-03-23", NULL);
insert into person values (4, "Peter", "Long", "1999-10-12", "CBT", "2007-01-01", NULL);
insert into person values (5, "Charlie", "Won", "2002-03-17", NULL, "2009-03-21", NULL);
insert into person values (6, "James", "Drew", "2005-03-17", "EBT", "2010-06-22", NULL);
insert into person values (7, "Andrew", "Li", "2002-03-17", NULL, "2009-12-11", NULL);
insert into person values (8, "Alex", "Tron", "2001-09-08", NULL, "2009-05-17", "2009-12-11");
insert into person values (9, "Tim", "Glom", "2001-03-08", "EBT", "2002-05-17", "2009-05-17");

CREATE TABLE Athlete (
AID int PRIMARY KEY,
City varchar(255),
Province varchar(255),
FOREIGN KEY (AID) REFERENCES Person(PersonID)
);

insert into athlete values (1, "Calgary", "Alberta");
insert into athlete values (2, "Edmonton", "Alberta");
insert into athlete values (3, "Toronto", "Ontario");

CREATE TABLE Coach (
CID int PRIMARY KEY,
Certification varchar(255),
FOREIGN KEY (CID) REFERENCES Person(PersonID)
);

insert into coach values (4, "Instructor 1");
insert into coach values (5, "Instructor 2");

CREATE TABLE Judge (
JID int PRIMARY KEY,
Certification varchar(255),
FOREIGN KEY (JID) REFERENCES Person(PersonID)
);

insert into judge values (6, "icf certified");
insert into judge values (7, "icf certified");

CREATE TABLE Official (
OID int PRIMARY KEY,
FOREIGN KEY (OID) REFERENCES Person(PersonID)
);

insert into official values (8);
insert into official values (9);

CREATE TABLE Coaches (
CID int,
AID int,
CONSTRAINT PK_Coaches PRIMARY KEY (CID,AID),
FOREIGN KEY (CID) REFERENCES Coach(CID),
FOREIGN KEY (AID) REFERENCES Athlete(AID)
);

insert into coaches values (4, 1);
insert into coaches values (4, 2);
insert into coaches values (5, 3);

CREATE TABLE JudgedAt (
JID int,
RID int,
CONSTRAINT PK_JudgedAt PRIMARY KEY (JID,RID),
FOREIGN KEY (JID) REFERENCES Judge(JID),
FOREIGN KEY (RID) REFERENCES Race(RID)
);

insert into judgedat values (6, 1);
insert into judgedat values (6, 2);
insert into judgedat values (7, 2);
insert into judgedat values (7, 3);

CREATE TABLE Participates (
RID int,
AID int,
CONSTRAINT PK_Participates PRIMARY KEY (RID,AID),
FOREIGN KEY (RID) REFERENCES Race(RID),
FOREIGN KEY (AID) REFERENCES Athlete(AID)
);

insert into participates values (1, 1);
insert into participates values (1, 2);
insert into participates values (1, 3);
insert into participates values (2, 1);
insert into participates values (3, 2);
insert into participates values (3, 3);

CREATE TABLE GivesPenalties (
JID int,
AID int,
RID int,
Num int,
Penalty time,
CONSTRAINT PK_GivesPenalties PRIMARY KEY (JID,AID,RID,Num),
FOREIGN KEY (JID) REFERENCES Judge(JID),
FOREIGN KEY (AID,RID,Num) REFERENCES AthleteRun(AID,RID,Num)
);

insert into GivesPenalties values (6, 1, 1, 10, "00:00:15");
insert into GivesPenalties values (6, 2, 2, 3, "00:01:15");
insert into GivesPenalties values (7, 1, 3, 15, "00:00:15");
insert into GivesPenalties values (7, 2, 2, 3, "00:02:15");
insert into GivesPenalties values (7, 2, 3, 7, "00:01:15");

CREATE TABLE AthleteRun (
AID int,
RID int,
Num int,
Category varchar(255),
RunTime time,
TimePenalties time,
CONSTRAINT PK_AthleteRun PRIMARY KEY (AID,RID,Num,Category),
FOREIGN KEY (AID) REFERENCES Athlete(AID),
FOREIGN KEY (RID) REFERENCES Race(RID)
);

insert into athleterun values (1, 1, 10, "K1", "00:12:20", "00:00:30");
insert into athleterun values (1, 3, 15, "K1", "00:21:07", "00:01:30");
insert into athleterun values (2, 2, 3, "C1", "00:09:34", "00:04:35");
insert into athleterun values (2, 3, 7, "C2", "00:28:30", "00:06:32");

CREATE TABLE Categories (
AID int PRIMARY KEY,
K1 BOOLEAN,
C1 BOOLEAN,
C2 BOOLEAN,
FOREIGN KEY (AID) REFERENCES Athlete(AID)
);

insert into categories values (1, true, false, true);
insert into categories values (2, true, false, true);
insert into categories values (3, true, false, true);

CREATE TABLE Club (
ClubName varchar(255) PRIMARY KEY,
Province varchar(255),
OID int,
StartDate date,
EndDate date,
FOREIGN KEY (OID) REFERENCES Official(OID)
);

insert into club values ("Main", "Alberta", NULL, "1993-09-08", NULL);
insert into club values ("CBT", "Alberta", NULL, "1998-09-12", NULL);
insert into club values ("EBT", "Alberta", NULL, "1995-09-08", NULL);

update club as c SET c.OID = 8 WHERE c.clubname = "Main";
update club as c SET c.OID = 8 WHERE c.clubname = "CBT";
update club as c SET c.OID = 9 WHERE c.clubname = "EBT";

CREATE TABLE Race (
RID int PRIMARY KEY,
Location varchar(255),
RaceDate date,
Categories varchar(255),
ClubName varchar(255),
OID int,
FOREIGN KEY (ClubName) REFERENCES Club(ClubName),
FOREIGN KEY (OID) REFERENCES Official(OID)
);

insert into race values (1, "Calgary", "2000-01-1", "all", "Main", 8);
insert into race values (2, "Calgary", "2003-05-12", "all", "CBT", 8);
insert into race values (3, "Edmonton", "2008-11-21", "all", "EBT", 9);



