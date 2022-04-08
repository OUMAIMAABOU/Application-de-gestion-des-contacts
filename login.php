<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css "rel="stylesheet" >

</head>
<body>
  <?php include 'navlogin.php'?>

     <div class="row formcontainer">

      <div class="col-lg-4  col-md-12 p-0">
      <img src="img/41889883.jpg" width="450px">
      </div>

      <div class="col-lg-5 col-md-12">
      <form method="post" action="" onsubmit="return validation()">
              <h3 >Authenticate</h3>
              
              <div>
                <input type="text" name="username" id="username" placeholder="username" style=" padding: 11px ;width: 447px;" >
                
                <p id="img" style="margin-bottom: -1rem;"></p>
                <span id="idemail" style="color:red; font-weight: bold;"></span>
              <div>

              <div  class="mt-5">
                <input type="password" name="password" id="password" placeholder="Password" style="  padding: 11px ;width: 447px;" >
                <p id="img2"  style="margin-bottom: -1rem;"></p>
                <span id="pass" style="color:red; font-weight: bold; "></span>

            </div >
            <input type="submit" name="Login" id ="btnsub" value="login" class="   btn-primary mt-5 " style=" width: 447px;" >
            <div>No account? <a href="#">Sign up</a> here.</div>
          </form>

      </div>
      
     </div>
  
  <script src="js/login.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2X.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>