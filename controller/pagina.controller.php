<?php

    require_once "model/pagina.model.php";

    class PaginaController{
        private $Pmodel;

        public function __CONSTRUCT(){
          $this->Pmodel = new PaginaModel();
        }

        public function mainPage(){
            if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_pagina/pagina.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->Pmodel->createPagina($data);
            header("Location: index.php?c=pagina&msn=$result");
        }

        public function update(){
          if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
          }
          $field = $_GET["pcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_pagina/pagina.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->Pmodel->updatePagina($data);
            header("Location: index.php?c=pagina&msn=$result");
        }

        public function delete(){
            $data = $_GET["pcode"];
            $result = $this->Pmodel->deletePagina($data);
            header("Location: index.php?c=pagina&msn=$result");
        }

    }

?>
