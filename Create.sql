CREATE TABLE Processor
(
model varchar(10) NOT NULL,
family varchar(10) NOT NULL,
frequency DECIMAL(3,2) NOT NULL,
corecount int NOT NULL,
threadcount int NOT NULL,
PRIMARY KEY (model)
);

INSERT INTO Processor
VALUES('6700', 'Core i7', 4.0, 4, 8);

INSERT INTO Processor
VALUES('4790', 'Core i7', 4.0, 4, 8);

INSERT INTO Processor
VALUES('6600', 'Core i5', 3.5, 4, 4);

INSERT INTO Processor
VALUES('4690', 'Core i5', 3.5, 4, 4);

INSERT INTO Processor
VALUES('6320', 'Core i3', 3.9, 2, 4);

INSERT INTO Processor
VALUES('4370', 'Core i3', 3.8, 2, 4);

INSERT INTO Processor
VALUES('2699 V3', 'Xeon E5', 2.3, 18, 36);

INSERT INTO Processor
VALUES('2697 V3', 'Xeon E5', 2.6, 14, 28);

CREATE TABLE Memory
(
memid varchar(10) NOT NULL,
frequency int NOT NULL,
capacity int NOT NULL,
stickcount int NOT NULL,
PRIMARY KEY (memid)
);

INSERT INTO Memory
VALUES(1, 1066, 16, 4);

INSERT INTO Memory
VALUES(2, 1600, 32, 8);

INSERT INTO Memory
VALUES(3, 1833, 64, 4);

INSERT INTO Memory
VALUES(4, 2400, 128, 8);

INSERT INTO Memory
VALUES(5, 3000, 256, 16);

CREATE TABLE Expansioncard
(
model varchar(10) NOT NULL,
type varchar(10) NOT NULL,
bandwidth int NOT NULL,
portcount int NOT NULL,
PRIMARY KEY (model)
);

INSERT INTO Expansioncard
VALUES ('QLE8400', 'QSFP+', 10, 4);

INSERT INTO Expansioncard
VALUES ('QLE1000', 'QSFP+', 40, 2);

INSERT INTO Expansioncard
VALUES ('QLE2564', 'Fibre', 16, 4);

INSERT INTO Expansioncard
VALUES ('QLE2562', 'Fibre', 8, 2);

CREATE TABLE Location
(
building int NOT NULL,
rack int NOT NULL,
topu int NOT NULL,
PRIMARY KEY (rack, topu)
);

CREATE TABLE Employee
(
empid int NOT NULL,
fname varchar(25),
lname varchar(25),
email varchar(25) NOT NULL,
cubicle varchar(5) NOT NULL,
PRIMARY KEY (empid)
);

INSERT INTO Employee
VALUES (1, 'John', 'Bain', 'jbain@dell.com', '01A');

INSERT INTO Employee
VALUES (2, 'Bruce', 'Wayne', 'bwayne@dell.com', '02B');

INSERT INTO Employee
VALUES (3, 'Diana', 'Summers', 'dsummers@dell.com', '03C');

INSERT INTO Employee
VALUES (4, 'Harleen', 'Quinzel', 'hquinzell@dell.com', '04D');

INSERT INTO Employee
VALUES (5, 'She', 'Go', 'sgo@dell.com', '05E');

CREATE TABLE Device
(
devid varchar(10) NOT NULL,
empid int         NOT NULL,
cpuid varchar(10) NOT NULL,
memid varchar(10) NOT NULL,
carid varchar(25) NOT NULL,
racid int NOT NULL,
topid int NOT NULL,
typid varchar(25) NOT NULL,
PRIMARY KEY (devid),
FOREIGN KEY (empid) REFERENCES Employee(empid)  ON DELETE CASCADE,
FOREIGN KEY (cpuid) REFERENCES Processor(model) ON DELETE CASCADE,
FOREIGN KEY (memid) REFERENCES Memory(memid)    ON DELETE CASCADE,
FOREIGN KEY (carid) REFERENCES Expansioncard(model)      ON DELETE CASCADE,
FOREIGN KEY (racid, topid) REFERENCES Location(rack, topu)  ON DELETE CASCADE
);
