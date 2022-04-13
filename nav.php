
<nav class="navbar navbar-expand-lg navbar-dark bg-dark container-fluid ">
   

    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">List contact </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav  ms-auto  mb-2 mb-lg-0 ">
        <?php if( basename($_SERVER['REQUEST_URI'])=="pageProfile.php"){
           echo'<a href="pagecontact.php" style="text-decoration: none; " class="fs-4 me-4">Contact</a>';
         } else if( basename($_SERVER['REQUEST_URI'])=="pagecontact.php"){
           echo '<a href="pageProfile.php" style="text-decoration: none; " class="fs-4 me-5">Profil</a>';}?>
         
        </div>
        <div class="d-flex">
            
          <a href="delete.php?&req=logout" class="fs-4 me-5" style="text-decoration: none; ">Logout</a>

        </div>
      </div>
    </div>
  </nav>