<?php 

    class Banco {

        public function conectar()
        {
            try{
                $conn = new PDO('mysql:host=localhost;dbname=simulado', 'root', '');
                return $conn;
            }
            catch(PDOException $e){
                echo 'Falha na Conexão '. $e;
            }

        }
    }
?>