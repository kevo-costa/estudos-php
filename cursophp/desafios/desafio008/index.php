<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero']?? 0;
    ?>
    <main>
        <h1>Conferir Raízes</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Digite um número:</label>
            <input type="number" name="numero" id="n">
            <button type="submit">Calcular raízes</button>
        </form>
    </main>
    <section>
        <?php 
            $raizquad = sqrt($numero);
            $raizcub = pow($numero, 1/3);
            echo "<h2>Resultado Final</h2>";
            echo "<p>Analisando o número <strong>$numero</strong> temos: </p>";
            echo "<p>A sua <strong>raíz quadrada</strong> é <strong>$raizquad</strong></p>";
            echo "<p>A sua <strong>raíz cúbica</strong> é <strong>$raizcub</strong></p>";
        ?>
    </section>
</body>
</html>