<?php

    class AlmuerzoModel{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createAlmuerzo($data){
            try {
                $sql = "INSERT INTO almuerzo VALUES('',?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1]));

                $msn = "Almuerzo guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function readAlmuerzo(){
            try {
                $sql="SELECT * FROM almuerzo ORDER BY nombre";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readAlmuerzoByCode($field){
            try {
                $sql="SELECT * FROM almuerzo WHERE cod_almuerzo = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function updateAlmuerzo($data){
            try {
                $sql="UPDATE almuerzo SET nombre = ?, descripcion = ? WHERE cod_almuerzo = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2]));

                $msn = "Almuerzo Modificado con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteAlmuerzo($field){
            try {
                $sql = "DELETE FROM almuerzo WHERE cod_almuerzo = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Almuerzo Eliminado correctamente!";
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
