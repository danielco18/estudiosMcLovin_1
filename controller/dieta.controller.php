<?php
    require_once "model/dieta.model.php";

    class DietaController{
        private $DImodel;

        public function __CONSTRUCT(){
          $this->DImodel = new DietaModel();
        }

        public function mainPage(){
            if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_dieta/dieta.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->DImodel->createDieta($data);
            header("Location: index.php?c=dieta&msn=$result");
        }

        public function update(){
          if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
          }
          $field = $_GET["dicode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_dieta/dieta.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->DImodel->updateDieta($data);
            header("Location: index.php?c=dieta&msn=$result");
        }

        public function delete(){
            $data = $_GET["dicode"];
            $result = $this->DImodel->deleteDieta($data);
            header("Location: index.php?c=dieta&msn=$result");
        }

    }

?>
