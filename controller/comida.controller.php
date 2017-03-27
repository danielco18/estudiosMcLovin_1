<?php
    require_once "model/comida.model.php";

    class ComidaController{
        private $COmodel;

        public function __CONSTRUCT(){
          $this->COmodel = new ComidaModel();
        }

        public function mainPage(){
            if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_comida/comida.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->COmodel->createComida($data);
            header("Location: index.php?c=comida&msn=$result");
        }

        public function update(){
          if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
          }
          $field = $_GET["cocode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_comida/comida.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->COmodel->updateComida($data);
            header("Location: index.php?c=comida&msn=$result");
        }

        public function delete(){
            $data = $_GET["cocode"];
            $result = $this->COmodel->deleteComida($data);
            header("Location: index.php?c=comida&msn=$result");
        }

    }

?>
