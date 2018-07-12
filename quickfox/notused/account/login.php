<?php
   include("redirect.php");
   include("validation_errors.php");
   include 'shopping.php';
   $errors=array();
   $message="";

   if(isset($_POST["submit"]))
   {

   	$username=trim($_POST["username"]);
   	$password=trim($_POST["password"]);
   	
    $fields=array("username","password");
    foreach($fields as $x)
    {  $value=trim($_POST[$x]);
      if(!check_blank($value))
      { $errors[$x]=ucfirst($x) . " can't be blank";}
    }
    
    
    

    if(empty($errors))
    { 
      $abc=$_POST['username'];
      $xyz=$_POST['password'];
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
        
            redirect_to("localhost/quickFox/index.php");  
          } 
          else 
          {  
             $message="Incorrect Login Info";
             
          }  
      
       
    }
    }
    
   }
   else
   {
   		$username="";
        $message="";
   }

?>

<html>
<head>
  <title>Login V15</title>
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
</head>
<title>
	form
</title>
<body style="background-image: url("/images/bg.jpg");>
     <!-- <center>   --> 
    
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
            <input class="input100" type="text" name="username" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter password">
            <span class="focus-input100"></span>

          </div>

          <div class="flex-sb-m w-full p-b-30">
            <div class="contact100-form-checkbox">
              <p style="color: red;"><?php echo $message ?>
    <?php echo form_errors($errors)?>
</p>
              
            </div>

            
          </div>

          <div class="container-login100-form-btn">
            <input type="submit" name="submit" value="Log In" class="login100-form-btn"> &nbsp &nbsp &nbsp
            <input type="button" value="Sign up" class="login100-form-btn" onclick="window.location.href='signup.php'">  
            
          </div>
        </form>
      </div>
    </div>
  </div>
    <!-- 
      <form action="login.php" method="post">
      Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username)?>"> <br />
      Password: <input type="password" name="password" value=""> <br>
      
      &nbsp &nbsp &nbsp &nbsp<input type="submit" name="submit" value="SUBMIT"> &nbsp
     <input type = "button" value="Sign up" onclick="window.location.href='signup.php'">
    </form>
  </center>
     -->

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

	

</body>
</html>