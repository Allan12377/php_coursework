# PHP Employee CRUD System

## Setup
1. **Create the database:**
   - Open phpMyAdmin or MySQL CLI and run:
     ```sql
     CREATE DATABASE organization_db;
     USE organization_db;
     CREATE TABLE employees (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100) NOT NULL,
         email VARCHAR(100) NOT NULL,
         department VARCHAR(100) NOT NULL,
         position VARCHAR(100) NOT NULL,
         date_hired DATE NOT NULL
     );
     ```
2. **Configure database credentials:**
   - Edit `db.php` if your MySQL username/password is different.

3. **Run the app:**
   - Place the `php-crud` folder in your web server's root (e.g., `htdocs` for XAMPP).
   - Open `http://localhost/php-crud/index.php` in your browser.

## Features
- Add, view, edit, and delete employee records
- Simple OOP PHP with MySQLi
- Minimal, clean UI

---

**Note:**
- This is a basic demo. Add validation and security for production use.
- You can extend this to manage other record types as needed.
