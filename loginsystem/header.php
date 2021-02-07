<?php
     session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/loginsystem/style.css">

</head>
<body>

	<header>
	<nav>

		<div class="main-wrapper">
			<ul>
        <li><a>
            <img class="logo" src="/img/logo.png" alt="Alina" title="Alina">
                    </a> </li>
				<li><a href="index.php">Home</a></li>
				<li><a href="/aaa/portfolio.php">Services</a></li>
				<li><a href="index.php">Booking</a></li>
				<li><a href="index.php">Vacancy</a></li>
			</ul>
			<div class="nav-login">
			<?php
			    if (isset($_SESSION['u_id'])) {
			    	echo '<form action="includes/logout.inc.php" method="POST">
			     	      <button type="submit" name="submit">Logout</button>
			              </form>';
			    } else {
			    	echo'<form action="includes/login.inc.php" method="POST">
					      <input type="text" name="uid" placeholder="username/e-mail">
					      <input type="password" name="pwd" placeholder="password">
					      <button type="submit" name="submit">Login</button>
				          </form>
                  <button type="submit" name="submit"><a href="signup.php">Sign up</a></button>';
			    }

			 ?>

				 			</div>
		</div>
	</nav>
	</header>

</body>
</html>
