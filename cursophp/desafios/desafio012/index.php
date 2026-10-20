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
        $totalsegundos = $_GET['segundos'] ?? 0;
        $sobra = $totalsegundos;
        $semanas = (int)($sobra / 604800);
        $sobra = $sobra % 604800;
        $dias = (int)($sobra / 86400);
        $sobra = $sobra % 86400;
        $horas = (int)($sobra / 3600);
        $sobra = $sobra % 3600;
        $minutos = (int)($sobra / 60);
        $sobra = $sobra % 60;
        $segundos = $sobra;
            ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="tempo">Qual o total de segundos?</label>
            <input type="number" name="segundos" id="idsegundos" value="<?= $totalsegundos ?>" required>
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section>
        <h2>Total:</h2>
        <p>Analisando o valor que você digitou, <strong><?= $segundos ?> segundos</strong> equivalem a um total de: </p>
        <p><?= $semanas ?> semanas</p>
        <p><?= $dias ?> dias</p>
        <p><?= $horas ?> horas</p>
        <p><?= $minutos ?> minutos</p>
        <p><?= $segundos ?> segundos</p>
    </section>
</body>
</html>