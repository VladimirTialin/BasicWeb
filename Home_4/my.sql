CREATE TABLE employees
(
id int AUTO_INCREMENT PRIMARY KEY,
name TEXT NOT NULL,
age int NOT NULL,
address TEXT NOT NULL
);
INSERT employees (name, age, address)
VALUES
("Сергей", 25, "Москва"),
("Иван", 17, "Балашиха"),
("Владимир", 31, "Омск"),
("Андрей", 25, "Владивосток"),
("Александр", 45, "Иркутск"),
("Екатерина", 19, "Москва"),
("Мария", 15, "Москва"),
("Петр", 20, "Москва"),
("Сергей", 23, "Истра"),
("Иван", 26, "Ижевск");
select * from employees where address="Москва" and age between 18 and 30;