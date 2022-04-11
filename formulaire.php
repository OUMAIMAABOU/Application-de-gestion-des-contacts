<?php 
include('contact.php');
session_start();
  $con = new contact();
  $con->SetId($_SESSION['id']);
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
    <?php include('nav.php');?>
      
       
        <div class="container mt-5 " style="margin-left: 16%; ">
            <div class="table-responsive ">
                <table class="table align-middle">
                  <thead>
                    <tr>
                      <th>Contact list:</th>
                      <th><button class="btn-primary"> ADD</button></th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php foreach($res as $rows){?>
                    <td><?= $rows['nom']; ?></td>
                     <th><?= $rows['email']; ?></th>
                     <td><?= $rows['tele']; ?></td>
                     <td><?= $rows['adress']; ?></td>
                     <td> <button class="btn btn-light"><a href="delete.php?id=<?= $rows['idcontact']?>&req=update">Edit</a></button>
                        <button class="btn btn-light" ><a href="delete.php?id=<?= $rows['idcontact']?>&req=delete"> Delete</a></button></td>
                    </tr>
                    <?php } ;?>
                    <tr class="align-bottom">
                    
                        </td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
        </div>
    
    </body>
</html>