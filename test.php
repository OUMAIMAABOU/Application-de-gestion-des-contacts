<!-- 
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
      <form method ="POST" action="" enctype="multipart/form-data">
  <input type="file" name ="file">
  <input type="submit" name="upload" value="upload">
</form>
    </body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- <?php -->
    if (isset($_POST['upload'])) {
      // $FILE = $_FILES['file'];
    
      $FILEname=$_FILES['file']['name'];
      $FILESize=$_FILES['file']['size'];
      $FILEType=$_FILES['file']['type'];
      $FILEtmp=$_FILES['file']['tmp_name'];
      $fileexplode =explode('.',$FILEname);
      $fileActual=strtolower(end($fileexplode));
      $typeacc=array('jpg','jpeg','png');
      if(in_array($fileexplode,$typeacc)){
        if($FILESize<1000000){
          $newname=uniqid('',true).".".$fileexplode;
          $filelocal='img/'.$newname;
          
          move_uploaded_file($FILEtmp,$filelocal);
          echo "b1";
        }
      else{
          echo "your file is so big";
        }

      }else{
        echo "cannot upload files of this type";
      }
    }

?> -->