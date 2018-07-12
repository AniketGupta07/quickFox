<?php

$servername = "localhost";
$username = "root";
$password = "applemango";
$dbname = "pikachu";
$shoplat=array();
$shoplon=array();
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM data";
$result = $conn->query($sql);
 while($r = $result->fetch_assoc()){
						if(in_array($r["lat"], $shoplat) && in_array($r["lon"], $shoplon)){}
					
					else
					{ 
           					array_push($shoplat, $r["lat"]);

						array_push($shoplon, $r["lon"]);		
					}}
				

    

 ?>
 <!DOCTYPE html>
 <html>
 <head>
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
<link href="https://fonts.googleapis.com/css?family=Markazi+Text|Merriweather" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
  /********************************************************************/
/****************************************************************************/
    body,html{
      height: 100%;}
    body {
      background-image: url("abc.jpg");
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
  #logo{
    position: relative;
    top: -15px;
  }
  </style>
 	<title></title>
 </head>
 <body>
  <div class="top-nav" >
    <ul>
      <li><img src="logo7.png" id="logo"></li>
      <li><a href="index.php"><i class="fa fa-home" style="font-size:30px;color:white;"></i></a></li>
    </ul>

  </div>
  <br><br><br>
 <div id="googleMap" style="width:100%;height:100%;"></div>


 <script>
 	function myMap(){
 		var locat = new Array();
 		var shoplat = <?php echo json_encode($shoplat); ?>;
	var shoplon = <?php echo json_encode($shoplon); ?>;
	  // console.log(shoplat);
	for (var i = 0; i < shoplat.length; i++) {
		var lat = parseFloat(shoplat[i]);
		var lng = parseFloat(shoplon[i]);
    
		var latLng = new google.maps.LatLng(lat,lng);
  
    locat.push(latLng);		}
    var mapProp= {
    center:new google.maps.LatLng(26.5137299,80.2177996),
    zoom:15,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
      

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            		window.myloc = new google.maps.LatLng(pos.lat,pos.lng);
            		console.log(myloc);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
         var marker = new google.maps.Marker({
    position: window.myloc,
    map: map,
    animation: google.maps.Animation.DROP,
    title: i.toString()
  });
      for(var i=0;i<shoplat.length;i++){
 var marker = new google.maps.Marker({
    position: locat[i],
    map: map,
    animation: google.maps.Animation.DROP,
    title: i.toString()
  });
}
	
 	}
 


      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

// var directionsPanel = document.getElementById("my_textual_div");

 </script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkqGlGRIOABg_apXOkVHli_1Qkd-kNFes&callback=myMap"></script>
 </body>
 </html>