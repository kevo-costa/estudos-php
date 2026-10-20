<?php 
    $host = "127.0.0.1";
    $user = "root";
    $password = "20304090Ke@$";
    $dbname = "projeto01";

    //FAZER CONEXAO
    $con = new mysqli($host, $user, $password, $dbname);

    //TESTAR CONEXAO
    if($con->connect_errno){
        echo "<p>ERRO: (" . $con -> connect_errno .") " . $con -> connect_errno . "</p>";
        exit;
    } else{
        echo "<p>Conexao realizada com sucesso</p>";
    }

    //FECHAR CONEXAO
    $con -> close();
?>