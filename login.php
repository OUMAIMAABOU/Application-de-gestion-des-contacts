<?php
session_start();
require_once('model/user.php');

$error = "";
$username=null;
$pass=null;
$user = new Utilisateur();
if (isset($_POST['Login'])){
  $username=$_POST['username'];
  $pass=$_POST['password'];
  if(!empty($_POST['username']) && !empty($_POST['password'])){
  
      if (preg_match('/\"|\#|\'|\*/',  $username)||preg_match('/\"|\#|\'|\*/',  $pass)||!preg_match('/[a-zA-Z]{3,20}/',  $username)|| strlen($pass)<6){
        $error= "le format de text invalide";
}else{
  $user->SetName($_POST['username']);
  $user->SetPassword($_POST['password']);
  if($user->login()){
  header("Location: pagecontact.php");
  }else{
    $error = "incorect username or password ";
  }
}

  }else{
    $error ="Remplir les chemps";
  }
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" href="index.php">Contacts list</a>
        <form class="form-inline">
          <a class=" my-2 my-sm-0 nav-link text-light" href="#">Login</a>
        </form>
      </nav> 
<div  class="d-flex justify-content-center align-items-center h-100">
      <div class="  inner">
      <form method="POST" action="" >
         
          <h3 class="text-center text-light mt-5">Authenticate</h3>
          <?php if($error != ""){ ?>
                    <div class="alert alert-danger mt-3">
                        <?php echo $error; ?>
                    </div>
                <?php   $error = null;  } ?>
          <div class="mt-4" >
            <input type="text" class="inputbtn" name="username" id="username" value="<?php echo  $username;?>" placeholder="username" >
            
            <p id="img" style="margin-bottom: -1rem;"></p>
            <span id="idemail" style="color:red; font-weight: bold;"></span>
          <div>

          <div  class="mt-5">
            <input type="password" class="inputbtn" name="password" id="password" value="<?php echo  $pass;?>" placeholder="Password"  >
            <p id="img2"  style="margin-bottom: -1rem;"></p>
            <span id="pass" style="color:red; font-weight: bold; "></span>
           </div >
          <div class="mt-5">  
            <input type="checkbox" name ="check" onclick="myFunction()"  />  
            <label  class =" text-center text-light" for="check">Show me password </label>  
          </div> 

        <button type="submit" name="Login"  id="bntsub"  > Login</button>
        <div class="text-light mt-4">No account? <a href="signUp.php">Sign up</a> here.</div>
      </form>
      </div>
      </div>
      <script>
  function myFunction() {
  if (document.getElementById("password").type === "password") {
    document.getElementById("password").type = "text";
  } else {
    document.getElementById("password").type = "password";
  }
}
</script>

      <script src="js/login.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2X.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>