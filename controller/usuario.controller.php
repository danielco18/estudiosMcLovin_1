<?php
    require_once "model/usuario.model.php";
    require_once "views/assets/random/random.php";

    class UsuarioController{
        private $USmodel;

        public function __CONSTRUCT(){
          $this->USmodel = new UsuarioModel();
        }

        public function mainPage(){
            if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_usuario/usuario.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $tokken=randAlphanum('30');
            $userId="USU".randAlphanum('30');
            $n=3;
            $data = $_POST["data"];
            if(empty($data[0]) || empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[5])) {
              $msn="Campos Nulos";
              header("Location: index.php?c=usuario&msn=$msn");
            }
            elseif(strlen($data[2])<=8){
              $msn="La contraseña debe tener mas de 8 caracteres";
              header("Location: index.php?c=usuario&msn=$msn");
            }
            elseif(!preg_match('`[a-z]`',$data[2])) {
              $msn="La contraseña debe tener minimo una miniscula";
              header("Location: index.php?c=usuario&msn=$msn");
            }
            elseif(!preg_match('`[0-9]`',$data[2])) {
              $msn="La contraseña debe tener minimo un numero";
              header("Location: index.php?c=usuario&msn=$msn");
            }
            /*elseif(!preg_match('`[/\*+-%&@¡!|]`',$data[2])) {
              $msn="La contraseña debe tener minimo un simbolo";
              header("Location: index.php?c=usuario&msn=$msn");
            }*/elseif($data[2]!==$data[5]){
              $msn="La contraseñas no coinciden";
              header("Location: index.php?c=usuario&msn=$msn");
            }
            else{
              $data[2] = password_hash($data[2],PASSWORD_DEFAULT);
              $result = $this->USmodel->createUsuario($userId,$data,$tokken,$n);
              header("Location: index.php?c=usuario&msn=$result");
            }
        }

        public function update(){
          if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
          }
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
