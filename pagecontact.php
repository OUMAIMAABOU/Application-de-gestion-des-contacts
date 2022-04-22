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
    if($con->Add())header('location:pagecontact.php');
    else $error = "incorect username or password !!";
  }
   

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>list </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
      <?php include('nav.php');?>
         <div class="fluid-container mt-5 mx-3">
            <div>
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
                                    <div><h1>Contacts</h1>
                                </div>
                                <div class="list">
                                    <h2>Contacts list:</h2>
                                    <span>No contacts.</span>
                                    <h3>Add contact</h3>              
                                </div>
                                <form class="form-container" action="" method="POST" onsubmit="return validation()">  
                                    <div class="mb-3 " >
                                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name" style="margin-bottom: 32px;">
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
                                        <p id="img4" style="margin-bottom: -1rem;"></p> <span id="addid" style="color:red; font-weight: bold;"></span>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="save" class="btn btn-primary mT-3">Save</button>
                                </div>
                            </form>                      
                        </div>
                    </main>
                </div>
           </div>
       </div>
     </div>                            
     </div>
    <div class="table-responsive mt-3 mx-3">
        <div class=" table-responsive-sm table-responsive-md ">
            <table class="table">
                <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gmail</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($res as $key=> $rows){?>
                        <tr>
                        <th scope="row"> <?=  $key+1; ?></th>
                        <td><?= $rows['nom']; ?></td>
                        <td><?= $rows['email']; ?></td>
                        <td><?= $rows['tele']; ?></td>
                        <td><?= $rows['adress']; ?></td>
                        <td><button class="btn btn-primary" ><a class ="text-light  text-decoration-none fs-5" href="delete.php?id=<?= $rows['idcontact']?>&req=update"  >Edit</a></button></td>
                        <td><button class="btn btn-primary" ><a  class ="text-light  text-decoration-none fs-5" href="delete.php?id=<?= $rows['idcontact']?>&req=delete" onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}"> Delete</a></button></td>
                        </tr>
                        <?php } ;?>
                    </tbody>
            </table>
     </div>
    </div>
   </div>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="js/validation.js"> </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
  
        
</html>