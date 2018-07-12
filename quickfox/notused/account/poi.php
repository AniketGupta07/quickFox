<?php

   //include("redirecttime.php")
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