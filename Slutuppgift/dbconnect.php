<?php
// session_start();
// $_SESSION["inloggad"]= false;
// $_SESSION["usersession"]=null;
class DB{


  private $pdo=null;
  private $stmt=null;
function __construct(){

  $servername = "localhost"; // Inloggningslänk
  $username = "root"; // Inloggningsuppgifter, Användarnamn
  $password = ""; // Inloggningsuppgifter, Lösenord

  try{
    $this->pdo = new PDO("mysql:host=$servername;dbname=shopngo" , $username, $password);

      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


      }


  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }

    }

    function insert($sql, $cond=null){
      $this->stmt= $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
    }


    function select2($sql, $cond=null){
      $result = false;
      try {
        $this->stmt = $this->pdo->prepare($sql);
        $this->stmt->execute($cond);
        $result = $this->stmt->fetchColumn(0);

      } catch (Exception $ex) { die($ex->getMessage()); }


      $this->stmt = null;
      return $result;
    }

    function select($sql, $cond=null){
      $result = false;
      try {
        $this->stmt = $this->pdo->prepare($sql);
        $this->stmt->execute($cond);
        $result = $this->stmt->fetchAll();

      } catch (Exception $ex) { die($ex->getMessage()); }


      $this->stmt = null;
      return $result;
    }

    function delete($sql, $cond=null){
      $result = false;
      try {
        $this->stmt = $this->pdo->prepare($sql);
        $this->stmt->execute($cond);


      } catch (Exception $ex) { die($ex->getMessage()); }


      $this->stmt = null;
      return $result;
    }

    function update($sql, $cond=null){

      $result = false;
      try {
        $this->stmt = $this->pdo->prepare($sql);
        $this->stmt->execute($cond);


      } catch (Exception $ex) { die($ex->getMessage()); }


      $this->stmt = null;
      return $result;
    }


  }
?>
