<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
        // 0x = hexadcimal 0b = binário 0= octal
        $num = 300;
        echo "O valor da varíavel é $num";
        $v = 400;
        var_dump($v);

        $nume = (int) 3e2;
        echo "O valor é $nume";
        var_dump($nume);
        $casado = false;
        var_dump($casado);
        echo "O valor para casado é $casado";

        $vet = [6, 2, 3, 58];
        var_dump($vet); //NÃO É POSSÍVEL USAR ECHO EM VETOR

        class Pessoa {
            private string $nome;
        }
        $p  = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>