<?php
session_start();
include('user.php');
$errmsg="";
$username=null;
$pass=null;
$cpass=null;
$user = new Utilisateur();

if (isset($_POST['signup'])){
  $username=$_POST['username'];       
  $pass= $_POST['password'];
  $cpass= $_POST['cpassword'];
  $user->SetName($_POST['username']);
  $user->SetPassword($_POST['password']);
  if($user->add()){
    header("Location: login.php");
  }else{
   $errmsg="Compte existe deja";
  
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">

    <title>Sign up</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand">Contacts list</a>
        <form class="form-inline">
          <a class=" my-2 my-sm-0 nav-link text-light" href="#">Login</a>
        </form>
    </nav>

    <div  class="d-flex justify-content-center align-items-center h-100">
      <div class="inner">
            <div class="text-center m-3 text-light">
               <h2> Sign up</h2>
            </div>
            <?php if($errmsg != ""){ ?>
                    <div class="alert alert-danger mt-3">
                        <?php echo $errmsg; ?>
                    </div>
                <?php   $errmsg = null;  } ?>
            <form method="post" action="" onsubmit="return validation()"> 
                <div class="mb-3 ">
                  <label for="username" class="form-label mt-4" style="color: #fff;font-size: large;">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?php echo  $username;?>" placeholder="Username" style=" padding: 11px ;width: 447px;" >
                  <p id="img" style="margin-bottom: -1rem;"></p>
                  <span id="idemail" style="color:red; font-weight: bold;"></span>
                </div>
                 <div class="mb-3 ">
                    <label for="password" class="form-label mt-4" style="color: #fff;font-size:large;">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo  $pass;?>" placeholder="Password" style=" padding: 11px ;width: 447px;" >
                    <p id="img2"  style="margin-bottom: -1rem;"></p>
                    <span id="pass" style="color:red; font-weight: bold; "></span>
                  </div>
                 <div class="mb-3 ">
                  <label for="password" class="form-label mt-4" style="color: #fff;font-size: large;">Password verify</label>
                  <input type="password" class="form-control" id="passwordver" name="cpassword" value="<?php echo  $cpass;?>"placeholder="Password verify" style=" padding: 11px ;width: 447px;" >
                  <p id="img22"  style="margin-bottom: -1rem;"></p>
                  <span id="pass2" style="color:red; font-weight: bold; "></span>
                </div>
       
                 <button type="submit" class="mt-5"  name ="signup" style=" width: 447px;">Sign up</button>
                 <div class="mt-3 mb-3 text-center">
                  <p class="text-light fs-5">Already have an account?<a class="text-primary text-decoration-underline" href="login.php">Login</a>her</p>
                  </div>
            </form>
         
      </div>  
    </div>

      <script src="js/login.js"></script>
</body>
</html>