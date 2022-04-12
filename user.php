<?php
include('dbconnect.php');
class Utilisateur extends Dbconnect{
 public $name;
 public $password;
 public $dateinsc;
 public $id;


    public function add()
    {
     try{
        $req ="insert into comptes (name, password,date_inscription) values (?,?,sysdate())";
        $exc =$this->GetData($req);
        $this->password = password_hash( $this->password, PASSWORD_DEFAULT);
        $exc->execute([$this->name,$this->password]); 
      }catch (Exception $ex) { echo $ex->getMessage();}  
    }
   public function login()
   {
    try{
    $req ="select * from comptes where name =?";
    $result= $this->GetData($req);
    $result->execute([$this->name]);
    $res=$result->fetch(PDO::FETCH_ASSOC);

    if(password_verify($this->password,$res['password'])==true)
    {
        $_SESSION['name'] = $res['name'];
        $_SESSION['date'] = $res['date_inscription'];
        $_SESSION['id'] = $res['idcompte'];
        $_SESSION['datelog']= date('d-m-y h:i:s');
        return $res;
    }
    }catch (Exception $ex) { echo $ex->getMessage();}    
   }
    public function Select()
    {
      try
      {
        $req="select * from comptes where idcompte =?";
        $result= $this->GetData($req);
        $result->execute([$this->id]);
        return $result->fetchAll();
      }catch (Exception $ex) { echo $ex->getMessage();}
    }
  public function SetName($name){$this->name=$name;}
  public function SetPassword($password){$this->password=$password;}
  public function SetId($id){$this->id=$id;} 
}





?>