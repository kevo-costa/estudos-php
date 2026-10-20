<?php
    //COMECAR SESSAO
    session_start(); 

    //CRIAR VARIAVEL DE SESSAO
    $_SESSION["nome"] = "Kevin";
    $_SESSION["idade"] = 21;

    echo "<h2>Sessao</h2>";

    echo "Nome: {$_SESSION['nome']}, Idade: {$_SESSION['idade']} anos <br>";
    
    //ESCREVER ID DA SESSAO
    echo "ID" . session_id();


?>