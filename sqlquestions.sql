| id | name    |
| -- | ------- |
| 1  | John    |
| 2  | Sarah   |
| 3  | Michael |

| id | customer_id | amount |
| -- | ----------- | ------ |
| 1  | 1           | 100    |
| 2  | 1           | 200    |
| 3  | 2           | 50     |
| 4  | 2           | 70     |
| 5  | 2           | 30     |


-- question 1: Write a SQL query to return each customer name and the total amount spent by each customer. 
SELECT c.id, c.name, COALESCE(SUM(o.amount), 0) AS total_spent
FROM customers c 
LEFT JOIN orders o ON c.id = o.customer_id
GROUP BY c.id, c.name;  

-- answer should be 
| id | name    | total_spent |
| -- | ------- | ----------- |
| 1  | John    | 300         |
| 2  | Sarah   | 150         |
| 3  | Michael | 0           |

-- question 2: Write a SQL query to return customers who made more then 2 orders.
SELECT   c.id, c.name FROM customers c
JOIN orders o ON c.id = o.customer_id
GROUP BY c.id, c.name
HAVING COUNT(o.id) > 2;

-- answer should be
| id | name  |
| -- | ----- |
| 2  | Sarah | 

-- question 3: Return the Customer who has spent the most money overall, only return 1 row.

SELECT c.id, c.name, COALESCE(SUM(o.amount), 0) AS total_spent
FROM customers c 
LEFT JOIN orders o ON c.id = o.customer_id
GROUP BY c.id, c.name
ORDER BY total_spent DESC
LIMIT 1;

-- answer should be
| id | name  | total_spent |
| -- | ----- | ----------- |
| 1  | John  | 300         |


-- question 4: return customers who have never placed an order.
SELECT c.id, c.name FROM customers c
LEFT JOIN orders o ON c.id = o.customer_id
WHERE o.id is NULL;
GROUP BY c.id, c.name;

-- answer should be
| id | name    |
| -- | ------- |
| 3  | Michael |



table customers (
    id INT PRIMARY KEY,
    name VARCHAR(255)
);

table orders (
    id INT PRIMARY KEY,
    customer_id INT,
    amount DECIMAL(10, 2),
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

// return each customer and the number of orders they have made. include customers who have not made any orders and Order result by numbers of orders descending.

SELECT c.id, c.name, count(o.id) AS orders_count
FROM customers c
LEFT JOIN orders o ON c.id = o.customer_id
GROUP BY c.id, c.name
ORDER BY orders_count DESC;


// return the highest order amount made by each customer, show customer name, show highest order amount, customers with no orders should show 0

SELECT c.id, c.name, COALESCE(MAX(o.amount), 0) AS highest_order
FROM customers c
LEFT JOIN orders o ON c.id = o.customer_id
GROUP BY c.id, c.name




tables Employees (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    department_id INT,
    FOREIGN KEY (department_id) REFERENCES Departments(id)
);

tables Departments (
    id INT PRIMARY KEY,
    department_name VARCHAR(255)
);

// write a query to return employee_name | department_name

SELECT e.name AS employee_name, d.department_name 
FROM Employees e
LEFT JOIN Departments d ON e.department_id = d.id


table Orders (
    id INT PRIMARY KEY,
    customer_id INT,
    amount DECIMAL(10, 2),
    FOREIGN KEY (customer_id) REFERENCES Customers(id)
);

// write a queery to return customer id | total_spent, only include customers who have spent more than 500

SELECT customer_id, SUM(amount) AS total_spent
FROM orders o
GROUP By customer_id 
HAVING total_spent > 500;


table Customers {
    id int [pk, increment]
    name varchar
}

table Orders {
    id int [pk, increment]
    customer_id int [ref: > Customers.id]
    amount decimal
}

// write a query to return customer_name | total_orders

SELECT c.id, c.name as customer_name, Count(o.id) AS total_orders
From Customers c
LEFT JOIN Orders o ON c.id = o.customer_id
GROUP By c.id, c.name
ORDER BY total_orders DESC;


// return customers who have at atleast one order greater than 1000

SELECT DISTINCT c.name AS customer_name
FROM Customers c
JOIN Orders o ON c.id = o.customer_id
WHERE o.amount > 1000;

