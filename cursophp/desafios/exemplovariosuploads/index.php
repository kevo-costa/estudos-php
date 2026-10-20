<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //VERIFICAR SE O BOTAO ENVIAR FOI UTILIZADO E VER A EXTENSAO DOS ARQUIVOS
        if(isset($_POST["btEnviar"])){ 
            $tipospermitidos = ["jpg", "jpeg", "png", "gif", "JPG", "JPEG", "GIF", "PNG"];
            $quantidadearquivos = count($_FILES["arquivo"]["name"]); //ARAMAZENAR QUANTOS ARQUIVOS FORAM ENVIADOS
            $contador = 0;

            while($contador < $quantidadearquivos){
                $extensao = pathinfo($_FILES["arquivo"]["name"][$contador], PATHINFO_EXTENSION); //EXTENSAO DOS ARQUIVOS ATRAVES DO PATHINFO E ARQUIVOS ENVIADOS ATRAVES DO FILES E PATHINFOEXTENSION TRAZ SOMENTE A EXTENSAO DO ARQUIVO
            //VERIFICAR SE NO ARRAY DE TIPOS PERMITIDOS EXISTE A EXTENSAO DO TIPO DO ARQUIVO
                if (in_array($extensao, $tipospermitidos)) {
                    $pasta = "arquivos/";
                    $temporario = $_FILES["arquivo"]["tmp_name"][$contador]; //TMP_NAME = NOME TEMPORARIO DO ARQUIVO APOS SER POSTADO
                    $novoNome = uniqid() . ".$extensao"; //FIM DA VERIFICACAO

                    //FAZER UPLOAD APOS PROCESSO DE VERIFICACAO
                    if(move_uploaded_file($temporario, $pasta . $novoNome)){
                        echo "<p>Upload realizado!</p>";
                    } else echo "<p>Falha no Upload!</p>"; //FIM DO UPLOAD
                }else echo "Tipo do arquivo nao permitido"; //FIM DO IF IN_ARRAY
                $contador ++; //INCREMENTO DO WHILE
            }; //FIM DO WHILE
        }; //FIM DO IF ISSET

        // enctype="multipart/form-data" PERMITE O UPLOAD DE ARQUIVOS NO HTML
    ?>
    <main>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo[]" multiple>
            <button type="submit" name="btEnviar">Enviar</button>
        </form> 
    </main>
</body>
</html>