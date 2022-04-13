<?php
include('contact.php');
session_start();

try{
  $con=new contact();
  $con->SetIdcontact($_GET['id']);
if(isset($_GET['id'])){
    
    if($_GET['req']=='delete'){
     
        if($con->Delet()) header("Location: pagecontact.php");
        

    }else if($_GET['req']=='update'){
 
       
    
      $con = new contact();
      $con->SetIdcontact($_GET['id']);
      
      
      $res=$con->Selectone();
      if(isset($_POST['update'])){
          $con->SetName($_POST['nom']);
          $con->SetTelephone($_POST['phone']);
          $con->SetEmai($_POST['email']);
          $con->SetAdress($_POST['adres']);
          if($con->update())  header("Location: pagecontact.php");
      }
      $rows=$res[0];?>
  <!DOCTYPE html>
  <html>
      <head>
          <meta charset="utf-8">
          <title>list contact</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>        
      </head>
      <body>
        
      <main>
          <div class="container" >
            <div class="content" style="margin-left: 16%;">
                <div><h1>Contacts</h1></div>
              <div class="list">
                
                  
                  <h3>update contact</h3>              
                </div>

              <form class="form-container" action="" method="POST" onsubmit="return validation()">  
                <div class="mb-3 " >
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name" value="<?php echo $rows['nom']; ?>" />
                <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                <span id="nomid" style="color:red; font-weight: bold;"></span>
              </div>

                  <div class="mb-3"  >
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="<?php echo $rows['tele']; ?>" >
                    <p id="img2" style="margin-bottom: -1rem;"></p>
                    <span id="phoneid"style="color:red; font-weight: bold;"></span>
                  </div>
              
                  <div class="mb-3"  >
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"  value="<?php echo $rows['email']; ?>" >
                    <p id="img3" style="margin-bottom: -1rem;"></p>
                    <span id="mailid" style="color:red; font-weight: bold;"></span>
                  </div>
                  
                <div class="mb-3"  >
                  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                  <span id="addressid"  class="text-danger"></span>
                  <input type="text" class="form-control" id="adress" name="adres" rows="3"  value="<?php echo $rows['adress']; ?>" >
                  <p id="img4" style="margin-bottom: -1rem;"></p>
                    <span id="addid" style="color:red; font-weight: bold;"></span>
                </div>
                
                <div class="col-auto">
                  <button type="submit" name="update" class="btn btn-primary mt-3">Save</button>
                </div>

            </div>
              </form>         
                    
          </div>
      </main>
              <script src="js/validation.js"> </script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
              
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
       
    </body>
</html>
   <?php }  
    }
  }catch (Exception $ex) {echo $ex->getMessage();}

  if($_GET['req']=='logout'){
    session_destroy();
 header("Location: login.php");
    

}


?>