<?php
require_once __DIR__ . '/../../config/database.php';

class ClienteModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function insertar($cliente) {
        $sql = "INSERT INTO clientes (nombre, apellido, correo, ciudad, fecha_nacimiento) VALUES (:nombre, :apellido, :correo, :ciudad, :fecha_nacimiento)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':nombre', $cliente['nombre']);
        $stmt->bindParam(':apellido', $cliente['apellido']);
        $stmt->bindParam(':correo', $cliente['correo']);
        $stmt->bindParam(':ciudad', $cliente['ciudad']);
        $stmt->bindParam(':fecha_nacimiento', $cliente['fecha_nacimiento']);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function obtenerTodos() {
        $sql = "SELECT * FROM clientes";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $sql = "SELECT * FROM clientes WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($cliente) {
        $sql = "UPDATE clientes SET nombre = :nombre, apellido = :apellido, correo = :correo, ciudad = :ciudad, fecha_nacimiento = :fecha_nacimiento WHERE id = :id";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $cliente['id']);
        $stmt->bindParam(':nombre', $cliente['nombre']);
        $stmt->bindParam(':apellido', $cliente['apellido']);
        $stmt->bindParam(':correo', $cliente['correo']);
        $stmt->bindParam(':ciudad', $cliente['ciudad']);
        $stmt->bindParam(':fecha_nacimiento', $cliente['fecha_nacimiento']);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function eliminar($id) {
        $sql = "DELETE FROM clientes WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
