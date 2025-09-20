<?php
require_once 'Employee.php';
$employee = new Employee();
$id = $_GET['id'] ?? null;
if (!$id) { header('Location: index.php'); exit; 
}

$emp = $employee->get($id);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employee->update($id, $_POST['name'], $_POST['email'], $_POST['department'], $_POST['position'], $_POST['date_hired']);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Employee</h1>
    <form method="post">
        <label>Name: <input type="text" name="name" value="<?= $emp['name'] ?>" required></label><br>

        <label>Email: <input type="email" name="email" value="<?= $emp['email'] ?>" required></label><br>

        <label>Department: <input type="text" name="department" value="<?= $emp['department'] ?>" required></label><br>

        <label>Position: <input type="text" name="position" value="<?= $emp['position'] ?>" required></label><br>

        <label>Date Hired: <input type="date" name="date_hired" value="<?= $emp['date_hired'] ?>" required></label><br>

        <button type="submit">Update</button>
    </form>

    <a href="index.php">Back</a>
</body>
</html>