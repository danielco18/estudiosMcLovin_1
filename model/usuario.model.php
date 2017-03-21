<?php

    class UsuarioModel{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createUsuario($userId,$data,$tokken,$n,$s){
            try {
                $sql = "INSERT INTO usuario VALUES(?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($userId,$data[0],$data[1],$data[2],$data[3],$data[4]));
                $sql2 = "INSERT INTO acceso VALUES(?,?,?,?,?)";
                $query2 = $this->pdo->prepare($sql2);
                $query2->execute(array($tokken,$data[2],$n,$s,$userId));
                $msn = "Usuario guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }
        public function readRol(){
            try {
                $sql="SELECT * FROM rol ORDER BY rolNom";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        public function readDieta(){
            try {
                $sql="SELECT * FROM mi_dieta";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        public function readCiudad(){
            try {
                $sql="SELECT * FROM ciudad ORDER BY nombre";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readUsuario(){
            try {
                $sql="SELECT * FROM usuario ORDER BY nombre";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readUsuarioByCode($field){
            try {
                $sql="SELECT * FROM usuario WHERE cod_usu = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function updateUsuario($data){
            try {
                $sql="UPDATE usuario SET nombre = ?, email = ?, password = ? WHERE cod_usu = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2],$data[3]));
                $msn = "Usuario Modifico con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteUsuario($field){
            try {
                $sql = "DELETE FROM usuario WHERE cod_usu = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Usuario Eliminado correctamente!";
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
