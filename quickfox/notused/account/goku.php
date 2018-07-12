<?php
   
include("redirect.php");
   include("validation_errors.php");
   $errors1=array();
   $message1="";

   if(isset($_POST["submit"]))
   {

    $username1=trim($_POST["log_username"]);
    $password1=trim($_POST["log_password"]);
    
    $fields=array("log_username","log_password");
    foreach($fields as $x)
    {  $value=trim($_POST[$x]);
      if(!check_blank($value))
      { $errors1[$x]=ucfirst($x) . " can't be blank";}
    }
    
    
    

    if(empty($errors1))
    { 
      $abc=$_POST['log_username'];
      $xyz=$_POST['log_password'];
      $dbhost="localhost";
      $dbname="pikachu";
      $dbpswd="applemango";
      $dbuser="root";
      $connection=mysqli_connect($dbhost,$dbuser,$dbpswd,$dbname);

    if(mysqli_connect_errno())
    {
        die( "Database connection failed: " . "(" ."Error no. " . mysqli_connect_errno() . ")" . mysqli_connect_error() );
    }
    else
    {
        $sql ="SELECT * FROM quickFox WHERE Username='$abc' && Password='$xyz'"; 
      
        $result=mysqli_query($connection,$sql); 

          if(mysqli_num_rows($result)>0){  
        
            redirect_to("signup.php");  
          } 
          else 
          {  
             $message1="Incorrect Login Info";
             
          }  
      
       
    }
    }
    
   }
   else
   {
      $username="";
        $message1="Enter login info";
   }

?>

<!DOCTYPE html>
<html>
<head>

	<title>Home</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style type="text/css">
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}
	.body{
		margin:0px;
   
	}
	.top-nav{
		position: static;
		padding: 12px;
		background-color: black;
		align-items: right;
		height: 90px;
	}
	.btn{
		background-color: transparent;
    color: orange;
    border: none;
    cursor: pointer;
    outline: none;
    background-repeat: no-repeat;

}
	}
	.btn:hover {
		opacity: 1;
	}
	#btn_login{
		position: absolute;	
		top: 20px;
		right:140px;
	}
	#btn_signup{
		position: absolute;
		top: 20px;
		right: 40px;
	}
	.container {
    background-color: grey;
    padding: 20px;
}



/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: &#10005;
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}
.textfield{
  width: 100%;
}
.invalid:before {
    position: relative;
    left: -35px;
    content: &#10007;
}
#trial{
  position:absolute;
  left:55%;
  top:120px;
  /*display:none;*/
}
.drop{
  display:none;
}
#trial:hover .drop{
  display:block;
}
.mySlides {display:none;}
</style>
</head>
<body style="background-image: url('background.jpg');">
  

	<input type="button" name="login" value="LOGIN" id="btn_login" class="btn" onclick="document.getElementById('jinx').style.display='block'">
	<input type="button" name="login" value="SIGNUP" id="btn_signup" class="btn" onclick="document.getElementById('id02').style.display='block'">


 <div id="jinx" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:80%;height: 80%;" style="background-color: red";>

       <?php echo $message1 ?>
    <?php echo form_errors($errors1)?>

    <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="login100-form-title-1">
            LogIn
          </span>
        </div>

        <form class="login100-form validate-form" method="post">
          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="log_username" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="log_password" placeholder="Enter password">
            <span class="focus-input100"></span>
          </div>

          <div class="flex-sb-m w-full p-b-30">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            
          </div>

          <div class="container-login100-form-btn">
            <input type="submit" name="submit" value="Log In" class="login100-form-btn"> &nbsp &nbsp &nbsp
            <input type="button" value="Sign up" class="login100-form-btn" onclick="window.location.href='signup.php'">  
            
          </div>
        </form>
      </div>
    </div>
  </div></div>
</div>

</script>
<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="avatar.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
      <div class="container">
      <form action="signup.php" method="post" class="modal-content">
    <label for="email">Email</label><br>
    <input type="text" id="usrname" name="usrname" required><br>

    <label for="psw">Password</label><br>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <span id="trial">
   <span id="allvalid" style="color: red;">
    &#10007;</span>
    <ul class="drop">
  <li id="letter" class="invalid">A <b>lowercase</b> letter</li>
  <li id="capital" class="invalid">A <b>capital (uppercase)</b> letter</li>
  <li id="number" class="invalid">A <b>number</b></li>
  <li id="length" class="invalid">Minimum <b>8 characters</b></li>
</ul>
    </span>
    <br>
    <label for="re_psw">Reenter Password</label><br>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
    <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label><br>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('jinx').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="btn">Sign Up</button>
      </div>
  </form>
</div>
</div>
</div>

<!-- <div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="img1.jpg" style="width:100%">
  <img class="mySlides" src="img3.jpg" style="width:100%">
  <img class="mySlides" src="img4.jpg" style="width:100%">
</div> -->
    
</body>
</html>
    
<script>
  var modal = document.getElementById('jinx');
  var mod1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if(event.target == mod1){
      mod1.style.display="none";
    }
}
/*signup verification*/  
     <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
