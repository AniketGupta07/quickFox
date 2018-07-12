<?php

   // include("redirecttime.php")
   include("redirect.php");
   include("validation_errors.php");

   $errors=array();
   $message="";

   if(isset($_POST["submit"]))
   {
    $first=trim($_POST["first_name"]);
    $last=trim($_POST["last_name"]);
    $email=trim($_POST["email"]);
    $username=trim($_POST["username"]);
    $password=trim($_POST["password"]);
    $re_password=trim($_POST["re_password"]);
    
    $fields=array("first_name","last_name","email","username","password");
    foreach($fields as $x)
    {  $value=trim($_POST[$x]);
      if(!check_blank($value))
      { $errors[$x]=ucfirst($x) . " can't be blank";}
    }
    if($password!=$re_password)
    {
      array_push($errors,"Passwords do not match");
    }
    
    

    if(empty($errors))
    {
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
        $sql ="INSERT INTO quickFox (Username,Password,firstname,lastname) VALUES ('$username','$password','$first','$last');";  
      
        $result=mysqli_query($connection,$sql);  
          if($result){  
            //echo "Account Successfully Created";
            echo "<script>
                       alert('Account Successfully Created.Proceeding to login page.');
                        window.location.href='login.php';
                  </script>";  
          } 
          else 
          {  
            echo "Failure!";  
          }  
      //echo "Connection created";
       
    }

       //  if (($username=="abhi" || $username=="shibalik" )&& $password=="password")
       //   {redirect_to("form.php");}
        
       //  else
       //  {
       //      $first=$_POST["first_name"];
       //      $last=$_POST["last_name"];
       //      $email=$_POST["email"];
       //      $username=$_POST["username"];
       //      $message="Incorrect Info";
       // }   
       //used for form  
    }
    
  } 
   else
   {
      $username="";
      $first="";
      $last="";
      $email="";
        $message=" ";
        echo "<br>";
   }


?>
<?php
   

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
        $message1="";
   }

?>


<!DOCTYPE html>
<html>
<head>

  <title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
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

       <center>   
    

     <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Sign Up
          </span>
        </div>
    
      <form class="login100-form validate-form" action="signup.php" method="post">
    
     <div class="wrap-input100 validate-input m-b-26" data-validate="First name is required">
            <span class="label-input100">First name</span>
            <input class="input100" type="text" name="first_name" placeholder="Enter First name" value="<?php echo htmlspecialchars($first)?>" >
            <span class="focus-input100"></span>
          </div>

    <!-- First Name : <input type="varchar" name="first_name" id="ab" value="<?php echo htmlspecialchars($first)?>"><br> -->

    <div class="wrap-input100 validate-input m-b-26" data-validate="Last name is required">
            <span class="label-input100">Last name</span>
            <input class="input100" type="text" name="last_name" placeholder="Enter last name" value="<?php echo htmlspecialchars($last)?>" >
            <span class="focus-input100"></span>
          </div>
   <!--  Last Name  : <input type="varchar" name="last_name" id="ac" value="<?php echo htmlspecialchars($last)?>"><br> -->

   <div class="wrap-input100 validate-input m-b-26" data-validate="Email id is required">
            <span class="label-input100">Email id</span>
            <input class="input100" type="text" name="email" placeholder="Enter last name" value="<?php echo htmlspecialchars($email)?>" >
            <span class="focus-input100"></span>
          </div>
    <!-- Email id   : <input type="varchar" name="email" id="ad" value="<?php echo htmlspecialchars($email)?>"><br> -->

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" placeholder="Enter username" value="<?php echo htmlspecialchars($username)?>" minlength="6">
            <span class="focus-input100"></span>
          </div>

    <!-- Create a Username: <input type="text" name="username" id="ae" minlength="6" value="<?php echo htmlspecialchars($username)?>"> <br> -->

    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter password" minlength="8" maxlength="16">
            <span class="focus-input100"></span>
          </div>

    <!-- Enter a Password: <input type="password" name="password" value="" id="af" minlength="8" maxlength="16" > <br> -->

    <div class="wrap-input100 validate-input m-b-18" data-validate = "Re Password is required">
            <span class="label-input100">Confirm password</span>
            <input class="input100" type="password" name="re_password" placeholder="Re-enter password">
            <span class="focus-input100"></span>
    </div>
  <div  style="color: red;font-size: 14px;"><?php echo $message ?>
    <?php echo form_errors($errors)?></div><br>
    <!-- <div id="ax">Re-enter Password: <input type="password" name="re_password" value="" id="ag" onchange="foo()">
     </div> --> <p><br></p><p><br></p><p><br></p><p><br></p>


     <div class="container-login100-form-btn">
      <br>
            <input type="submit" name="submit" value="Sign Up" class="login100-form-btn"> &nbsp &nbsp &nbsp
            <input type="button" value="Log In" class="login100-form-btn" onclick="window.location.href='login.php'">  
            
          </div>

      <!-- &nbsp &nbsp &nbsp &nbsp<input type="submit" name="submit" value="Sign Up" > &nbsp
     <input type = "button" value="Go to login page" onclick="window.location.href='login.php'">
     <input type="reset" name=""> -->
    </form>
  </div>
</div>
</div>
</center>

</div>
</div>

</script>
<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

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


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == use) {
        use.style.display = "none";
    }
}
</script>        
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
</script>
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
