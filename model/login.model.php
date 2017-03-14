<?php

class LoginModel{
private $pdo;

  public function __CONSTRUCT(){
    try {
      $this->pdo = DataBase::connect();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage()."".$e->getLine()."".$e->getFile());
    }
 }

   public function compruebaLogin($data){
	  try {
  	$sql="SELECT * FROM usuario WHERE email= ? AND contraseña= ?";
		$query=$this->pdo->prepare($sql);
		$query->execute(array($data[0],$data[1]));
    $resultado = $query->fetch(PDO::FETCH_BOTH);
    /*foreach ($resultado as $row) {

      if (password_verify($data[1],$row["contraseña"])==true) {
        $resultad=true;

        return $resultado;
      }
    }*/
    /*foreach ($resultado as $row) {
      $hash = $row["contraseña"];
    }
    if (password_verify($data[1],$hash)==true) {
      $resultado=true;
      return $resultado;
    }*/
      if(count($resultado[0])>0){
        return true;
      }else {
        return false;
      }
		} catch (Exception $e) {
			die("ERROR".$e->getMessage()."".$e->getFile()."".$e->getLine());
		}

	}


  public function __DESTRUCT(){

    DataBase::disconnect();
  }
}
