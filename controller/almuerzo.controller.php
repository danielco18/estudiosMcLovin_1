<?php
    require_once "model/almuerzo.model.php";

    class AlmuerzoController{
        private $ALmodel;

        public function __CONSTRUCT(){
          $this->ALmodel = new AlmuerzoModel();
        }

        public function mainPage(){
            if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_almuerzo/almuerzo.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->ALmodel->createAlmuerzo($data);
            header("Location: index.php?c=almuerzo&msn=$result");
        }

        public function update(){
          if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
          }
          $field = $_GET["alcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_almuerzo/almuerzo.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->ALmodel->updateAlmuerzo($data);
            header("Location: index.php?c=almuerzo&msn=$result");
        }

        public function delete(){
            $data = $_GET["alcode"];
            $result = $this->ALmodel->deleteAlmuerzo($data);
            header("Location: index.php?c=almuerzo&msn=$result");
        }

    }

?>
