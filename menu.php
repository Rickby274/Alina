<?php
     session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/loginsystem/menu.css">


</head>
<body>


<header>

  <div class="bg-img"><img src="pp.jpg">
  <div class="container">
    <div class="topnav">
      <a href="#home">Home</a>
      <a href="catalog.php">Catalog</a>
      <a href="booking.php">Booking</a>
      <a href="#about">About</a>
    </div>
  </div>
</div> 
<div class="nav-login">
      <?php

          if (isset($_SESSION['c_id'])) {
            echo '<form action="includes/logout.inc.php" method="POST">
                  <button type="submit" name="submit">Logout</button>
                    </form>';
          } 
          else {
            echo'<form action="includes/login.inc.php" method="POST">
                    <input type="text" name="uid" placeholder="username/e-mail">
                    <input type="password" name="pwd" placeholder="password">
                    <button type="submit" name="submit">Login</button>
                    <a href="signup.php">Sign up</a>
                 </form>
                    
                            ';
          }
       ?>

              </div>
    </div>
  </nav>
  </header>

<section class="main-container">
  <div class="main-wrapper">
    <?php
         if (isset($_SESSION['c_id'])) {
          echo "you are logged in!";
            }
    ?>


</body>
</html> 
