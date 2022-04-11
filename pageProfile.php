<?php
include('user.php');
session_start();
  $user = new Utilisateur();
  $user->SetId($_SESSION['id']);
  $res=$user->Select();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Sign up</title>
</head>
<body>
      <?php include('nav.php');?>
      
      <di class="d-flex justify-content-center align-items-center">
           <div  class=" m-5  w-100">
            <h1 class="my-5"> Welcome,<?= $_SESSION['name']?>!</h1>
            <h3 class=" my-5"> Your  profile:</h3>
    
            <table class="table">
                <thead>
                  <tr>
                  
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th ></th>
                    <td></td>
                    <td></td>
                   
                  </tr>
                  <tr>
                    <td class="fs-5 fw-bold ">Username;</td>
                    <td> <?= $_SESSION['name']?></td>
                  </tr>
                 
                  <tr>
                    <td class="fs-5 fw-bold">Last login:</td>
                    <td><?= $_SESSION['date']?></td>
                  </tr>
                  <tr>
                    <td class="fs-5 fw-bold">Last login:</td>
                    <td><?= $_SESSION['datelog'];?></td>
                  </tr>
                 
                </tbody>
              </table>
        </div>
      </di>
       
           
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
  </script>
  

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>