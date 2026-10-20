<?php 
    function retornarMediaDeIdadesDaTurma($idade1, $idade2, $idade3, $idade4): string
    {
        $media = ($idade1 + $idade2 + $idade3 + $idade4) / func_num_args() . '<br>';
        return $media;
    }
    echo retornarMediaDeIdadesDaTurma(20, 30, 18, 40);
?>