<?php
include('dbconnect.php');
class Utilisateur extends Dbconnect{
    public $name;
    public $password;
    public $dateinsc;
    public $id;

  
    public function add(){
        $req ="insert into comptes (name, password,date_inscription) values (?,?,sysdate())";
        $exc =$this->GetData($req);
        $this->password = password_hash( $this->password, PASSWORD_DEFAULT);
        $exc->execute([$this->name,$this->password]); 
    }


    public function login(){
         $req ="select * from comptes where name =?";
         $result= $this->GetData($req);
         $result->execute([$this->name]);
         $res=$result->fetch(PDO::FETCH_ASSOC);
         if(password_verify($this->password,$res['password'])==true){
        $_SESSION['name'] = $res['name'];
        $_SESSION['date'] = $res['date_inscription'];
        $_SESSION['id'] = $res['idcompte'];
        $_SESSION['datelog']= date('d-m-y h:i:s');

         return $res;
         }
    }
    public function Select(){
        $req="select * from comptes where idcompte =?";
        $result= $this->GetData($req);
        $result->execute([$this->id]);
       return $result->fetchAll();
     
    }
 public function GetName()
 {
     return $this->name;
 }
  public function SetName($name)
 {
     $this->name=$name;
 }

 public function GetPassword()
 {
     return $this->password;
 }
  public function SetPassword($password)
 {
     $this->password=$password;
 }
    

 public function GetId()
{
    return $this->id;
}
 public function SetId($id)
{
    $this->id=$id;
}
   
}





?>