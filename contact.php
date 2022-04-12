<?php
include('dbconnect.php');
class contact extends Dbconnect
{
    public $nom;
    public $telephone;
    public $email;
    public $adress;
    public $id;
    public $idcontact;

    public function Select()
    {
     try{
      $req="select * from contacts where id =?";
      $result= $this->GetData($req);
      $result->execute([$this->id ]);
      return $result->fetchAll();   
      }catch(Exception $e){
       return $e->getMessage();
      }
    }
    public function Selectone()
    {
     try{
       $req="select * from contacts where idcontact =?";
       $result= $this->GetData($req);
       $result->execute([$this->idcontact ]);
       return $result->fetchAll();
      } catch(Exception $e){
        return $e->getMessage();
      }  
    }
  
    public function Add()
    {
     try{
      $req ="insert into contacts(nom, tele,email,adress,id) values (?,?,?,?,?) ";
      $exc =$this->GetData($req);
      $exc->execute([$this->nom,$this->telephone, $this->email,$this->adress,$this->id]);
      return $exc;
      }catch(Exception $e){
        return $e->getMessage();
      }
    }
    public function Delet(){
      try{
        $req ="delete from contacts where idcontact  =?";
        $exc =$this->GetData($req);
        $exc->execute([$this->idcontact]);
        return $exc;
      }catch(Exception $e){
        return $e->getMessage();
      }
    }
    public function update(){
     try{
        $req ="update contacts set nom=?,tele=?,email=?,adress=?  where idcontact =?";
        $exc =$this->GetData($req);
        $exc->execute([$this->nom ,$this->telephone, $this->email,$this->adress,$this->idcontact]);
        return $exc;
      }catch(Exception $e){
       return $e->getMessage();
      } 
    }
    public function SetName($nom)
    {
        $this->nom=$nom;
    }
    public function SetTelephone($telephone)
    {
        $this->telephone=$telephone;
    }
    public function SetEmai($email)
    {
        $this->email=$email;
    }
    public function SetAdress($adress)
    {
       $this->adress=$adress;
    }
    public function SetId($id)
    {
       $this->id=$id;
    }
    public function SetIdcontact($idcontact)
    {
       $this->idcontact=$idcontact;
    }

}
  
// $user = new contact();

// $user->select(1);

?>