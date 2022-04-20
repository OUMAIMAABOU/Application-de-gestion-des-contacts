<?php 
  require_once('model/contact.php');
  session_start();
  if(empty($_SESSION["name"]))header('location:login.php');
  $con = new contact();
  $con->SetId($_SESSION['id']);
  $res=$con->Select();
  if (isset($_POST['save']))
  {
    $con->setadd($_POST['nom'],$_POST['email'],$_POST['phone'],$_POST['adres'],$_SESSION['id']);
    if($con->Add())header("Location: pagecontact.php");
    else $error = "incorect username or password !!";
  }
   

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>list </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <body>
    <?php include('nav.php');?>
      
       
        <div class="container mt-5 " style="margin-left: 16%; ">
            <div class="table-responsive ">
            <div class="d-flex justify-content-between">
                    
                      <h3>Contact list:</h3>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add Contact
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <main>
        <div class="container" >
            <div class="content" style="margin-left: 16%;">
                <div><h1>Contacts</h1></div>
            <div class="list">
                <h2>Contacts list:</h2>
                <span>No contacts.</span>
                <h3>Add contact</h3>              
                </div>

            <form class="form-container" action="" method="POST" onsubmit="return validation()">  
                <div class="mb-3 " >
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name">
                <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
            </div>
            <div class="mb-3"  >
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                    <p id="img3" style="margin-bottom: -1rem;"></p>
                    <span id="mailid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                </div>
                <div class="mb-3"  >
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                    <p id="img2" style="margin-bottom: -1rem;"></p>
                    <span id="phoneid" style="color:red; font-weight: bold;"></span>
                </div>
            
            
                <div class="mb-3" >
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <span id="addressid"  class ="mt-5 text-danger"style="font-weight: bold;"></span>
                <textarea class="form-control" id="adress" name="adres" rows="3"></textarea>
                <p id="img4" style="margin-bottom: -1rem;"></p> <span id="addid" style="color:red; font-weight: bold;"></span></div>
                <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" name="save" class="btn btn-primary mT-3">Save</button>
                </div>

            </div>

            </form>         
                        
        </div>
    </main>
    </div>
   
</div>
</div>
</div>
                    
                 
            </div>
                <table class="table align-middle">
                 
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
    <script src="js/validation.js"> </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        
</html>