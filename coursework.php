<?php
require_once 'Database.php';
require_once 'Student.php';

$db = new Database();
$conn = $db->connect();
$student = new Student($conn);

// Insert
if (isset($_POST['add'])) {
    $student->add($_POST['name'], $_POST['email'], $_POST['age']);
}

// Update
if (isset($_POST['update'])) {
    $student->update($_POST['id'], $_POST['name'], $_POST['email'], $_POST['age']);
}

// Delete
if (isset($_POST['delete'])) {
    $student->delete($_POST['id']);
}

// Retrieve
$students = $student->getAll();
$db->close();
?>
<!-- Display Students -->
<table>
<tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th></tr>
<?php foreach($students as $s): ?>
<tr>
    <td><?= $s['id'] ?></td>
    <td><?= htmlspecialchars($s['name']) ?></td>
    <td><?= htmlspecialchars($s['email']) ?></td>
    <td><?= $s['age'] ?></td>
</tr>
<?php endforeach; ?>
</table>