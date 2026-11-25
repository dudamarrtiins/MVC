<?php 
class UsuarioModel{

//método:
    public function listarTodos(){
        return[ // vai retornar isso aqui:
            ['id' => 1, 'nome' => 'maria eduarda', 'email' => 'duda@gmail.com'],
            ['id' => 2, 'nome' => 'nicoli', 'email' => 'nicoli@gmail.com'],
            ['id' => 3, 'nome' => 'luna', 'email' => 'luna@gmail.com'],
            ['id' => 4, 'nome' => 'mirela', 'email' => 'mirela@gmail.com'],
        ];

    }

}
?>