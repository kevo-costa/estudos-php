<?php 
    class Cliente extends Pessoa
    {
        private string $dataDeNascimento;
        private float $renda;
        //
        public function __construct(string $nome, int $idade, Endereco $endereco, string $dataDeNascimento, float $renda)
        {
            parent::__construct($nome, $idade, $endereco);
            $this -> dataDeNascimento = $dataDeNascimento;
            $this -> renda = $renda;
        }
        //
        public function getDataDeNascimento(): string{
            return $this->dataDeNascimento;
        }
        //
        public function setDataDeNascimento(string $dataDeNascimento): void{
            $this ->dataDeNascimento = $dataDeNascimento;
        }
        //
        public function getRenda(): float{
            return $this->renda;
        }
        //
        public function setRenda(float $renda): void{
            $this->renda = $renda;
        }
    }
?>