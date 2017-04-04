<?php

    require_once "model/rol.model.php";

    class RolController{
        private $Rmodel;

        public function __CONSTRUCT(){
          $this->Rmodel = new RolModel();
        }

        public function mainPage(){
            if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_rol/rol.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            if(empty($data[0]) || empty($data[1])) {
              $msn="Campos Nulos";
              header("Location: index.php?c=rol&msn=$msn");
            }else{
              $result = $this->Rmodel->createRol($data);
              header("Location: index.php?c=rol&msn=$result");
            }
        }

        public function update(){
          if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
          }
          $field = $_GET["rcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_rol/rol.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->Rmodel->updateRol($data);
            header("Location: index.php?c=rol&msn=$result");
        }

        public function delete(){
            $data = $_GET["rcode"];
            $result = $this->Rmodel->deleteRol($data);
            header("Location: index.php?c=rol&msn=$result");
        }

    }

?>
