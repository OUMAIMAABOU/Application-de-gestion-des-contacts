<?php
include('dbconnect.php');

class contact extends Dbconnect{
    public $nom;
    public $telephone;
    public $email;
    public $adress;
    public $id;

    public function Select(){
        $req="select * from contacts where  ";

        $result= $this-> GetData($req);
      
          $result->execute([
              ":username" => $this->username,
              ":password" => $this->password
         ] );
        $res=$result->fetch(PDO::FETCH_ASSOC);
        return $res;
     
    }
  
    public function Add(){
        $req ="insert into contacts(nom, tele,email,adress,id) values (:nom,:tele,:email,:adress,:id) ";
        $exc =$this->GetData($req);
        $exc->execute([
            ":nom" => $this->nom,
            ":tele" => $this->telephone,
            ":email" => $this->email,
            ":adress" => $this->adress,
            ":id" => $this->id
       ] );
     
    }
    public function GetName()
    {
        return $this->nom;
    }
     public function SetName($nom)
    {
        $this->nom=$nom;
    }
     public function GetTelephone()
    {
        return $this->telephone;
    }
     public function SetTelephone($telephone)
    {
        $this->telephone=$telephone;
    }
     public function GetEmail()
    {
        return $this->email;
    }
     public function SetEmai($email)
    {
        $this->email=$email;
    }
    public function GetAdress()
    {
        return $this->adress;
    }
     public function SetAdress($adress)
    {
       $this->adress=$adress;
    }
    public function GetId()
    {
        return $this->adress;
    }
     public function SetId($id)
    {
       $this->id=$id;
    }




    }
  
// $user = new contact();

// echo $user->select();

?>