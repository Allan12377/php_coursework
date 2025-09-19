<?php
require_once 'db.php';

class Employee {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function create($name, $email, $department, $position, $date_hired) {
        $stmt = $this->db->prepare("INSERT INTO employees (name, email, department, position, date_hired) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $department, $position, $date_hired);
        return $stmt->execute();
    }

    public function read() {
        $result = $this->db->query("SELECT * FROM employees");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get($id) {
        $stmt = $this->db->prepare("SELECT * FROM employees WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function update($id, $name, $email, $department, $position, $date_hired) {
        $stmt = $this->db->prepare("UPDATE employees SET name=?, email=?, department=?, position=?, date_hired=? WHERE id=?");
        $stmt->bind_param("sssssi", $name, $email, $department, $position, $date_hired, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM employees WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>