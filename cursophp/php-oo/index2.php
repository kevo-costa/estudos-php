<?php 
//PRODUTOS
//
require_once 'autoload.php';
//
use Costa\Comercial\Infraestrutura\Persistencia\CriadorConexao;
use Costa\Comercial\Infraestrutura\Repositorio\PDORepositorioProduto;
use Costa\Comercial\Dominio\Modelo\Produto;
//
use Costa\Comercial\Dominio\Modelo\Cliente;
use Costa\Comercial\Dominio\Modelo\Funcionario;
use Costa\Comercial\Dominio\Modelo\Pessoa;
use Costa\Comercial\Dominio\Modelo\Endereco;
//
echo"<pre>";
    $repositorio = new PDORepositorioProduto(CriadorConexao::criarConexao());
    var_dump($repositorio);
    //
    $produto1 = new Produto(NULL, "Tablet", 3000);
    var_dump($produto1);
    //
    $produto2 = new Produto(NULL, "Notebook", 4000);
    var_dump($produto2);
    //
    $produto3 = new Produto(NULL, "Mouse", 150);
    var_dump($produto3);
    //
    $produto4 = new Produto(NULL, "Teclado Mecanico", 450);
    var_dump($produto4);
    //
    $produto5 = new Produto(NULL, "Fone de Ouvido", 500);
    var_dump($produto5);
    //
    $produto6 = new Produto(NULL, "Cadeira", 1200);
    var_dump($produto6);
    //
    $produto7 = new Produto(NULL, "Mousepad", 100);
    var_dump($produto7);
    //
    //$produto0 = new Produto(12, "Tablet Samsung", 4500);
    //
    /*
    //ADICIONANDO PRODITOS COM METODO SALVAR
    $repositorio->salvar($produto1);
    $repositorio->salvar($produto2);
    $repositorio->salvar($produto3);
    $repositorio->salvar($produto4);
    */
    //UPDATE PRODUTO
    //$repositorio->updateProduto($produto0);
    //DELETAR PRODUTO
    //$repositorio->deleteProduto($produto0);
    //LER PRODUTO POR ID
    //$repositorio->readProduto($produto0);
    //
    //EXIBIR TODOS PRODUTOS
echo"</pre>";
?>