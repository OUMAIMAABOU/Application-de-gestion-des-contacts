<?php
require_once('dbconnect.php');
class Utilisateur extends Dbconnect{
 public $name;
 public $password;
 public $dateinsc;
 public $id;
 public $img;

 public function getuser()
 {
    try
    {
      $result= $this->GetData("select * from comptes where name =?");
      $result->execute([$this->name]);
      return $result;
    }catch (PDOException $ex) { echo $ex->getMessage();}  
 }
  public function add()
  {
     try{
       $numrows=$this->getuser();
       if($numrows->rowCount()>0){
       return false;
      }else{
       
        $exc =$this->GetData("insert into comptes (name, password,date_inscription,img) values (?,?,sysdate(),?)");
        $this->password = password_hash( $this->password, PASSWORD_DEFAULT);
        $exc->execute([$this->name,$this->password,$this->img]); 
        return $exc;
      }
     
      }catch (Exception $ex) { echo $ex->getMessage();}  
  }
  public function login()
   {
    try{
    $numrows=$this->getuser();
    $res=$numrows->fetch(PDO::FETCH_ASSOC);
    if(password_verify($this->password,$res['password'])==true)
    {
        $_SESSION['name'] = $res['name'];
        $_SESSION['date'] = $res['date_inscription'];
        $_SESSION['id'] = $res['idcompte'];
        $_SESSION['datelog']= date('d-m-y h:i:s');
        return $res;
    }
    }catch (PDOException $ex) { echo $ex->getMessage();}    
  }
  public function Select()
  {
      try
      {
        $result= $this->GetData("select * from comptes where idcompte =?");
        $result->execute([$this->id]);
        return $result->fetchAll();
      }catch (PDOException $ex) { echo $ex->getMessage();}
  }
  public function SetName($name){$this->name=$name;}
  public function SetPassword($password){$this->password=$password;}
  public function SetId($id){$this->id=$id;} 
  public function Setimg($img)
  {
    if($img=="") $this->img="avatar.png";
    else  $this->img=$img;} 
  }





?>