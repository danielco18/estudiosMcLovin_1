<?php
    require_once "model/usuario.model.php";

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
            $data = $_POST["data"];
            $result = $this->USmodel->createUsuario($data);
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
