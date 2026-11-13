<?php
namespace Costa\Comercial\Dominio\Repositorio ;
//
use Costa\Comercial\Dominio\Modelo\Cliente ;
//
interface RepositorioClientes
{
    public function todosClientes(): array;
    //
    public function salvar(Cliente $cliente): bool;
    //
    public function ler(Cliente $cliente): array;
    //
    public function delete(Cliente $cliente): bool;
    //
    public function createCliente(Cliente $cliente): bool;
    //
    public function updateCliente(Cliente $cliente): bool;
    //

}
?>