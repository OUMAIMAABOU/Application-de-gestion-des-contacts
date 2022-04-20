<?php
class Dbconnect{

  private $host     ="localhost";
  private $username = "root";
  private $password = "";
  private $database = "gestion_contacts_db";
  protected function connection()
  {
    try
    {   
     return new PDO("mysql:host=$this->host; dbname=$this->database" ,$this->username ,$this->password);;
    }catch (PDOException $ex) { echo $ex->getMessage();}
  }

  protected function GetData($req)
  {
    try
    {
    return $this->connection()->prepare($req);; 
    }catch (PDOException $ex) {echo $ex->getMessage();}
  }
   
  
}

?> 