<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body background="images/bg.jpg">

<br><br>
<center>
<form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <h3>Please fill in this form to create an account.</h3>
    <hr>

    <label for="Name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="Name" required><br>

    <label for="Mobile No."><b>Mobile No.</b></label><br>
    <input type="text" placeholder="Enter Mobile No." name="Mobile No." required><br>
    
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</center>
</body>
</html>
