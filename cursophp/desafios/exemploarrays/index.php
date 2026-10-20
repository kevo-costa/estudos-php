<?php 
    $alunos = array('Edson', 'Shirley', 'Maite');
    $cursos = ['PHP', 'MySQL', 'HTML', 'CSS'];
    $ficha = [10, 'Edson Maia', 39, 1.75, true];
    $bebidas = [
        "sucos" => ['acerola', 'cupuacu'],
        "refris" => ['pepsi', 'cocacola'],
        "cafes" => ['expresso', 'capuccino']
    ];
    $categorias = [];
    $categorias[0] = 'Programacao';
    $categorias[1] = 'Design';

    echo'<pre>';
        print_r($bebidas);
        echo '<hr>';
        print_r($alunos);
        echo '<hr>';
        print_r($ficha);
        echo '<hr>';
        print_r($cursos);
        echo '<hr>';
        print_r($categorias);
    echo'</pre>';

    echo '$alunos[0] <br>';
    echo $bebidas['sucos'][0];

    echo "<h2>Para adicionar no final de um array: array_push</h2>";
    array_push($alunos, "Karina", "Nancy");
    print_r($alunos);

    echo "<h2>Para adicionar no inicio de um array: array_unshift</h2>";
    array_unshift($alunos, "Kleber", "Mauricio");
    print_r($alunos);

    echo"<h2>Para apagar no final do array: array_pop</h2>";
    array_pop($alunos);
    print_r($alunos);

    echo"<h2>Para apagar no inicio do array: array_shift</h2>";
    array_shift($alunos);
    print_r($alunos);

    $quantidadedeelementos = count($alunos);
    echo "<p>Quantidade de alunos $quantidadedeelementos<p/>";

    sort($alunos);
    print_r($alunos);

    rsort($alunos);
    print_r($alunos);
?>