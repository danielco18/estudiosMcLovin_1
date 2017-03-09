<?php
    class MainController{

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/pages/dashboard.php';
            require_once 'views/include/footer.php';
        }
   }


?>
