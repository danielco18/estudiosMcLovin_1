<?php
<<<<<<< HEAD

=======
>>>>>>> refs/remotes/origin/Daniel_Cardona
    class DataBase{
        private static $db_host = "localhost";
        private static $db_name = "mentalidadfitness";
        private static $db_user = "root";
        private static $db_pass = "";
        private static $db_conn = null;

        public static function connect(){
<<<<<<< HEAD
            if(self::$db_conn==null){
=======
            if (self::$db_conn==null) {
>>>>>>> refs/remotes/origin/Daniel_Cardona
                try {
                    self::$db_conn = new PDO("mysql:host=".self::$db_host.";dbname=".self::$db_name,self::$db_user,self::$db_pass);
                    self::$db_conn->exec("SET CHARACTER SET utf8");
                } catch (PDOException $e) {
<<<<<<< HEAD
                    die($e->getMessage()."".$e->getLine()."".$e->getFile());
                }
            }
            return self::$db_conn;
        }

        public static function disconnect(){
            self::$db_conn=null;
=======
                    die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
                }
                return self::
            }
        }

        public static function disconnect(){
            self::$db_conn = null;
>>>>>>> refs/remotes/origin/Daniel_Cardona
        }
    }

?>
