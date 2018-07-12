

<?php
session_start();
if(isset($_POST["login"])){
  $_SESSION["user"]=$_POST["username"];
}

if(isset($_GET["add_to_cart"])){
	if(isset($_SESSION["shopping_cart"]))  
      {  
      		// echo '<script>alert("session entered")</script>';
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["hidden_id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["hidden_id"],  
                     'item_name'               =>     $_GET["hidden_name"],  
                     'image_source'          =>     $_GET["hidden_source"], 
                     'quantity'=>$_GET["quantity"],
                );  
                $_SESSION["shopping_cart"][$count] = $item_array; 
                header('Location: ' . $_SERVER['HTTP_REFERER']);
             //echo '<script>window.location="bakeries1.php"</script>';  
               // echo '<script>window.location="shopF1.php"</script>'; 
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>'; 
                //header('Location: ' . $_SERVER['HTTP_REFERER']); 
             echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                     'item_id'               =>     $_GET["hidden_id"],  
                     'item_name'               =>     $_GET["hidden_name"],  
                     'image_source'          =>     $_GET["hidden_source"],  
                     'quantity'=>$_GET["quantity"],
                );  
           $_SESSION["shopping_cart"][0] = $item_array;  
           header('Location: ' . $_SERVER['HTTP_REFERER']);
            // echo '<script>window.location="bakeries1.php"</script>';  
      } 
}      
if(isset($_GET["remove"])) {
      		foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id_"])  
                {  

                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }
} 


$servername = "localhost";
$username = "root";
$password = "applemango";
$dbname = "pikachu";

if(isset($_POST["clear_cart"])){
  unset($_SESSION["shopping_cart"]);
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  $poke="truncate list";
  $conn->query($poke); 

  echo '<script>window.location="cart.php"</script>';
}   



// if(isset($_SESSION["shopping_cart"])){
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // echo $check;
// foreach ($_SESSION["shopping_cart"] as $keys => $values) 
// { 
//   $va= $values["item_name"];
//   if(isset($_SESSION["check"])){
//     if(!in_array($va, $_SESSION["check"])){
//       $count=count($_SESSION["check"]);
//         $sql = "INSERT INTO list(itm) VALUES ('$va')";
//         $conn-query($sql);
//         $_SESSION["check"][$count]=$va;
//     } 
// else{
//   $_SESSION["check"][0]=$va;
// }}
//     // else {
// //     echo "Error: " . $sql . "<br>" . $conn->error;
// // }


// }

// $conn->close();
// }
?>