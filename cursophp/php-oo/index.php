<?php

    require_once 'autoload.php';

    use Costa\Comercial\Infraestrutura\Persistencia\CriadorConexao;

    use Costa\Comercial\Infraestrutura\Repositorio\PDORepositorioCliente;

    use Costa\Comercial\Infraestrutura\Repositorio\PDORepositorioFuncionario;

    use Costa\Comercial\Dominio\Modelo\Endereco;
    use Costa\Comercial\Dominio\Modelo\Cliente;
    use Costa\Comercial\Dominio\Modelo\Funcionario;

    echo "<pre>";

    echo "<h1>Comercial</h1>";

    $endereco1 = new Endereco(
        NULL,
        "SE", "Dores",
        "Rua Pindamonhangaba", "67", "Joao Ventura",
        "450600-000", NULL);

    $endereco2 = new Endereco(NULL, "SE", "Itabaiana", "Rua da Tal tal tal", "69", "Universitário", "475600-000", NULL);
    $endereco3 = new Endereco(NULL, "SE", "Dores", "Rua B", "500", "Fontinhas", "450600-000", NULL);
    $endereco4 = new Endereco(NULL, "SE", "Dores", "Rua A", "1000", "Pau que chora", "450600-000", NULL);

    $funcionario1 = new Funcionario(NULL, "Kevin Costa", new DateTimeImmutable("2010-10-10"), $endereco1,"Desenvolvedor", 3000.00);

    $funcionario2 = new Funcionario(NULL, "Beatriz Iasmyn", new DateTimeImmutable("2000-10-10"), $endereco1,"Designer", 2500.00);

    $funcionario3 = new Funcionario(NULL, "Tifany Costa", new DateTimeImmutable("1965-11-11"), $endereco2,"CEO", 1000000.00);

    $cliente1 = new Cliente(NULL, "Caue Maniezzo", new DateTimeImmutable("1954-12-01"), $endereco1, 2000.00);

    // echo $funcionario1;
    // echo $cliente1;
    // echo $funcionario1->getDataNascimento()->format('d/m/Y');

    // CLIENTES
    $repositorioClientes = new PDORepositorioCliente(CriadorConexao::criarConexao());

    // $repositorioClientes->salvar($cliente1);
    // $repositorioClientes->todosClientes();

    //$cliente = new Cliente(1, "Marta Luzia", new DateTimeImmutable("1954-12-01"), $endereco2, 2000.00);

    //$resultado = $repositorioClientes->ler($cliente);
    //$resultado = $repositorioClientes->todosClientes();

    // ESCREVER O RESULTADO
    /*
    foreach($resultado as $client) {
        echo $client;
    }
    */
    
    // CRIAR NOVOS CLIENTES
    $cliente2 = new Cliente(NULL, "Ana Silva", new DateTimeImmutable("1980-11-11"), $endereco2, 1800.00);
    $cliente3 = new Cliente(NULL, "Paulo Santos", new DateTimeImmutable("1991-10-10"), $endereco3, 1500.00);
    $cliente4 = new Cliente(NULL, "Bia", new DateTimeImmutable("1995-09-09"), $endereco4, 1200.00);
    //$cliente = new Cliente(8, "Bia", new DateTimeImmutable("1995-09-09"), $endereco4, 1200.00);
    $cliente = new Cliente(5, "Maria Maia", new DateTimeImmutable("1954-10-12"), $endereco4, 1100.00);

    // SALVAR NOVOS CLIENTES
    //$repositorioClientes->salvar($cliente2);
    //$repositorioClientes->salvar($cliente3);
    //$repositorioClientes->salvar($cliente4);
    
    // DELETE ou APAGAR
    //$repositorioClientes->delete($cliente);

    // UPDATE ou ATUALIZAR CLIENTE
    //$repositorioClientes->updateCliente($cliente);

    // UPDATE ou ATUALIZAR ENDERECO
    //$endereco = new Endereco(NULL, "AP", "Macapá", "Av. da Cidade", "100", "Centro", "68900-000",$cliente->getId());
    //$endereco = new Endereco(NULL, "AP", "Santana", "Rua. da Cidade", "10", "Central", "68900-000",$cliente->getId());
    //$repositorioClientes->atualizaEndereco($endereco, $cliente);

    //$resultado = $repositorioClientes->todosClientes();
    //$resultado = $repositorioClientes->todosClientesComEndereco();

    // ESCREVER
    //$resultado = ["Sem dados"];
    //foreach($resultado as $client) { echo $client; }    

    // FUNCIONARIO
    $repositorioFuncionarios = new PDORepositorioFuncionario(CriadorConexao::criarConexao());

    // SALVAR ou CRIAR NOVO
    $repositorioFuncionarios->salvar($funcionario1);
    $repositorioFuncionarios->salvar($funcionario2);
    $repositorioFuncionarios->salvar($funcionario3);

    // VER TODOS
    //$resultado = $repositorioFuncionarios->todosFuncionarios();
    $resultado = $repositorioFuncionarios->todosFuncionariosComEndereco();

    // ESCREVER
    foreach($resultado as $func) { echo $func; }

echo "</pre>";
