<?php 
    $senha = 123;

    //BASE64 CODIFICADA - DECODIFICADA NAO RECOMENDAVEL
    $senhaBase64 = base64_encode($senha);
    $senhaDecodificada = base64_decode($senhaBase64);

    echo "<p>Senha Base64: $senhaBase64</p>";
    echo "<p>Senha Decodificada: $senhaDecodificada</p>";

    //MD5 CODIFICA
    $senhaMD5 = md5($senha);
    echo "<p>Senha MD5: $senhaMD5</p>";

    //SHA1 CODIFICA
    $senhaSHA1 = sha1($senha);
    echo "<p>Senha SHA1: $senhaSHA1</p>";

    //PASSWORD HASH - RECOMENDAVEL
    $senhaComHash = password_hash($senha, PASSWORD_DEFAULT);
    echo "<p>Senha com Hash: $senhaComHash</p>";
?>