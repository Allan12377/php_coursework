
1. Create the database:
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
    
