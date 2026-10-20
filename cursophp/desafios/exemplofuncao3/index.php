<?php 
    $makefoo = true;
    bar();
    if ($makefoo) 
        {
        function foo()
        {
            echo "Eu não existo até que o programa passe por aqui.";
        }
    }
    if ($makefoo) foo();
    function bar()
    {
        echo "Eu existo assim que o programa começar";
    }
?>