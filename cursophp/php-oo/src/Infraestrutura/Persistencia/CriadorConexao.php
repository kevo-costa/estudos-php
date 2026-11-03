<?php 
    namespace Costa\Comercial\Infraestrutura\Persistencia;
    //
    use PDO;
    use PDOException;

    //
    Class CriadorConexao
    {
        public static function criarConexao()
        {
            try {
                $pdo = new PDO('mysql:host=127.0.0.1;dbname=bd_comercial', 'root', '------');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
                } catch(PDOException $excecao) {
                    echo 'ERRO ' . $excecao->getMessage();
                }
        }
    }
?>