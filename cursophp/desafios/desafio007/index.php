<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salario = $_GET['salario'] ?? 0 ;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$):</label>
            <input type="number" name="salario" id="idsalario" step="0.01">
            <button type="submit">Analisar</button>
            <p>Considere o salário mínimo sendo <strong>R$ 1.874,36</strong></p>
        </form>
    </main>
    <section>
        <?php 
            $salario_min = 1874.36;
            $resultado = intdiv($salario, $salario_min);
            $sobra = $salario % $salario_min;
            echo "Você recebe R$<srtong>$salario</strong> que é equivalente a <strong>$resultado</strong> sálarios mínimos + <strong>R$$sobra</strong>";
        ?>
    </section>
</body>
</html>