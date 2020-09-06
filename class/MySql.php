<?php

    class MySql{
        
        private static $pdo;

        public function connect(){
            if(self::$pdo == null){
				try{
                    self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    
				    self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(Exception $e){
					echo '<h2>Erro ao conectar</h2>';
				}
			}

			return self::$pdo;
        }

        public function selectAll($pdo){
            $sql = $pdo->prepare("select * from animal");
            $sql->execute();
            return $sql->fetchALL(PDO::FETCH_ASSOC);
        }

        public function addAnimal($pdo, $name, $type, $age){
            $sql = $pdo->prepare("insert into animal values(null, ?, ?, ?)");
            $sql->execute(array($name, $type, $age));
            return $sql->rowCount();
        }

        public function deleteAnimal($pdo, $id){
            $sql = $pdo->prepare("DELETE FROM `animal` WHERE id = ?");
            $sql->execute(array($id));
            return $sql->rowCount();
        }

    }
    


?>