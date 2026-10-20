<?php 



    //funcoes sem parametros e sem retorno
    function exibeOlaMundo()
    {
        echo'<p>Ola Mundo</p>';
    }
    exibeOlaMundo();


    //funcoes com parametro e sem retorno
    function exibeMensagem(string $mensagem)
    {
        echo'<p>$mensagem</p>';
    }
    exibeMensagem('Bom Dia');


    //funcoes com parametros e com retorno
    function somarDoisNumeros(float $n1, float $n2): float //o ":" + "float" serve para indicar o tipo de dado do return
    {
        return $n1 + $n2;
    }
    $resultado = somarDoisNumeros(1, 2);
    echo "<p>$resultado</p>";
?>