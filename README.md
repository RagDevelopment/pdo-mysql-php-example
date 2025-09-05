# Secure PHP + MySQL Connection Example (PDO)

This repository contains a **modern, secure example of connecting PHP to MySQL 8.x using PDO**.  
It’s a lightweight snippet you can drop into any project to establish a safe and reusable database connection.

✅ Features:
- Uses **PDO** (PHP Data Objects) for modern database access  
- Includes **error handling** with exceptions  
- Uses **UTF-8 (utf8mb4)** for full emoji + multilingual support  
- Shows how to use **prepared statements** to prevent SQL injection  

---

## 📌 Usage

Clone this repo or copy the two files:

- `db.php` → Creates the reusable PDO connection  
- `example.php` → Demonstrates a simple query  

### Step 1. Configure Database Settings
Edit `db.php` with your MySQL connection details:

```php
$host = 'localhost';
$db   = 'your_database';
$user = 'your_username';
$pass = 'your_password';
