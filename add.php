<?php
require_once 'Employee.php';
$employee = new Employee();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employee->create($_POST['name'], $_POST['email'], $_POST['department'], $_POST['position'], $_POST['date_hired']);
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add Employee</h1>
    <form method="post">
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Department: <input type="text" name="department" required></label><br>
        <label>Position: <input type="text" name="position" required></label><br>
        <label>Date Hired: <input type="date" name="date_hired" required></label><br>
        <button type="submit">Add</button>
    </form>
    <a href="index.php">Back</a>
</body>
</html>