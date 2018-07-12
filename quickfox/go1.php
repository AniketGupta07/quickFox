<?php
include("config.php");
include("redirect.php");
include("shopping.php");
if(isset($_SESSION["shopping_cart"])){
// Create connection
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
// $poke="truncate list";
//   $connect->query($poke); 

// echo $check;
foreach ($_SESSION["shopping_cart"] as $keys => $values) 
{ 
  $va= $values["item_name"];
  
        $sql = "INSERT INTO list(itm) VALUES ('$va')";
        $connect->query($sql);
      
  }

$connect->close();
}

redirect_to("near.php");

?>