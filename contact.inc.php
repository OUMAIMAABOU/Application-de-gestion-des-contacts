<?php
class contact extends Dbconnect{
    public $nom;
    public $telephone;
    public $email;
    public $adress;

    public function select(){
        $req="select * from comptes";
       $res= $this-> Get($req);
       $row=$res->num_rows;
       if($row>0){
           while($rows=$res->fetch_assoc()){
               echo $r[]=$rows;
           }
       }

    }


}
?>