<?php
// $servername = "localhost";
// $username = "root";
// $password = "applemango";
// $dbname = "pikachu";
include 'config.php';
 $shoplat=array();
// $conn = new mysqli($servername, $username, $password,$dbname);
$sql = " SELECT name FROM items";

$result = $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      // echo "here";
                array_push($shoplat, $row["name"]);
  
          }}
           else {
    echo "0 results";
}

?>