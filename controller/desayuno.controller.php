<?php
    require_once "model/desayuno.model.php";

    class DesayunoController{
        private $DEmodel;

        public function __CONSTRUCT(){
          $this->DEmodel = new DesayunoModel();
        }

        public function mainPage(){
            if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_desayuno/desayuno.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->DEmodel->createDesayuno($data);
            header("Location: index.php?c=desayuno&msn=$result");
        }

        public function update(){
          if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
          }
          $field = $_GET["decode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_desayuno/desayuno.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->DEmodel->updateDesayuno($data);
            header("Location: index.php?c=desayuno&msn=$result");
        }

        public function delete(){
            $data = $_GET["decode"];
            $result = $this->DEmodel->deleteDesayuno($data);
            header("Location: index.php?c=desayuno&msn=$result");
        }

    }

?>
