## Sección 4: MySQL
<details>
<summary>Pregunta 1: Escribe una consulta SQL para crear una base de datos llamada company y una tabla llamada employees...</summary>

```sql
CREATE DATABASE company;
USE company;

CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    position VARCHAR(50),
    salary DECIMAL(10, 2),
    hire_date DATE
);
```
</details>

<details> 
<summary>Pregunta 2: Explica la diferencia entre una clave primaria (Primary Key) y una clave foránea (Foreign Key) en MySQL. ¿Cuándo y por qué se utilizan?</summary>

* Una clave primaria (Primary Key) es un campo o conjunto de campos en una tabla que identifica de manera única cada fila de la tabla. Se utiliza para garantizar que no haya dos filas con la misma clave primaria y para permitir un acceso rápido a las filas.

* Una clave foránea (Foreign Key) es un campo o conjunto de campos en una tabla que se utiliza para vincular dos tablas. El campo de clave foránea en una tabla corresponde a la clave primaria de otra tabla. Se utiliza para mantener la integridad referencial entre las tablas. 
*</details>

<details> <summary>Pregunta 3: Escribe una consulta SQL para insertar tres registros en la tabla employees creada en la pregunta 2.</summary>

```sql
INSERT INTO employees (name, position, salary, hire_date)
VALUES ('John Doe', 'Software Engineer', 60000.00, '2022-01-01'),
       ('Jane Smith', 'Product Manager', 80000.00, '2021-03-15'),
       ('Bob Johnson', 'Data Analyst', 70000.00, '2020-10-30');
```
</details>

<details> <summary>Pregunta 4: Muestra cómo actualizar el salario de un empleado específico en la tabla employees. Por ejemplo, actualiza el salario del empleado con id = 1 a 60000.00.</summary>

```sql
UPDATE employees
SET salary = 60000.00
WHERE id = 1;
```
</details>

<details> <summary>Pregunta 5: Escribe una consulta SQL para seleccionar todos los empleados cuyo salario sea mayor a 50000.00 y ordenarlos por el campo hire_date en orden descendente.</summary>

```sql
SELECT *
FROM employees
WHERE salary > 50000.00
ORDER BY hire_date DESC;
```
</details>

<details> <summary>Pregunta 6: ¿Qué es una transacción en MySQL y cómo se utiliza? Proporciona un ejemplo de uso.</summary>

* Una transacción en MySQL es un conjunto de operaciones que se tratan como una sola unidad de trabajo. Si todas las operaciones se completan con éxito, los cambios se confirman y se hacen permanentes. Si alguna de las operaciones falla, todos los cambios se deshacen.

* Las transacciones se utilizan para garantizar la integridad de los datos cuando se realizan varias operaciones relacionadas.
```sql
START TRANSACTION;

UPDATE accounts
SET balance = balance - 1000
WHERE account_number = 123;

UPDATE accounts
SET balance = balance + 1000
WHERE account_number = 456;

COMMIT;
```
</details>

<details> <summary>Pregunta 7: Crea una vista en MySQL llamada high_earning_employees que seleccione todas las columnas de los empleados cuyo salario sea mayor a 70000.00.</summary>

```sql
CREATE VIEW high_earning_employees AS
SELECT *
FROM employees
WHERE salary > 70000.00;
```
</details>
</details>

