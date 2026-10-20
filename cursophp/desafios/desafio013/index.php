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
        //VALOR TOTAL
        $valordesaque = $_GET['valordesaque']??0;
        $sobra = $valordesaque;
        //NOTAS DE 100
        $notadecem = intdiv($sobra, 100);
        $sobra = $sobra % 100;
        //NOTAS DE 50
        $notadecinquenta = intdiv($sobra, 50);
        $sobra = $sobra % 50;
        //NOTAS DE 10
        $notadedez = intdiv($sobra, 10);
        $sobra = $sobra % 10;
        //NOTAS DE 5
        $notadecinco = intdiv($sobra, 5);
        $sobra = $sobra % 5;
        //NOTAS DE 2
        $notadedois = intdiv($sobra, 2);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="valordesaque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" value="valordesaque" required step="5" name="valordesaque">
            <h6>*Notas disponíveis: R$100,00; R$50,00; R$10,00; R$5,00; R$2,00</h6>
            <button type="submit">Sacar</button>
        </form>
    </main>
    <section>
        <h2>Saque de R$<?= $valordesaque ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <p>R$100,00: <?= $notadecem ?>x</p>
        <p>R$50,00: <?= $notadecinquenta ?>x</p>
        <p>R$10,00: <?= $notadedez ?>x</p>
        <p>R$5,00: <?= $notadecinco ?>x</p>
        <p>R$2,00: <?= $notadedois ?>x</p>
    </section>
</body>
</html>