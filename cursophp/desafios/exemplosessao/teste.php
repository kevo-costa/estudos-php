<?php
    //COMECAR SESSAO
    session_start(); 

    echo "<h2>Teste</h2>";

    echo "Nome: {$_SESSION['nome']}, Idade: {$_SESSION['idade']} anos <br>";
    
    //ESCREVER ID DA SESSAO
    echo "ID" . session_id();
?>