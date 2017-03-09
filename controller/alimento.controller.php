<?php
    require_once "model/alimento.model.php";

    class AlimentoController{
        private $ALImodel;

        public function __CONSTRUCT(){
          $this->ALImodel = new AlimentoModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_alimento/alimento.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->ALImodel->createAlimento($data);
            header("Location: index.php?c=alimento&msn=$result");
        }

        public function update(){
          $field = $_GET["alicode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_alimento/alimento.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->ALImodel->updateAlimento($data);
            header("Location: index.php?c=alimento&msn=$result");
        }

        public function delete(){
            $data = $_GET["alicode"];
            $result = $this->ALImodel->deleteAlimento($data);
            header("Location: index.php?c=alimento&msn=$result");
        }

    }

?>
