<?php 
require_once __DIR__ . '/../models/UsuarioModel.php';

class UsuarioController{

    // metodo index
    public function index(){
        // ta instanciando a classe
        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->listarTodos();

        require_once __DIR__ . '/../views/usuario/index.php';
    }
}
?>