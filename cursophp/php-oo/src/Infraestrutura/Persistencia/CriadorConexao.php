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
                $pdo = new PDO('mysql:host=SEU HOST;dbname=SEU DB', 'root', 'SUA SENHA');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
                } catch(PDOException $excecao) {
                    echo 'ERRO ' . $excecao->getMessage();
                }
        }
    }
?>