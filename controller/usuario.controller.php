<?php
    require_once "model/usuario.model.php";
    require_once "views/assets/random/random.php";

    class UsuarioController{
        private $USmodel;

        public function __CONSTRUCT(){
          $this->USmodel = new UsuarioModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_usuario/usuario.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $tokken=randAlphanum('30');
            $userId="USU".randAlphanum('30');
            $n=2;
            $s="Juan";
            $data = $_POST["data"];
            $data[2] = password_hash($data[2],PASSWORD_DEFAULT);
            $result = $this->USmodel->createUsuario($userId,$data,$tokken,$n,$s);
            header("Location: index.php?c=usuario&msn=$result");
        }

        public function update(){
          $field = $_GET["uscode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_usuario/usuario.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $data[2] = password_hash($data[2],PASSWORD_DEFAULT);
            $result = $this->USmodel->updateUsuario($data);
            header("Location: index.php?c=usuario&msn=$result");
        }

        public function delete(){
            $data = $_GET["uscode"];
            $result = $this->USmodel->deleteUsuario($data);
            header("Location: index.php?c=usuario&msn=$result");
        }

    }

?>
