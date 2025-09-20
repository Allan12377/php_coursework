<?php
require_once 'Employee.php';
$employee = new Employee();
$employees = $employee->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Employee Records</h1>
    <a href="add.php">Add Employee</a>
    <table border="1" cellpadding="8" cellspacing="0">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Position</th>
            <th>Date Hired</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($employees as $emp): ?>
        <tr>
            <td><?= $emp['id'] ?></td>
            <td><?= $emp['name'] ?></td>
            <td><?= $emp['email'] ?></td>
            <td><?= $emp['department'] ?></td>
            <td><?= $emp['position'] ?></td>
            <td><?= $emp['date_hired'] ?></td>
            <td>
                <a href="edit.php?id=<?= $emp['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $emp['id'] ?>" onclick="return confirm('Delete this employee?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>