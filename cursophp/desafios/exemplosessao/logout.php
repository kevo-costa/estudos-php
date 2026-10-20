<?php 
    session_start();
    
    //LIMPAR VARIAVEIS DE SESSAO
    session_unset();

    //FINALIZAR SESSAO
    session_destroy();

    echo "<p>Logout</p>";
?>