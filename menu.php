<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="style1.css">

</head>
<body>

<?php 
session_start();
       $hide="hidden";
       $showname="";
?>

     <!-- thanh menu  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid menu-bar">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link  " aria-current="page" href="#"><p class="menu-text1">Market Online</p></a>
              <a class="nav-link" href="#"><p class="menu-text1">Vegetable</p></a>
              <a class="nav-link" href="#"><p class="menu-text1">Cart</p></a>
              
              <li class="nav-item" <?php echo $hide=(isset($_SESSION['name'])) ? "" : "hidden";  ?>>
              <a href="#" class="nav-link">History</a>
              </li>
              <li class="nav-item" <?php echo $hide=(isset($_SESSION['name'])) ? "" : "hidden";  ?>>
              <a href="#" class="nav-link" >Logout</a>
              </li>
              <li class="nav-item" <?php echo $hide=(isset($_SESSION['name'])) ? "" : "hidden";  ?> >
              <button class="btn btn-info"> <?php echo $showname = $_SESSION['name']; ?> </button>
              </li>
            </div>
          </div>
        </div>
      </nav>
    
</body>
</html>