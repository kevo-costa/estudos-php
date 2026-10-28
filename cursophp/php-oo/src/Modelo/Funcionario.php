<?php
    namespace Costa\Comercial\Modelo;
    require_once 'autoload.php';
    class Funcionario extends Pessoa implements Autenticar
    {
        private string $cargo;
        private float $salario;
        private string $senha;
        //
        public function __construct(string $nome, int $idade, Endereco $endereco,string $cargo, float $salario)
        {
            parent::__construct($nome, $idade, $endereco);
            $this->cargo = $cargo;
            $this->salario = $salario;
        }
        //
        public function getCargo(): string{
            return $this -> cargo;
        }
        //
        public function setCargo(string $cargo): void{
            $this->cargo = $cargo;
        }
        //
        public function getSalario(): float{
            return $this -> salario;
        }
        //
        public function setSalario(float $salario): void{
            $this->salario = $salario; 
        }
        //
        public function setDesconto(): void{
            $this -> desconto = 0.10;
        }
        //SOBRESCREVER METODO 
        #[Override]
        public function __toString(): string
        {
            return "<p>Nome: ". $this->nome .
            "<br>Idade: ". $this->idade . " anos".
            "<br>End. :" . $this->endereco->getNomeLogradouro() . ", " .
            $this->endereco->getNumero() . " - " . $this->endereco->getBairro() .
            "<br>Cargo: " . $this -> cargo . 
            "<br>Salario R$: " . $this -> salario .
            "</p>";
        }
        //
        #[Override]
        public function login($nome, string $senha): void
        {
            if ($this->nome === $nome && $this->senha === $senha){
                echo "<p>[ LOGIN: Usuario " . $this->nome . " autenticado com sucesso! ]</p>";
            } else {
                echo "<p>[ ERRO! Usuario ou senha incorreta! ]</p>";
            }
        }
        //
        public function setSenha(string $senha): void{
            $this->senha = $senha;
        }
    }
?>