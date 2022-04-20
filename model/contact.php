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
     try
     {
      $result= $this->GetData("select * from contacts where id =?");
      $result->execute([$this->id ]);
      return $result->fetchAll();   
      }catch(PDOException $e){return $e->getMessage();}
    }
    public function Selectone()
    {
     try
     {
       $result= $this->GetData("select * from contacts where idcontact =?");
       $result->execute([$this->idcontact ]);
       return $result->fetch();
      } catch(PDOException $e){return $e->getMessage();}  
    }
  
    public function Add()
    {
     try
     {
        $exc =$this->GetData("insert into contacts(nom, tele,email,adress,id) values (?,?,?,?,?) ");
        return  $exc->execute([$this->nom,$this->telephone, $this->email,$this->adress,$this->id]);
     }catch(PDOException $e){return $e->getMessage();}
    }
    public function Delet(){
      try{
        return $this->GetData("delete from contacts where idcontact  =?")->execute([$this->idcontact]);

      }catch(PDOException $e){
        return $e->getMessage();
      }
    }
    public function update()
    {
     try
      {
        $exc =$this->GetData("update contacts set nom=?,tele=?,email=?,adress=?  where idcontact =?");
        return $exc->execute([$this->nom ,$this->telephone, $this->email,$this->adress,$this->idcontact]);
      }catch(PDOException $e){
       return $e->getMessage();
      } 
    }
    public function setadd($nom,$email,$telephone,$adress,$id)
    {
      $this->nom=$nom;
      $this->email=$email;
      if($telephone==null)
      {
        $this->telephone="0600000000";
      }
      else $this->telephone=$telephone;
      if($adress==null)
      {
       $this->adress="Exemple@gmail.com";
      }
      else $this->adress=$adress;
      $this->id=$id;
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