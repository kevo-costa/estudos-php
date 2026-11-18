<?php 
    namespace Costa\Comercial\Dominio\Repositorio;
    //
    use Costa\Comercial\Dominio\Modelo\Funcionario;
    //
    interface RepositorioFuncionarios
    {
    public function todosFuncionarios(): array;
    //
    public function todosFuncionariosComEndereco(): array;
    //
    public function salvar(Funcionario $funcionario): bool;
    //
    public function ler(Funcionario $funcionario): array;
    //
    public function delete(Funcionario $funcionario): bool;
    //
    public function createFuncionario(Funcionario $funcionario): bool;
    //
    public function updateFuncionario(Funcionario $funcionario): bool;
    }

?>