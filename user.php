<?php
include('dbconnect.php');
class Utilisateur extends Dbconnect{
    public $name;
    public $password;
    public $dateinsc;
    public $id;

  
    public function add(){
        $req ="insert into comptes (name, password) values (?,?)";
        $exc =$this->GetData($req);

        $exc->execute([$this->name, $this->password]); 
    }

    public function logOut(){

    }


    public function login(){
         $req ="select * from comptes where name =?";
         $result= $this->GetData($req);
         $result->execute([$this->name]);
         $res=$result->fetch(PDO::FETCH_ASSOC);
        //  if(password_verify($this->password,$res['password'])==true){
        if($this->password==$res['password']){
        $_SESSION['name'] = $res['name'];
        $_SESSION['id'] = $res['idcompte'];
         return $res;
         }
        
    

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