
// SQL Practice

// 1.
SELECT c.id, c.name AS customer_name, SUM(o.amount) as total_spent
FROM Customers c
JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name

// 2.
SELECT c.id, c.name as customer_name, COUNT(o.order.id) as order_count
FROM Customers c
Join Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name
HAVING order_count > 3

// 3.
SELECT c.id, c.name AS customer_name, SUM(o.amount) as total_spent
FROM Customers c
JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name
SORT BY total_spent DESC
LIMIT 1

// 4.
SELECT c.id, c.name AS customer_name, COALESCE(COUNT(o.id), 0) as order_count
FROM Customers c
JOIN Orders o
ON o.id = c.customer_id
GROUP BY c.id, c.name

// 5.
SELECT c.id, c.name AS customer_name, COALESCE(COUNT(o.id), 0) as order_count
FROM Customers c
JOIN Orders o
ON o.id = c.customer_id
GROUP BY c.id, c.name
WHERE order_count = 0