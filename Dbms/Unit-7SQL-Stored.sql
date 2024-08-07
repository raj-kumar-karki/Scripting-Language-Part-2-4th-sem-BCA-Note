---------------------------------------------------------------------------------------------
-------------------------------------------5th DAY:------------------------------------------
---------------------------------------------------------------------------------------------

---i). SQL Stored Procedure:

---Syntax:
CREATE PROCEDURE procedure_name
AS
sql_statement
GO;
---Execute a Stored Procedure:
EXEC procedure_name;

---Example:creating table
CREATE TABLE Customer(
CustomerID int INDENTITY(100,11)PRIMARY,
CustomerName varchar(255) NOT NULL,
ContactName varchar(255),
Address varchar(255),
City varchar(255),
PostalCode int,
Country varchar(255)
);

SELECT * FROM Customer;

DROP TABLE Customer;

---Inserting values:

INSERT INTO Customer(CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Ram', 'Ramesh', 'Talchhikhel', 'Ktm', 4006,'Nepal');

INSERT INTO Customer(CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Logan', 'Shyam', 'Huston', 'WashingtonDC', 4007,'USA');

INSERT INTO Customer(CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('sandeep', 'Rabin', 'Haude', 'Delhi', 4008,'India');

INSERT INTO Customer(CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Sita', 'Sabin', 'Jaulakhel', 'Latipur', 4009,'Nepal');

INSERT INTO Customer(CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Hank', 'Uwjal', 'Hewei', 'Hongkong', 4010,'China');

INSERT INTO Customer(CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Mahomat', 'Amita', 'Kasi', 'Baudi',4011, 'Pakistan');

---1.Selectallcustomers:
CREATE PROCEDURE SelectAllCustomer
AS
SELECT *FROM Customer
GO;

EXEC SelectAllCustomer;

DROP PROCEDURE SelectAllCustomer;

---2.Stord Prosedure with One parameter:
CREATE PROCEDURE SelectAllCustomer @City nvarchar(30)
AS
SELECT *FROM Customer WHERE City = @City
GO;

EXEC SelectAllCustomer @City  = 'Butwal';

---3.Stord Prosedure with Multiple parameter:
CREATE PROCEDURE SelectAllCustomer @City nvarchar(30),@PostalCode nvarchar(10)
AS
SELECT *FROM Customer WHERE City = @City AND PostalCode = @PostalCode
GO;

EXEC SelectAllCustomer @City  = 'Ktm',@PostalCode ='4006';

---4. Alter Stord Prosedure:
ALTER PROC SelectAllCustomer
AS
SELECT *FROM Customer 
SELECT COUNT(1)AS [Total Count]FROM Customer
GO

EXEC SelectAllCustomer;

DROP PROCEDURE SelectAllCustomer;

---Stored Procedure Parameter:
--1). INPUT:
CREATE PROCEDURE SelectAllCustomer(
@customerId int,
@postalcode money
)
AS
UPDATE Customer
SET PostalCode = @postalcode 
WHERE CustomerID = @customerId
SELECT *FROM Customer
GO;

EXEC SelectAllCustomer @CustomerID = 4, @PostalCode = 26000 ;
--Or
EXEC SelectAllCustomer 4,26000 ;

DROP PROCEDURE SelectAllCustomer;

--2). OUTPUT:
CREATE PROCEDURE SelectAllCustomer
@customerId int,
@postalcode int OUTPUT
AS
SELECT @customerId = CustomerID
FROM Customer
WHERE PostalCode = @postalcode
GO;

DECLARE @postalcode int
EXECUTE SelectAllCustomer @customerId = 2,@postalcode = 100000
PRINT @postalcode

DROP PROCEDURE SelectAllCustomer;

--3). OPTIONAL:
CREATE PROCEDURE SelectAllCustomer(
@customerId int,
@postalcode int = 1000
)
AS
UPDATE Customer
SET PostalCode = @postalcode 
WHERE CustomerID = @customerId
GO;


EXEC SelectAllCustomer 4;

DROP PROCEDURE SelectAllCustomer;

---INDEX:
---1.CREATING INDEX:
CREATE TABLE People(
PeopleID int IDENTITY(100,11) PRIMARY KEY,
LastName varchar(255),
FirstName varchar(255),
Address varchar(255),
City varchar(255)
);

DROP TABLE People;

INSERT INTO People(LastName, FirstName, Address, City)
VALUES ('karki','Raj','hattiban','Ktm');

INSERT INTO People(LastName, FirstName, Address, City)
VALUES ('b.k','Raju','hattiban','Ktm');

INSERT INTO People(LastName, FirstName, Address, City)
VALUES ('pariyar','Rupa','hattiban','Ktm');

INSERT INTO People(LastName, FirstName, Address, City)
VALUES ('koirala','Isha','hattiban','Ktm');

SELECT *FROM People;

---CREATING INDEX WITH LASTNAME:
CREATE INDEX idx_pname
ON People(LastName);

---CREATING INDEX WITH COMBINATION OF LASTNAME AND FIRSTNAME:
CREATE INDEX idx_pname
ON People(LastName,FirstName);

---DROPING INDEX:
DROP INDEX People.idx_pname;


---TRIGGER IN SQL SERVER:
---SYNTAX:
CREATE TRIGGER schema.trigger_name
ON table_name
AFTER {INSERT,UPDATE,DELETE}
{NOT FOR REPLICATION}
AS 
{SQL Statements}


----TRIGGER:INSERT:
CREATE TABLE Employeeee(
Id INT IDENTITY(100,11) PRIMARY KEY,
Name VARCHAR(45),
Salary INT,
Gender VARCHAR(12),
Department INT
);

---INSERITNG:
INSERT INTO Employeeee
('Raju', 82000,'Male',3),
('Rabina', 52000,'Female',2),
('Rani', 25000,'Female',1),
('Ramesh', 47000,'Male',2),
('Rani', 46000,'Female',3)

SELECT *FROM Employeeee;

---1.TRIGGER: UPDATE:
CREATE TABLE Employeeee_Audit_Test
(
Id int IDENTITY,
Audit_Action text
)

---Example:
CREATE TRIGGER trInsertEmployee
ON Employee
FOR INSERT
AS 
BEGIN
Declare @Id int
SELECT @Id = Id FROM inserted
INSERT INTO Employeeee_Audit_Test
VALUES('New epmloyeeee with Id='+CAST(@Id AS VARCHAR(10))+'is added at'+CAST (Getdate() AS VARCHAR(22)))
END

--- ADDING :
INSERT INTO Employeeee VALUES('Rabin',62000,'Male',3)

SELECT *FROM Employeeee_Audit_Test;

---3.TRIGGER:DELETE:
CREATE TRIGGER trDeleteEmployee
ON Employee
FOR DELETE
AS 
BEGIN
Declare @Id int
SELECT @Id = Id FROM deleted
INSERT INTO Employeeee_Audit_Test
VALUES('An existing employeeee with Id='+CAST(@Id AS VARCHAR(10))+'is deleted at'+CAST (Getdate() AS VARCHAR(22)))
END

DELETE FROM Employeeee WHERE Id = 2;

SELECT *FROM Employeeee_Audit_Test;


--TRIGGER: REMOVE DML:
DROP TRIGGER trInsertEmployeeee;