<?php 
    class User{
        public $nome_user;
        public $email;
        public $senha;

        private $conn;
        private $tabela = 'user';

        public function __construct($db)
        {
            $this->conn = $db;
        }

        public function insert()
        {
            $query = "INSERT INTO ".$this->tabela." (nome,email,senha)
                        VALUES(:nome, :email, :senha)";

            $declaracao = $this->conn->prepare($query);

            $declaracao->bindParam(':nome',$this->nome_user);
            $declaracao->bindParam(':email',$this->email);
            $declaracao->bindParam(':senha',$this->senha);
            
            $declaracao->execute();
        }
        
        public function update_senha(){
            $query = 'UPDATE senha  SET 
                        senha = :senha 
                        
                    WHERE email = :email';

            $declaracao = $this->conn->prepare($query);

            $declaracao->bindParam(':senha',$this->senha);
            $declaracao->bindParam(':email',$this->email);

            $declaracao->execute();
        }

        public function read_one(){
            $query = 'SELECT email, senha, nome FROM '.$this->tabela.' 
                        WHERE   email = :email &&
                                senha = :senha 
                                
                        LIMIT 0,1';


            $declaracao = $this->conn->prepare($query);

            $declaracao->bindParam(':email', $this->email);
            $declaracao->bindParam(':senha', $this->senha);

            $declaracao->execute();

            $linha = $declaracao->fetch(PDO::FETCH_ASSOC);

            print_r($linha);

            $this->nome = $linha['nome'];
            $this->email = $linha['email'];
            $this->senha = $linha['senha'];
          }

    }
?>