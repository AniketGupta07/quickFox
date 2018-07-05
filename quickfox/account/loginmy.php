<?php
   include("redirect.php");
   include("validation_errors.php");

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
        $sql ="SELECT * FROM quickfox WHERE Username='$abc' && Password='$xyz'"; 
      
        $result=mysqli_query($connection,$sql); 

          if(mysqli_num_rows($result)>0){  
        
            redirect_to("localhost/quickfox/index.php");  
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
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Markazi+Text|Merriweather" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">

	/********************************************************************/
/****************************************************************************/
		body,html{
			height: 100%;}
		body {
			background-image: url("10.jpg");
			background-size: 1920px 1080px;
			background-repeat: no-repeat;
		}
		.container {

			width: 100%;
			padding: 15px;
			display: -webkit-box;
  			display: -webkit-flex;
  			display: -moz-box;
  			display: -ms-flexbox;
  			flex-wrap: wrap;
  			display: flex;
  			align-items: center;
			justify-content: center;
			vertical-align: center;
			}
		.login{
			top: 100px;
			background:rgba(255,255,255,0.7);
			position:relative;
			overflow: hidden;
			width: 670px;
			min-height: 300px;
			border-radius: 10px;
		}
		.head{
			background-color: #333;
			font-size: 30px;
			font-weight: 900;
			color: white;
			text-align: center;
			width: 100%;
			padding-top: 40px;
			vertical-align: center;
			opacity: 1;
			padding-bottom: 15px;
			font-family: 'Merriweather', serif;
		}
		.top-nav{
			padding: 16px 14px;
			background-color: #333;
			color: white;
			top: 0;
			left: 0;
			position: fixed;
			width: 100%;
		}
		li {
			display: inline-block;
			padding-left: 10px;
			padding-right: 10px;
		}
		a{
			text-decoration: none;
			color: white;
		}
	
	</style>
	<title>Login</title>
</head>
<body>
	<div class="top-nav">
		<ul>
			<li>Logo</li>
			<li><a><i class="fa fa-home"></i></a></li>
		</ul>

	</div>
	<div class="container">
		<div class="login">
			<div class="head">
				<span class="log">Login</span>
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


</body>
</html>