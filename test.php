
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
  

    <main>
          <div class="container" >
            <div class="content" style="margin-left: 16%;">
                <div><h1>Contacts</h1></div>
              <div class="list">
                
                  
                  <h3>update contact</h3>              
                </div>

              <form class="form-container" action="" method="POST" onsubmit="return validation()">  
                <div class="mb-3 " >
                <label for="exampleFormControlInput1" class="form-label">msg</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name"  />
                <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                <span id="nomid" style="color:red; font-weight: bold;"></span>
              </div>

                  <div class="mb-3"  >
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone"  >
                    <p id="img2" style="margin-bottom: -1rem;"></p>
                    <span id="phoneid"style="color:red; font-weight: bold;"></span>
                  </div>
              
                  <div class="mb-3"  >
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" >
                    <p id="img3" style="margin-bottom: -1rem;"></p>
                    <span id="mailid" style="color:red; font-weight: bold;"></span>
                  </div>
                  
                <div class="mb-3"  >
                  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                  <span id="addressid"  class="text-danger"></span>
                  <input type="text" class="form-control" id="adress" name="adres" rows="3"   >
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
</div>
</div>
</div>
<script src="js/validation.js"> </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <?php
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>