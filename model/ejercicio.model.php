<?php

    class EjercicioModel{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createEjercicio($data){
            try {
                $sql = "INSERT INTO ejercicio VALUES('',?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1]));

                $msn = "Ejercicio guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function readEjercicio(){
            try {
                $sql="SELECT * FROM ejercicio ORDER BY nomEjercicio";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readEjercicioByCode($field){
            try {
                $sql="SELECT * FROM ejercicio WHERE cod_ejer = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function updateEjercicio($data){
            try {
                $sql="UPDATE ejercicio SET nomEjercicio = ?, ejercicio = ? WHERE cod_ejer = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2]));

                $msn = "Ejercicio Modifico con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteEjercicio($field){
            try {
                $sql = "DELETE FROM ejercicio WHERE cod_ejer = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Ejercicio Eliminado correctamente!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }


?>
