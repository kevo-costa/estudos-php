<?php 
    namespace Costa\Comercial\Dominio\Modelo;
    interface Autenticar 
    {
        public function login(Funcionario $funcionario, string $senha): void;
    }
?>