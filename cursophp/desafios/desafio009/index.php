<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero1 = $_GET['numero1'] ;
        $peso1 = $_GET['peso1'] ;
        $numero2 = $_GET['numero2'] ;
        $peso2 = $_GET['peso2'] ;
    ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero1">Digite o primeiro número:</label>
            <input type="number" name="numero1" id="idnumero1" min="1" required>
            <label for="peso1">Digite o peso do primeiro numero:</label>
            <input type="number" name="peso1" id="idpeso1" min="1" required>
            <label for="numero2">Digite o segundo número:</label>
            <input type="number" name="numero2" id="idnumero2" min="1" required>
            <label for="peso2">Digite o peso do segundo número:</label>
            <input type="number" name="peso2" id="idpeso2" min="1" required>
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section>
        <h2>Cálculo das Medidas</h2>
        <?php 
            $media_simples = ($numero1 + $numero2) / 2;
            $media_ponderada = (($numero1 * $peso1) + ($numero2 * $peso2)) / ($peso1 + $peso2);
            echo "<p><h3>Analisando os valores <strong>$numero1</strong> e <strong>$numero2</strong>:</h3></p>";
            echo "<p>A <strong>Média Aritmética Simples</strong> entre os valores é <strong>$media_simples</strong></p>";
            echo "<p>A <strong>Média Aritmética Ponderada</strong> entre os valores com pesos <strong>$peso1</strong> e <strong>$peso2</strong> é <strong>$media_ponderada</strong></p>"
        ?>
    </section>
</body>
</html>