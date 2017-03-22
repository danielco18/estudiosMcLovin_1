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
  	$sql="SELECT * FROM acceso INNER JOIN usuario ON(acceso.cod_usu=usuario.cod_usu) WHERE email= ? ";
		$query=$this->pdo->prepare($sql);
		$query->execute(array($data[0]));
    $result = $query->fetch(PDO::FETCH_BOTH);
    if (password_verify($data[1],$result[1])) {
      $_SESSION["usuario"] = $result[4];
      $result=true;
      return $result;
    }else{
      $result=false;
      return $result;
    }
    /*foreach ($resultado as $row) {

      if (password_verify($data[1],$row["contraseña"])==true) {
        $resultado=true;

        return $resultado;
      }
    }*/
    /*each($resultado);
      $hash = each($resultado);
    if (password_verify($data[1],$hash["contraseña"])==true) {
      $resultado=true;
      return $resultado;
    }*/
      /*if(count($result[0])>0){
        return true;
      }else {
        return false;
      }*/
		} catch (Exception $e) {
			die("ERROR".$e->getMessage()."".$e->getFile()."".$e->getLine());
		}

	}


  public function __DESTRUCT(){

    DataBase::disconnect();
  }
}
