<?php
include('contact.php');
try{
  $con=new contact();
  $con->SetIdcontact($_GET['id']);
if(isset($_GET['id'])){
    
    if($_GET['req']=='delete'){
     
        $con->Delet();

    }else if($_GET['req']=='update'){
 
        echo"b1 test";
    }  
    }
  }catch (Exception $ex) {echo $ex->getMessage();}




?>