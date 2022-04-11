<?php 
include('contact.php');

  
  $con = new contact();
  // $con->SetName($_POST['nom']);
  // $con->SetTelephone($_POST['phone']);
  // $con->SetEmai($_POST['email']);
  // $con->SetAdress($_POST['adres']);
  $con->SetId(1);

  $res=$con->Select();

 

  
  
  
    
 
  
  

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>list </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <!-- <link rel="stylesheet" href=".css"> -->
    </head>
    <body>

      <header style="border: solid 40px rgb(79, 76, 76);">
        
      </header>
       
        <div class="container " style="margin-left: 16%;">
            <div class="table-responsive">
                <table class="table align-middle">
                  <thead>
                    <tr>
                      <th>Contact list:</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php foreach($res as $rows){?>
                    <td><?= $rows['nom']; ?></td>
                     <th><?= $rows['email']; ?></th>
                     <td><?= $rows['tele']; ?></td>
                     <td><?= $rows['adress']; ?></td>
                     <td> <button class="btn btn-light"><a href="">Edit</a></button>
                        <button class="btn btn-light" ><a href="">Delete</a></button></td>
                    </tr>
                    <?php } ;?>
                    <tr class="align-bottom">
                    
                        <button class="btn btn-light"><a href="">Edit</a></button>
                        <button class="btn btn-light" ><a href="">Delete</a></button>
                        </td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
        </div>
    
    </body>
</html>