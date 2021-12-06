-- Vytvoření databáze
CREATE DATABASE myDB;

-- Vytvoření tabulky
CREATE TABLE zamestnanci
(
    ID    int,
    Jmeno varchar(255),
);

-- Vložení dat do tabulky
INSERT INTO zamestnanci
VALUES (1, "Jakub");

-- Výběr dat z tabulky
SELECT Jmeno
FROM zamestnanci;

-- Přidat sloupec do tabulky
ALTER TABLE zamestnanci
    ADD Adresa varchar(255);

-- Odebrat sloupec z tabulky
ALTER TABLE zamestnanci
DROP COLUMN Adresa varchar(255);

-- Změnit datový typ sloupce
ALTER TABLE zamestnanci
    MODIFY COLUMN ID varchar(255);

-- Komplexní tabulka (s omezeními)
CREATE TABLE zamestatnanci (
                               ID int NOT NULL AUTO_INCREMENT,
                               Jmeno varchar(255) NOT NULL,
                               Prijmeni varchar(255) NOT NULL,
                               Adresa varchar(255),
                               PRIMARY KEY(ID)
);

-- Podmíněný výběr
SELECT name
FROM employees
WHERE country = 'Austria';

-- Podmíněný výběr BETWEEN
SELECT phone, name
FROM employees
WHERE ID BETWEEN 15 AND 25;

-- Podmíněný výběr IN
SELECT name, phone
FROM employees
WHERE country IN ('Colombia', 'Brazil');

-- Podmíněný výběr LIKE
SELECT *
FROM employees
WHERE name LIKE 'B%y';

-- JOIN
SELECT zamestatnanci.Adresa,pracoviste.Nazev
FROM zamestatnanci
INNER JOIN pracoviste ON zamestatnanci.IDpracoviste=pracoviste.ID;

-- UPDATE
UPDATE `employees` S
SET `country` = 'Brazil'
WHERE `employees`.`id` = 14;

-- DELETE
DELETE FROM employees
WHERE id BETWEEN 5 AND 10;

-- LIMIT
SELECT name
FROM employees
WHERE name LIKE 'c%'
LIMIT 3;

-- MIN a MAX
SELECT MAX(id)
FROM employees;

-- COUNT
SELECT COUNT(*)
FROM employees
WHERE country IN ('Brazil', 'China', 'India', 'Colombia', 'Vietnam', 'Nigeria', 'Chile', 'Pakistan', 'Netherlands');

-- ORDER BY
SELECT *
FROM employees
ORDER BY name, address

-- GROUP BY
SELECT COUNT(id), address
FROM employees
GROUP BY address