<?php
require_once 'Employee.php';
$employee = new Employee();
$id = $_GET['id'] ?? null;
if ($id) {
    $employee->delete($id);
}
header('Location: index.php');
exit;
