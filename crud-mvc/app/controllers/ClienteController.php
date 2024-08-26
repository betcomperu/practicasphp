<?php
require_once __DIR__ . '/../models/ClienteModel.php';

class ClienteController {
    private $model;

    public function __construct() {
        $this->model = new ClienteModel();
    }

    public function index() {
        $clientes = $this->model->obtenerTodos();
        require __DIR__ . '/../views/clientes/index.php';
    }

    public function create() {
        require __DIR__ . '/../views/clientes/create.php';
    }

    public function store($data) {
        $this->model->insertar($data);
        header('Location: /');
    }

    public function edit($id) {
        $cliente = $this->model->obtenerPorId($id);
        require __DIR__ . '/../views/clientes/edit.php';
    }

    public function update($data) {
        $this->model->actualizar($data);
        header('Location: /');
    }

    public function delete($id) {
        $this->model->eliminar($id);
        header('Location: /');
    }

    public function show($id) {
        $cliente = $this->model->obtenerPorId($id);
        require __DIR__ . '/../views/clientes/show.php';
    }
}
?>
