# Secure PHP + MySQL Connection Example (PDO)

This repository contains a **modern, secure example of connecting PHP to MySQL 8.x using PDO**.  
It’s a lightweight snippet you can drop into any project to establish a safe and reusable database connection.

✅ Features:
- Uses **PDO** (PHP Data Objects) for modern database access  
- Includes **error handling** with exceptions  
- Uses **UTF-8 (utf8mb4)** for full emoji + multilingual support  
- Shows how to use **prepared statements** to prevent SQL injection  

---

## 📌 Why This Tutorial?

Many PHP tutorials online are **outdated**, still using `mysqli_connect()` or even the long-deprecated `mysql_connect()`.  
This example demonstrates the **correct way to connect PHP to MySQL in 2025** using PDO, which is:
- Secure 🔒  
- Flexible (supports multiple databases, not just MySQL)  
- Easy to maintain and extend  

---

## 📂 Files in This Repository

- `db.php` → Creates the reusable PDO connection  
- `example.php` → Demonstrates a simple query  

---

## 🚀 Quick Start Tutorial

Follow these steps to run the example from scratch:

### Step 1. Configure Database Settings
Edit `db.php` with your MySQL connection details:

```php
$host = 'localhost';
$db   = 'your_database';
$user = 'your_username';
$pass = 'your_password';
```

---

### Step 2. Create a Test Table
Run this SQL in your MySQL database (for example, using phpMyAdmin or the MySQL CLI):

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

INSERT INTO users (name) VALUES ('Alice'), ('Bob');
```

---

### Step 3. Run the Example
If you have PHP installed locally, run:

```bash
php example.php
```

Expected output:

```
1: Alice
2: Bob
```

---

## 🔑 db.php – PDO Connection

```php
<?php
// db.php - Secure PDO MySQL connection

$host = 'localhost';      // or your DB host
$db   = 'test_db';        // database name
$user = 'root';           // database user
$pass = '';               // database password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // throw exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch assoc arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                  // use real prepared stmts
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
```

---

## 📄 example.php – Query Example

```php
<?php
require 'db.php';

// Example: fetch all users
$stmt = $pdo->query("SELECT id, name FROM users ORDER BY id ASC");

while ($row = $stmt->fetch()) {
    echo $row['id'] . ": " . $row['name'] . PHP_EOL;
}
```

---

## ⭐ Why Use PDO?

PDO is the recommended way to connect PHP with databases:
- Works with **MySQL, PostgreSQL, SQLite, and more**  
- Easy to switch drivers (only change the DSN)  
- Built-in support for **prepared statements**  
- Cleaner, modern API compared to `mysqli_*`  

---

## 📚 Learn More

- [PHP PDO Manual](https://www.php.net/manual/en/book.pdo.php)  
- [PHP Prepared Statements](https://www.php.net/manual/en/pdo.prepared-statements.php)  
- [UTF-8 in MySQL](https://dev.mysql.com/doc/refman/8.0/en/charset-unicode-utf8mb4.html)  

---

## 👨‍💻 About This Project

This tutorial is maintained by **[Morton Technologies LLC](https://mortontech.ai)**, a custom software development company specializing in PHP, JavaScript, AI, and cloud solutions.  

We also operate **[RagDevelopment.com](https://ragdevelopment.com)**, where we build advanced **Retrieval-Augmented Generation (RAG)** solutions and custom AI-powered applications for businesses.  

Whether you need **secure PHP/MySQL applications** or **cutting-edge AI integrations**, we’ve been building scalable solutions for over 20 years.  

---

### ⭐ Support This Project
If you find this tutorial helpful:
- Star ⭐ this repo  
- Share it with other PHP developers  
- Follow [Morton Technologies](https://mortontechdev.com) and [RagDevelopment.com](https://ragdevelopment.com) for more tutorials and projects  
