<head><link rel="stylesheet" type="text/css" href="CSS/styleindex.css"></head>
<a href="index.php" class="header-logo">
    <img src="images/cteck1-01.png" class="header-logo-img">
</a>
<ul>
    <li class="header-menu-item">
        <a href="index.php" class="header-menu-link">Home</a>

    </li>

    <li class="header-menu-item">
        <a href="content.php" class="header-menu-link">Product</a>
        
    </li>

    <li class="header-menu-item">
        <a href="#" class="header-menu-link">Liên hệ</a>
        
    </li>
</ul>
<div class="header-account">
<<<<<<< HEAD
    <a href="login.php" class="button button-login">Login</a>
    <a href="signup.php" class="button button-signup">Sign Up</a>
</div>
=======
    <button class="open-button" onclick="OpenLogin()">Login</button>
    <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
        <h1>Login</h1>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        <span class ="fp"> <a href="#">Forgot password?</a></span>
        </label>
        <button type="submit" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="CancelLogin()">Cancel</button>
        </form>
    </div>
    
    <button class="open-button" onclick="OpenR()">sign up</button>
    <div class="form-popup" id="myForm2">
        <form action="/action_page.php" class="form-container" >
        <h1>Register</h1>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <label for="rpsw"><b>Repeat password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw" required>
<!-- <label for="name"><b>Full name</b></label>
        <input type="text" placeholder="Enter fullname" name="psw" required>
        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter address" name="psw" required>
        <label for="phonenum"><b>Phone number</b></label>
        <input type="text" placeholder="Enter Phone number" name="phonenum" required>
        <hr>
-->
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="btn">Register</button>
        <button type="button" class="btn cancel" onclick="CancelR()">Cancel</button>
        </form>
    </div>
</div>
</div>

<script>
function OpenLogin() {
  document.getElementById("myForm").style.display = "block";
}

function CancelLogin() {
  document.getElementById("myForm").style.display = "none";
}
function OpenR() {
  document.getElementById("myForm2").style.display = "block";
}

function CancelR() {
  document.getElementById("myForm2").style.display = "none";
}
</script>
>>>>>>> f6b294313fe9d12be4bb3f0a8b06420a5be5c969
