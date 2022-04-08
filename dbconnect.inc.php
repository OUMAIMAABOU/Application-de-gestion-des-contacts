<?php
 class Dbconnect{
     protected $servername;
     protected $dbpassword;
     protected $usernamr;
     protected $dbname;
    public function connection(){
         try {
          $con= new mysqli($this->servername="localhost",$this->usernamr="root",$this->dbpassword="", $this->dbname="e_classe_db");
          return $con;
        } catch (Exception $ex) {
            echo $ex->getMessage();

         }
     }

     public function Get($req){
         try{
         $sql=$this->connection()->query($req);
      return $sql; 
         }catch (Exception $ex) {
    echo $ex->getMessage();
 }
     }
     public function SET($req){
        try{
        $sql=$this->connection()->query($req);
        return $sql;
        }catch (Exception $ex) {
   echo $ex->getMessage();
}
    }
}

?> 