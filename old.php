<?php
 class Dbconnect{
     private $servername="localhost";
     private $dbpassword="root";
     private $usernamr ="";
     private $dbname ="e_classe_db";
     protected function connection(){
       try {
          $connect=  mysqli_connect($this->servername,$this->usernamr,$this->dbpassword, $this->dbname);
          return $connect;
        } catch (Exception $ex) {echo $ex->getMessage();} 
}

    public function Get($req){
        try{
            $con=$this->connection();
            $res=mysqli_query($con,$req);
            if($res)
            {
             while($rows=mysqli_fetch_assoc($res))
            {
             $data=$rows;
             return $data;
            }
            }else return false;
        }catch (Exception $ex) { echo $ex->getMessage(); }
    }
    public function SET($req)
    {
        try
        {
         $con=$this->connection();
         $sql=mysqli_query($con,$req);
         if( $sql)return true;
         else return false;
        }catch (Exception $ex) { echo $ex->getMessage();}
    }
}

?> 

<?php
include('dbconnect.php');
class Contact extends Dbconnect{
    public $nom;
    public $telephone;
    public $email;
    public $adress;

    public function select(){
        $db=new Dbconnect();
        $req="select * from comptes";

        $data=$db->Get($req);
        print_r($data);
        echo'b1';
       
       

    }


}
?>