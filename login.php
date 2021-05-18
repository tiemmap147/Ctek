<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/stylecontent.css">
    <link rel="shortcut icon" type="image/png" href="images/cteck1-01.png"/>
</head>
<body>
<header class="header">
		<?php
		include("header.php");
		?>


	</header>
  <div class="login">
  <form action="/action_page.php" class="container" >
    <div>
    <h1 align ="center">Login</h1>
    <input type="text" placeholder="Enter Email" name="email" required>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <button type="submit" class="btn">Login</button>
    <label>
    <p align ="center">Not a member <a href="Signup.php" >Sign Up</a>.</p>

    </label>
    </div>
  </form>

</div>

<footer class="footer">
        <?php
        include("footer.php");
        ?>


    </footer>

</body>
</html>