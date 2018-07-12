<?php
$servername = "localhost";
$username = "root";
$password = "applemango";
$dbname = "pikachu";
// class latlng{
//  public $lat;
//  public $lon;
// }
$shoplat=array();
$shoplon=array();
$pur=array();
$conn = new mysqli($servername, $username, $password,$dbname);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "hello";

$foo=array(array());
$i=0;$j=0;$c=0;
$sql = " SELECT * FROM list ";

$result = $conn->query($sql);
$num= $result->num_rows;

// echo $result->num_rows;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      array_push($pur, $row["itm"]);
      // echo "here";
        $sql2 = " SELECT * FROM data WHERE( item regexp '".$row["itm"]."')";
        $shopres = $conn->query($sql2);
        // echo $shopres->num_rows;
        if($shopres->num_rows > 0 ){
          while($r = $shopres->fetch_assoc()){
            if(in_array($r["lat"], $shoplat) && in_array($r["lon"], $shoplon)){}
          
          else
          { 
            $foo[$i][0]=$r["lat"];
            $foo[$i][1]=$r["lon"];
            $j=2;$c=0;
            $sq = "SELECT * from list";
            $res=$conn->query($sq);
            while($it = $res->fetch_assoc()){
              $sq2= "SELECT * FROM data WHERE ( item regexp '".$it["itm"]."' AND lat regexp '".$foo[$i][0]."' AND lon regexp '".$foo[$i][1]."')";
              $pr= $conn->query($sq2);
              // echo $pr->num_rows;
             
              if($pr->num_rows==0){
                $foo[$i][$j]="Infinity";
              }
              else {$c++;
                while($p= $pr->fetch_assoc()){
                $foo[$i][$j]=$p["price"];}
            }$j=$j+1;
          }$foo[$i][$j]=$c;
           $i=$i+1;
            array_push($shoplat, $r["lat"]);

            array_push($shoplon, $r["lon"]);    
          }}
        }

    }
}
else {
    echo "0 results";
} 
$conn->close();
// print_r($foo)
?> <!DOCTYPE html>
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
 <div id="googleMap" style="width:100%;height:1000px;"></div>
<div id = "sol"></div>

 <script>
 	function myMap(){

  if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
  
         var pur = <?php echo json_encode($pur); ?>;
  var numitem= <?php echo json_encode($num); ?>;
  var db= <?php echo json_encode($foo); ?>;
console.log(pur);
    var locat = new Array();
    var shoplat = <?php echo json_encode($shoplat); ?>;
  var shoplon = <?php echo json_encode($shoplon); ?>;
    // console.log(shoplat);
  for (var i = 0; i < shoplat.length; i++) {
    var lat = parseFloat(shoplat[i]);
    var lng = parseFloat(shoplon[i]);
    
    var latLng = new google.maps.LatLng(lat,lng);
  
    locat.push(latLng);   }
    var mapProp= {
    center:latLng,
    zoom:17,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
 var marker = new google.maps.Marker({
    position: new google.maps.LatLng(position.coords.latitude,position.coords.longitude),
    map: map
  });
    var infowindow = new google.maps.InfoWindow()

 infowindow.setContent("YOU ARE HERE");
           infowindow.open(map,marker);
  for(var i=0;i<shoplat.length;i++){
  var contentString= "";
  console.log(contentString);
  for( var p=0;p<numitem;p++){
    if(db[i][p+2]!=Infinity){
      contentString+=pur[p]+" , ";
    }
  }

    // contentString= contentString.slice(0,contentString.length-2);
  var n = contentString.lastIndexOf(',');
contentString = contentString.slice(0, n) + contentString.slice(n).replace(',', '');
   var infowindow = new google.maps.InfoWindow()

 var marker = new google.maps.Marker({
    position: locat[i],
    map: map,
    label: (i+1).toString(),
    title: (i+1).toString()
  });
 infowindow.setContent(contentString);
           infowindow.open(map,marker);
google.maps.event.addListener(marker,'click', (function(marker,contentString,infowindow){ 
        return function() {
           infowindow.setContent(contentString);
           infowindow.open(map,marker);
        };
    })(marker,contentString,infowindow)); 


}
  
  }

//To use this code on your website, get a free API key from Google.
//Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp

function showError(error) {
  var x= document.getElementById("googleMap")
  x.style.display = "none";
  var x = document.getElementById("sol");
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "Please try again giving access to your location. "
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
// var directionsPanel = document.getElementById("my_textual_div");




 </script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkqGlGRIOABg_apXOkVHli_1Qkd-kNFes&callback=myMap"></script>
 </body>
 </html>