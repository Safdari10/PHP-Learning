
// SQL Practice

// 1.
SELECT c.name AS customer_name, SUM(o.amount) as total_spent
FROM Customers c
JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.name

// 2.
SELECT c.id, c.name as customer_name, COUNT(o.id) as order_count
FROM Customers c
Join Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name
HAVING COUNT(o.id)> 3

// 3.
SELECT c.id, c.name AS customer_name, SUM(o.amount) as total_spent
FROM Customers c
JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name
ORDER BY total_spent DESC
LIMIT 1

// 4.
SELECT c.id, c.name AS customer_name, COALESCE(COUNT(o.id), 0) as order_count
FROM Customers c
LEFT JOIN Orders o
ON o.id = c.customer_id
GROUP BY c.id, c.name

// 5.
SELECT c.id, c.name AS customer_name, COALESCE(COUNT(o.id), 0) as order_count
FROM Customers c
LEFT JOIN Orders o
ON c.id = c.customer_id
GROUP BY c.id, c.name
HAVING COUNT(o.id) = 0