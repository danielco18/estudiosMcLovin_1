<?php
    require_once "model/ejercicio.model.php";

    class EjercicioController{
        private $EJmodel;

        public function __CONSTRUCT(){
          $this->EJmodel = new EjercicioModel();
        }

        public function mainPage(){
            if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_ejercicio/ejercicio.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->EJmodel->createEjercicio($data);
            header("Location: index.php?c=ejercicio&msn=$result");
        }

        public function update(){
          if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
          }
          $field = $_GET["ejcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_ejercicio/ejercicio.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->EJmodel->updateEjercicio($data);
            header("Location: index.php?c=ejercicio&msn=$result");
        }

        public function delete(){
            $data = $_GET["ejcode"];
            $result = $this->EJmodel->deleteEjercicio($data);
            header("Location: index.php?c=ejercicio&msn=$result");
        }

    }

?>
