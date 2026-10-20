<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco =$_GET["preco"] ??0;
        $percentual = $_GET["percentual"] ??0;
        $formula = $preco * $percentual / 100 ;
        $novopreco = $formula + $preco;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="precoproduto">Preço do Produto (R$):</label>
            <input type="number" name="preco" id="idpreco" required step="0.01" value="<?= $preco ?>">
            <label for="percentual">Qual será o percentual do reajuste?<strong>(<span id="p">?</span>)%</strong></label>
            <input type="range" name="percentual" id="percentual" required min="0" max="100" step="1" oninput="mudaValor()" value="<?= $percentual ?>">
            <button type="submit">Reajustar</button>
        </form>
    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <p>O produto que custava <strong>R$<?= $preco ?></strong>, com <strong>%<?= $percentual ?></strong> de aumento vai passar a custar <strong>R$<?= $novopreco ?></strong></p>
    </section>
    <script>
        mudaValor()
        function mudaValor(){
            p.innerText = percentual.value;
        }
    </script>
</body>
</html>