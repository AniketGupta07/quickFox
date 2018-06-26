<?php
$servername = "localhost";
$username = "username";
$password = "password";

$shops=array();
$conn = new mysqli($servername, $username, $password);
$sql = " SELECT * FROM list ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $sql2 = " SELECT location FROM table
					WHERE
					(
    					category LIKE $row["item"]
					)";
				$shopres = $conn->query($sql2);
				if($shopres->numres > 0 ){
					while($r = $shopres->fetch_assoc()){
						if(array_search($r["location"], $shops) == 'FALSE')
						array_push($shops, $r["location"]);		
					}
				}

    }
} else {
    echo "0 results";
}

$conn->close();
?>
<script type="text/javascript" src="BPTSP.js"></script>
<script type="text/javascript" src="tsp.js"></script>
<script type="text/javascript">
	var shops = <?php echo json_encode($shops); ?>;
	var myOptions = { zoom: zoom, center: center, mapTypeId: google.maps.MapTypeId.ROADMAP };
	myMap = new google.maps.Map(div, myOptions);
	directionsPanel = document.getElementById("my_textual_div");
	tsp = new BpTspSolver(myMap, directionsPanel);
	tsp.setAvoidHighways(true); 
	tsp.setTravelMode(google.maps.DirectionsTravelMode.WALKING);
	for (var i = shops.length- 1; i >= 0; i--) {
		tsp.addWaypoint(shops[i],null)
	}
	tsp.solveRoundTrip(null);
	var dir = tsp.getGDirections();
</script>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="my_textual_div"></div>
</body>
</html>