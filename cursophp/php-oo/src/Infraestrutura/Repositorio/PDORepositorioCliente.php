<?php 
    namespace Costa\Comercial\Infraestrutura\Repositorio;
    //
    use Costa\Comercial\Dominio\Modelo\Cliente;
    use Costa\Comercial\Dominio\Repositorio\RepositorioClientes;
    use Override;
    use PDO;
    use DateTimeImmutable;
    use Costa\Comercial\Dominio\Modelo\Endereco;
    //
    class PDORepositorioCliente implements RepositorioClientes
    {
        private PDO $conexao;
        //
        public function __construct(PDO $conexao)
        {
            $this->conexao = $conexao;
        }
        //
        #[Override]
        public function todosClientes(): array
        {
            $sqlConsulta = "SELECT * FROM cliente";
            $stmt = $this->conexao->query($sqlConsulta);
            return $this->hidratarListaClientes($stmt);
        }
        //
        public function todosClientesComEndereco(): array{
            $sqlConsulta = "SELECT * FROM cliente JOIN endereco ON id = idCliente";
            $stmt = $this->conexao->query($sqlConsulta);
            $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
            $listaCliente = [];
            //
            foreach($resultado as $linha){
                if (!array_key_exists($linha['id'], $listaCliente)){
                    $listaCliente[$linha['id']] = new Cliente(
                        $linha['id'],
                        $linha['nome'],
                        new DateTimeImmutable($linha['dataNascimento']),
                        new Endereco(NULL, "", "", "", "", "", "", NULL),
                        $linha['renda']
                        );
                }//FIM IF
                //
                $endereco = new Endereco(
                    $linha['idendereco'],
                    $linha['uf'],
                    $linha['cidade'],
                    $linha['nomeLogradouro'],
                    $linha['numero'],
                    $linha['bairro'],
                    $linha['cep'],
                    $linha['idcliente']
                );
                    //
                    $listaCliente[$linha['id']]->setEndereco($endereco);
            }//FIM FOREACH
            return $listaCliente;
        }
        //
        #[Override]
        public function salvar(Cliente $cliente): bool
        {
            if ($cliente->getId() === null){
                return $this->createCliente($cliente);
            }
            return $this->updateCliente($cliente);
        }
        //
        #[Override]
        public function createCliente(Cliente $cliente): bool
        {
            $sqlInsert = "INSERT INTO cliente (nome, dataNascimento, renda) VALUES (:nome, :datanasc, :renda);";
            $stmt = $this->conexao->prepare($sqlInsert);
            $stmt->bindValue(':nome', $cliente->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(':datanasc', $cliente->getDataNascimento()->format('Y-m-d'));
            $stmt->bindValue(':renda', $cliente->getRenda(), PDO::PARAM_STR);
            $sucesso = $stmt->execute();
            //
            if ($sucesso){
                $cliente->setId($this->conexao->lastInsertId());
            }
            return $sucesso;
        }
        //
        #[Override]
        public function ler(Cliente $cliente): array
        {
            $sqlConsulta = "SELECT * FROM cliente WHERE id = :id;";
            $stmt = $this->conexao->prepare($sqlConsulta);
            $stmt->bindValue(':id', $cliente->getId(), PDO::PARAM_INT);
            $stmt->execute();
            //
            return $this->hidratarListaClientes($stmt);
        }
        //
        #[Override]
        public function updateCliente(Cliente $cliente): bool
        {
            $sqlUpdate = "UPDATE cliente SET nome = :nome, dataNascimento = :datanasc, renda = :renda WHERE id = :id;";
            $stmt = $this->conexao->prepare($sqlUpdate);
            $stmt->bindValue(':id', $cliente->getId(), PDO::PARAM_INT);
            $stmt->bindValue(':nome', $cliente->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(':renda', $cliente->getRenda(), PDO::PARAM_STR);
            $stmt->bindValue(':datanasc', $cliente->getDataNascimento()->format('Y-m-d'));
            //
            return $stmt ->execute();
        }
        //
        #[Override]
        public function delete(Cliente $cliente): bool
        {
            $stmt = $this->conexao->prepare('DELETE FROM cliente WHERE id = ?;');
            $stmt->bindValue(1, $cliente->getId(), PDO::PARAM_INT);
            //
            return $stmt->execute();
        }
        //HIDRATAR DADOS
        public function hidratarListaClientes(\PDOStatement $stmt):array
        {
            $listaDadosClientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $listaClientes = [];
            //
            echo "<table>";
            foreach ($listaDadosClientes as $dadosCliente){
                $listaClientes[] = new Cliente(
                    $dadosCliente['id'],
                    $dadosCliente['nome'],
                    new DateTimeImmutable($dadosCliente['dataNascimento']),
                    new Endereco(NULL, "", "", "", "", "", "", NULL),
                    $dadosCliente['renda'],

                );
                //
                $this->preencheEndereco($cliente);
                //
                $listaClientes[] = $cliente;
                //
                echo "
                <tr>
                    <td width= '20'>
                        {$dadosCliente['id']}
                    </td>
                    <td width= '150'>
                        {$dadosCliente['nome']}
                    </td>
                    <td align= 'right'>
                        " . number_format($dadosCliente['renda'], 2, ',', '.') . "
                    </td>
                </tr>";
            }
            //
            echo "</table>";
            //
            return $listaClientes;
        }
        //
        private function preencheEndereco(Cliente $cliente): void{
                $sqlConsulta = "SELECT * FROM endereco WHERE idendereco = ?;";
                $stmt = $this->conexao->prepare($sqlConsulta);
                $stmt->bindValue(1, $cliente->getId(), PDO::PARAM_INT);
                $stmt->execute();
                //
                $listaDeEnderecos = $stmt->fetchAll();
                //
                foreach($listaDeEnderecos as $endereco) {
                    $endereco = new Endereco(
                        $endereco['idendereco'],
                        $endereco['uf'],
                        $endereco['cidade'],
                        $endereco['nomeLogradouro'],
                        $endereco['numero'],
                        $endereco['bairro'],
                        $endereco['cep'],
                        $endereco['idcliente']
                    );
                }
            }

    }

?>