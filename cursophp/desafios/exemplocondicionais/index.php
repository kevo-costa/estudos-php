<?php 
    $notafinal = 6.9;
    if ($notafinal >= 7){
        echo "<p>Aprovado</p>";
    } else if ($notafinal < 5){
        echo "<p>Reprovado</p>";
    } else {
        echo "<p>Recuperação</p>";
    }

    $situacao = ($notafinal >= 7) ? "Aprovado" : "Reprovado";
    echo "<p>$situacao</p>";

    $opcao = 1;
    switch ($opcao){
            case 1 :
                echo "<p>Opcao 1 Escolhida</p>";
                break;
            case 2 :
                echo "<p>Opcao 2 Escolhida</p>";
                break;
            default : 
            echo "<p>Opcao Invalida</p>";
            break;
    };

    $nomes = ["Edson", "Maite", "Juliana"];
    $quant = count($nomes);
    for ($i = 0; $i < $quant; $i++){
        echo "<p>$nomes[$i]</p>";
    };

    foreach ($nomes as $key => $nomes) {
                echo "<p>$key : $nomes</p>";
    };

    $contador = 0;
    while ($contador < $quant){
        echo "<p>$nomes[$contador]</p>";
        $contador++;
    };

    $cont2 = 0;
    do {
        echo "<p>$nomes[$cont2]</p>";
        $cont2 ++;
    } while ($cont2 < $quant);
?>