<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/stylecontent.css">
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
    <h1 align ="center">Sign up</h1>
    
    <input type="text" placeholder="Enter Email" name="email" required>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <input type="password" placeholder="Repeat Password" name="psw" required>
    <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <button type="submit" class="btn">Sign up</button>
    <label>
    <p align ="center">Already have an account? <a href="login.php" >Login</a>.</p>

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