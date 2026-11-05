<?php 
    namespace Costa\Comercial\Dominio\Modelo;

    use DateTimeInterface;

    //CLASSES SAO FORMADAS POR ATRIBUTOS E COMPORTAMENTOS
    //ATRIBUTOS(CARACTERISTICAS) = VARIAVEIS
    //COMPORTAMENTOS = FUNCOES
    //CLASSE GENERICA
    require_once 'autoload.php';
    abstract class Pessoa 
    {
        use AcessoAtributos;
        //ATRIBUTOS
        protected ?int $id;
        protected string $nome;
        protected DateTimeInterface $dataNascimento;
        protected float $desconto;
        //ASSOCIACAO ENTRE PESSOA E ENDERECO
        protected Endereco $endereco;
        //
        private static int $numDePessoas = 0;
        //
        //COMPORTAMENTOS
        //METODO CONSTRUTOR
        public function __construct(?int $id,string $nome, DateTimeInterface $dataNascimento, Endereco $endereco)
        {
            $this->id=$id;
            $this->nome = $nome;
            $this->dataNascimento = $dataNascimento; 
            $this->endereco = $endereco;
            //$this->validaIdade($idade);
            //DEFININDO O DESCONTO
            $this->setDesconto();
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
        public function getDataNascimento(): DateTimeInterface
        {
            return $this->dataNascimento; //FUNCAO GETIDADE RETORNA A IDADE
        }
        //
        //METODO SET
        public function setNome(string $nome): void
        {
            $this->nome = $nome; //FUNCAO SETNOME DEFINE O NOME
        }
        //
        public function setDataNascimento(DateTimeInterface $dataNascimento): void
        {
            $this->dataNascimento = $dataNascimento; //FUNCAO SETIDADE DEFINE A IDADE
        }
        //
        public static function getNumDePessoas(): int{
            return self::$numDePessoas;
        }
        //
        //METODO ESPECIFICO
        /*
        public function validaIdade(int $idade): void{
            if ($this -> idade > 0 AND $this -> idade < 120){
                $this -> idade = $idade;
            } else {
                echo "Idade nao permitida!";
                exit;
            }
        }
        */
        //
        protected abstract function setDesconto(): void;
        //
        public function getDesconto(): float{
            return $this -> desconto;
        }
        //
        public abstract function __toString(): string;
        //
        public function idade(): int{
            return $this->getDataNascimento()
            ->diff(new \DateTimeImmutable())
            ->y;
        }
    }
?>