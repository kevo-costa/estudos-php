<?php 
    //CLASSES SAO FORMADAS POR ATRIBUTOS E COMPORTAMENTOS
    //ATRIBUTOS(CARACTERISTICAS) = VARIAVEIS
    //COMPORTAMENTOS = FUNCOES
    class Pessoa 
    {
        //ATRIBUTOS
        private string $nome;
        private int $idade;
        //ASSOCIACAO ENTRE PESSOA E ENDERECO
        private Endereco $endereco;
        //
        private static int $numDePessoas = 0;
        //
        //COMPORTAMENTOS
        //METODO CONSTRUTOR
        public function __construct(string $nome, int $idade, Endereco $endereco)
        {
            $this->nome = $nome;
            $this->idade = $idade; 
            $this->endereco = $endereco;
            $this->validaIdade($idade);
            self :: $numDePessoas++;
        }
        //METODO DESTRUTOR
        public function __destruct()
        {
            self::$numDePessoas --;
        }
        //
        //METODOS ACESSORES (DAO ACESSO A INFORMACOES)
        //GET = PEGAR, SET = CONFIGURAR
        public function getNome(): string
        {
            return $this->nome; //FUNCAO GETNOME RETORNA O NOME
        }
        //
        public function getIdade(): int
        {
            return $this->idade; //FUNCAO GETIDADE RETORNA A IDADE
        }
        //
        //METODO SET
        public function setNome(string $nome): void
        {
            $this->nome = $nome; //FUNCAO SETNOME DEFINE O NOME
        }
        //
        public function setIdade(int $idade): void
        {
            $this->idade = $idade; //FUNCAO SETIDADE DEFINE A IDADE
        }
        //
        public static function getNumDePessoas(): int{
            return self::$numDePessoas;
        }
        //
        //METODO ESPECIFICO
        public function validaIdade(int $idade): void{
            if ($this -> idade > 0 AND $this -> idade < 120){
                $this -> idade = $idade;
            } else {
                echo "Idade nao permitida!";
                exit;
            }
        }
    }
?>