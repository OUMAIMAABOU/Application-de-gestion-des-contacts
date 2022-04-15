<?php
require_once('dbconnect.php');
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
      
      $result= $this->GetData("select * from contacts where id =?");
      $result->execute([$this->id ]);
      return $result->fetchAll();   
      }catch(Exception $e){
       return $e->getMessage();
      }
    }
    public function Selectone()
    {
     try{
      
       $result= $this->GetData("select * from contacts where idcontact =?");
       $result->execute([$this->idcontact ]);
       return $result->fetch();
      } catch(Exception $e){
        return $e->getMessage();
      }  
    }
  
    public function Add()
    {
     try{
     
      $exc =$this->GetData("insert into contacts(nom, tele,email,adress,id) values (?,?,?,?,?) ");
      $exc->execute([$this->nom,$this->telephone, $this->email,$this->adress,$this->id]);
      return $exc;
      }catch(Exception $e){
        return $e->getMessage();
      }
    }
    public function Delet(){
      try{
      
        $exc =$this->GetData("delete from contacts where idcontact  =?");
        $exc->execute([$this->idcontact]);
        return $exc;
      }catch(Exception $e){
        return $e->getMessage();
      }
    }
    public function update(){
     try{
       
        $exc =$this->GetData("update contacts set nom=?,tele=?,email=?,adress=?  where idcontact =?");
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
      if($telephone==null){
        $this->telephone="0600000000";
       }else{
        $this->telephone=$telephone;
    }
    }
    public function SetEmai($email)
    {
        $this->email=$email;
    }
    public function SetAdress($adress)
    {
      if($adress==null){
        $this->adress="Exemple@gmail.com";
       }else{
        $this->adress=$adress;
    }
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
  


?>