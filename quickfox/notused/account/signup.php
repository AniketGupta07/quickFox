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

<script type="text/javascript">
  
  function foo()
  {   var a=document.getElementByid('ax');
      a.innerHTML+="pikachu";
      // if(document.getElementByid('15').value==document.getElementByid('16').value)
      // { document.getElementByid('17').innerHTML= &#10004 ;  }
  }

</script>

<html>
<head>
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
</head>
<title>
  Sign Up
</title>
<body>

  
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