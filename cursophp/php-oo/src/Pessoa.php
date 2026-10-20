<?php 
    //CLASSES SAO FORMADAS POR ATRIBUTOS E COMPORTAMENTOS
    //ATRIBUTOS(CARACTERISTICAS) = VARIAVEIS
    //COMPORTAMENTOS = FUNCOES
    class Pessoa 
    {
        //ATRIBUTOS
        private string $nome;
        private int $idade;
        private static int $numDePessoas = 0;
        //
        //COMPORTAMENTOS
        //METODO CONSTRUTOR
        public function __construct(string $nome, int $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade; 
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
        public function getNome()
        {
            return $this->nome; //FUNCAO GETNOME RETORNA O NOME
        }
        //
        public function getIdade()
        {
            return $this->idade; //FUNCAO GETIDADE RETORNA A IDADE
        }
        //
        //METODO SET
        public function setNome(string $nome)
        {
            $this->nome = $nome; //FUNCAO SETNOME DEFINE O NOME
        }
        //
        public function setIdade(int $idade)
        {
            $this->idade = $idade; //FUNCAO SETIDADE DEFINE A IDADE
        }
        //
        public static function getNumDePessoas(){
            return self::$numDePessoas;
        }
        //
        //METODO ESPECIFICO
        public function validaIdade(int $idade){
            if ($this -> idade > 0 AND $this -> idade < 120){
                $this -> idade = $idade;
            } else {
                echo "Idade nao permitida!";
                exit;
            }
        }
    }
?>