<?php 
    //A ORIENTACAO A OBJETOS TEM COMO OBJETIVO ABSTRAIR ALGO DA VIDA REAL E TRANSFORMAR EM UM OBJETO VIRTUAL
    require_once 'Pessoa.php';
    //INSTANCIAR OU CRIAR OBJETO DO TIPO PESSOA
    $pessoa1 = new Pessoa("Kevin Costa", 21); 
    $pessoa2 = new Pessoa("Beatriz Iasmyn", 19);
    $pessoa3 = new Pessoa("Guilherme Silva", 20);
    //TIRANDO A REFERENCIA A PESSOA 3
    unset($pessoa3); 
    //
    echo "<p>Numero de Pessoas:" . Pessoa::getNumDePessoas() . "</p>";
    //SETANDO VALORES PARA ATRIBUTOS DE OBJETOS
    /*
    $pessoa1->nome = "Kevin Costa";
    $pessoa1->idade = 21;
    $pessoa2->nome = "Beatriz Iasmyn";
    $pessoa2->idade = 19;
    */
    //PEGANDO OU ESCREVENDO CONTEUDO DE ATRIBUTOS
    /*
    echo "<p>Nome Pessoa1: $pessoa1->nome</p>";
    echo "<p>Idade Pessoa1: $pessoa1->idade</p>";
    echo "<hr>";
    echo "<p>Nome Pessoa2: $pessoa2->nome</p>";
    echo "<p>Idade Pessoa2: $pessoa2->idade</p>";
    echo "<hr>";
    */
    //USANDO METODOS ACESSORES
    $pessoa1 -> setNome("Kevin Costa dos Santos");
    $pessoa1 -> setIdade(21);
    //
    $pessoa2 -> setNome("Beatriz Iasmyn Azevedo de Oliveira");
    $pessoa2 -> setIdade(19);
    //
    echo "<p>Nome: {$pessoa1->getNome()}</p>";
    echo "<p>Idade: {$pessoa1->getIdade()} anos.</p>";
    //
    echo "<p>Nome: {$pessoa2->getNome()}</p>";
    echo "<p>Idade: {$pessoa2->getIdade()} anos.</p>";
    //
    echo "<pre>";
        var_dump($pessoa1);
        var_dump($pessoa2);
    echo "</pre>";
?>