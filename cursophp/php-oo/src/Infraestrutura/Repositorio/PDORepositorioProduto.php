<?php 
    namespace Costa\Comercial\Infraestrutura\Repositorio;
    //
    use Costa\Comercial\Modelo\Produto;
    use Costa\Comercial\Dominio\Repositorio\RepositorioProdutos;
    use Costa\Comercial\Costa\Comercial\Infraestrutura\Persistencia;
    use Override;
    use PDO;
    //
    class PDORepositorioProduto implements RepositorioProdutos
    {
        private PDO $conexao;
        //
        public function __construct(PDO $conexao)
        {
            $this->conexao = $conexao;
        }
        //
        #[Override]
        public function todosProdutos(): array
        {
            $sqlConsulta = "SELECT * FROM produto";
            $stmt = $this->conexao->query($sqlConsulta);
            return $this->hidratarListaProdutos($stmt);
        }
        //
        #[Override]
        public function salvar(Produto $produto): bool
        {
            if ($produto->getIdProduto() === null){
                return $this->createProduto($produto);
            }
            return $this->updateProduto($produto);
        }
        //
        #[Override]
        public function createProduto(Produto $produto): bool
        {
            $sqlInsert = "INSERT INTO produto (nomeProduto, precoProduto) VALUES (:nome, :preco);";
            $stmt = $this->conexao->prepare($sqlInsert);
            $stmt->bindValue(':nome', $produto->getNomeProduto(), PDO::PARAM_STR);
            $stmt->bindValue(':preco', $produto->getPrecoProduto(), PDO::PARAM_STR);
            $sucesso = $stmt->execute();
            //
            if ($sucesso){
                $produto->setIdProduto($this->conexao->lastInsertId());
            }
            return $sucesso;
        }
        //
        #[Override]
        public function readProduto(Produto $produto): array
        {
            $sqlConsulta = "SELECT * FROM produto WHERE idProduto = :id;";
            $stmt = $this->conexao->prepare($sqlConsulta);
            $stmt->bindValue(':id', $produto->getIdProduto(), PDO::PARAM_INT);
            $stmt->execute();
            //
            return $this->hidratarListaProdutos($stmt);
        }
        //
        #[Override]
        public function updateProduto(Produto $produto): bool
        {
            $sqlUpdate = "UPDATE produto SET nomeProduto = :nome, precoProduto = :preco WHERE idProduto = :id;";
            $stmt = $this->conexao->prepare($sqlUpdate);
            $stmt->bindValue(':id', $produto->getIdProduto(), PDO::PARAM_INT);
            $stmt->bindValue(':nome', $produto->getNomeProduto(), PDO::PARAM_STR);
            $stmt->bindValue(':preco', $produto->getPrecoProduto(), PDO::PARAM_STR);
            //
            return $stmt ->execute();
        }
        //
        #[Override]
        public function deleteProduto(Produto $produto): bool
        {
            $stmt = $this->conexao->prepare('DELETE FROM produto WHERE idProduto = ?;');
            $stmt->bindValue(1, $produto->getIdProduto(), PDO::PARAM_INT);
            //
            return $stmt->execute();
        }
        //HIDRATAR DADOS
        public function hidratarListaProdutos(\PDOStatement $stmt):array
        {
            $listaDadosProdutos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $listaProdutos = [];
            //
            echo "<table>";
            foreach ($listaDadosProdutos as $dadosProdutos){
                $listaDadosProdutos[] = new Produto(
                    $dadosProdutos['idProduto'],
                    $dadosProdutos['nomeProduto'],
                    $dadosProdutos['precoProduto'],

                );
                echo "
                <tr>
                    <td width= '20'>
                        {$dadosProdutos['idProduto']}
                    </td>
                    <td width= '150'>
                        {$dadosProdutos['nomeProduto']}
                    </td>
                    <td align= 'right'>
                        " . number_format($dadosProdutos['precoProduto'], 2, ',', '.') . "
                    </td>
                </tr>";
            }
            //
            echo "</table>";
            //
            return $listaProdutos;
        }

    }

?>