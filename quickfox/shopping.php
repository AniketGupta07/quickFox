

<?php
session_start();
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
             echo '<script>window.location="bakeries1.php"</script>';  
               // echo '<script>window.location="shopF1.php"</script>'; 
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
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
             echo '<script>window.location="bakeries1.php"</script>';  
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
if(isset($_POST["clear_cart"])){
  session_destroy();
  echo '<script>window.location="index.php"</script>';
}  



?>