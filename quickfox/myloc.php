<?php
$servername = '192.168.31.9';
$username = "user";
$password = "applemango";
$dbname = "pikachu";
// class latlng{
//  public $lat;
//  public $lon;
// }
include 'shopping.php';
include 'config.php';

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

// echo $result->num_rows;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if(in_array($row["itm"], $pur)){}
        else{
      array_push($pur, $row["itm"]);
      // echo "here";
        $sql2 = " SELECT * FROM data WHERE( item = '".$row["itm"]."')";
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
              $sq2= "SELECT * FROM data WHERE ( item = '".$it["itm"]."' AND lat regexp '".$foo[$i][0]."' AND lon regexp '".$foo[$i][1]."')";
              $pr= $conn->query($sq2);
              // echo $pr->num_rows;
             
              if($pr->num_rows==0){
                $foo[$i][$j]='Infinity';
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

    }}
}
else {
    echo "0 results";
}
$num = sizeof($pur);
$conn->close();
// print_r($foo)
?>
<!DOCTYPE html>
<html>
<head>















<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- font-awesome css -->
        <!-- <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"> -->
        <!-- ionicons.min css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- nivo-slider.css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
        <!-- style css -->
        <link rel="stylesheet" href="style1.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <script src="js/search.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
         <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
        <script src="js/wow.min.js"></script>
    <!-- owl.carousel.min.js -->
        <script src="js/owl.carousel.min.js"></script>
    <!-- jquery.nivo.slider.js -->
        <script src="js/jquery.nivo.slider.js"></script>
    <!-- jquery.elevateZoom-3.0.8.min.js -->
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
    <!-- jquery.parallax-1.1.3.js -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.counterup.min.js -->
        <script src="js/jquery.counterup.min.js"></script>
    <!-- waypoints.min.js -->
        <script src="js/waypoints.min.js"></script>
    <!-- plugins js -->
        <script src="js/plugins.js"></script>
    <!-- main js -->
        <script src="js/main.js"></script>










  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Tangerine");
 @import url('https://fonts.googleapis.com/css?family=Cinzel');
 @import url('https://fonts.googleapis.com/css?family=Slabo+27px');

 body {
  font-family: 'Tangerine', serif;;
  background-color: #FFFFFF;

}

#container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  margin: 0 auto;
  width: 50%;
}

@-webkit-keyframes rotate {
  0% {
    -webkit-transform: rotateX(-37.5deg) rotateY(45deg);
            transform: rotateX(-37.5deg) rotateY(45deg);
  }
  50% {
    -webkit-transform: rotateX(-37.5deg) rotateY(405deg);
            transform: rotateX(-37.5deg) rotateY(405deg);
  }
  100% {
    -webkit-transform: rotateX(-37.5deg) rotateY(405deg);
            transform: rotateX(-37.5deg) rotateY(405deg);
  }
}

@keyframes rotate {
  0% {
    -webkit-transform: rotateX(-37.5deg) rotateY(45deg);
            transform: rotateX(-37.5deg) rotateY(45deg);
  }
  50% {
    -webkit-transform: rotateX(-37.5deg) rotateY(405deg);
            transform: rotateX(-37.5deg) rotateY(405deg);
  }
  100% {
    -webkit-transform: rotateX(-37.5deg) rotateY(405deg);
            transform: rotateX(-37.5deg) rotateY(405deg);
  }
}
.cube, .cube * {
  position: absolute;
  width: 151px;
  height: 151px;
}

.sides {
  -webkit-animation: rotate 3s ease infinite;
          animation: rotate 3s ease infinite;
  -webkit-animation-delay: .8s;
          animation-delay: .8s;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-transform: rotateX(-37.5deg) rotateY(45deg);
          transform: rotateX(-37.5deg) rotateY(45deg);
}

.cube .sides * {
  box-sizing: border-box;
  background-color: rgba(242, 119, 119, 0.5);
  border: 15px solid white;
}

.cube .sides .top {
  -webkit-animation: top-animation 3s ease infinite;
          animation: top-animation 3s ease infinite;
  -webkit-animation-delay: 0ms;
          animation-delay: 0ms;
  -webkit-transform: rotateX(90deg) translateZ(150px);
          transform: rotateX(90deg) translateZ(150px);
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
}
@-webkit-keyframes top-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateX(90deg) translateZ(150px);
            transform: rotateX(90deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateX(90deg) translateZ(75px);
            transform: rotateX(90deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateX(90deg) translateZ(75px);
            transform: rotateX(90deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateX(90deg) translateZ(150px);
            transform: rotateX(90deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateX(90deg) translateZ(150px);
            transform: rotateX(90deg) translateZ(150px);
  }
}
@keyframes top-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateX(90deg) translateZ(150px);
            transform: rotateX(90deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateX(90deg) translateZ(75px);
            transform: rotateX(90deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateX(90deg) translateZ(75px);
            transform: rotateX(90deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateX(90deg) translateZ(150px);
            transform: rotateX(90deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateX(90deg) translateZ(150px);
            transform: rotateX(90deg) translateZ(150px);
  }
}
.cube .sides .bottom {
  -webkit-animation: bottom-animation 3s ease infinite;
          animation: bottom-animation 3s ease infinite;
  -webkit-animation-delay: 0ms;
          animation-delay: 0ms;
  -webkit-transform: rotateX(-90deg) translateZ(150px);
          transform: rotateX(-90deg) translateZ(150px);
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
}
@-webkit-keyframes bottom-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateX(-90deg) translateZ(150px);
            transform: rotateX(-90deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateX(-90deg) translateZ(75px);
            transform: rotateX(-90deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateX(-90deg) translateZ(75px);
            transform: rotateX(-90deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateX(-90deg) translateZ(150px);
            transform: rotateX(-90deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateX(-90deg) translateZ(150px);
            transform: rotateX(-90deg) translateZ(150px);
  }
}
@keyframes bottom-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateX(-90deg) translateZ(150px);
            transform: rotateX(-90deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateX(-90deg) translateZ(75px);
            transform: rotateX(-90deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateX(-90deg) translateZ(75px);
            transform: rotateX(-90deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateX(-90deg) translateZ(150px);
            transform: rotateX(-90deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateX(-90deg) translateZ(150px);
            transform: rotateX(-90deg) translateZ(150px);
  }
}
.cube .sides .front {
  -webkit-animation: front-animation 3s ease infinite;
          animation: front-animation 3s ease infinite;
  -webkit-animation-delay: 100ms;
          animation-delay: 100ms;
  -webkit-transform: rotateY(0deg) translateZ(150px);
          transform: rotateY(0deg) translateZ(150px);
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
}
@-webkit-keyframes front-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateY(0deg) translateZ(150px);
            transform: rotateY(0deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateY(0deg) translateZ(75px);
            transform: rotateY(0deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateY(0deg) translateZ(75px);
            transform: rotateY(0deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateY(0deg) translateZ(150px);
            transform: rotateY(0deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateY(0deg) translateZ(150px);
            transform: rotateY(0deg) translateZ(150px);
  }
}
@keyframes front-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateY(0deg) translateZ(150px);
            transform: rotateY(0deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateY(0deg) translateZ(75px);
            transform: rotateY(0deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateY(0deg) translateZ(75px);
            transform: rotateY(0deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateY(0deg) translateZ(150px);
            transform: rotateY(0deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateY(0deg) translateZ(150px);
            transform: rotateY(0deg) translateZ(150px);
  }
}
.cube .sides .back {
  -webkit-animation: back-animation 3s ease infinite;
          animation: back-animation 3s ease infinite;
  -webkit-animation-delay: 100ms;
          animation-delay: 100ms;
  -webkit-transform: rotateY(-180deg) translateZ(150px);
          transform: rotateY(-180deg) translateZ(150px);
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
}
@-webkit-keyframes back-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateY(-180deg) translateZ(150px);
            transform: rotateY(-180deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateY(-180deg) translateZ(75px);
            transform: rotateY(-180deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateY(-180deg) translateZ(75px);
            transform: rotateY(-180deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateY(-180deg) translateZ(150px);
            transform: rotateY(-180deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateY(-180deg) translateZ(150px);
            transform: rotateY(-180deg) translateZ(150px);
  }
}
@keyframes back-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateY(-180deg) translateZ(150px);
            transform: rotateY(-180deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateY(-180deg) translateZ(75px);
            transform: rotateY(-180deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateY(-180deg) translateZ(75px);
            transform: rotateY(-180deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateY(-180deg) translateZ(150px);
            transform: rotateY(-180deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateY(-180deg) translateZ(150px);
            transform: rotateY(-180deg) translateZ(150px);
  }
}
.cube .sides .left {
  -webkit-animation: left-animation 3s ease infinite;
          animation: left-animation 3s ease infinite;
  -webkit-animation-delay: 100ms;
          animation-delay: 100ms;
  -webkit-transform: rotateY(-90deg) translateZ(150px);
          transform: rotateY(-90deg) translateZ(150px);
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
}
@-webkit-keyframes left-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateY(-90deg) translateZ(150px);
            transform: rotateY(-90deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateY(-90deg) translateZ(75px);
            transform: rotateY(-90deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateY(-90deg) translateZ(75px);
            transform: rotateY(-90deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateY(-90deg) translateZ(150px);
            transform: rotateY(-90deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateY(-90deg) translateZ(150px);
            transform: rotateY(-90deg) translateZ(150px);
  }
}
@keyframes left-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateY(-90deg) translateZ(150px);
            transform: rotateY(-90deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateY(-90deg) translateZ(75px);
            transform: rotateY(-90deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateY(-90deg) translateZ(75px);
            transform: rotateY(-90deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateY(-90deg) translateZ(150px);
            transform: rotateY(-90deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateY(-90deg) translateZ(150px);
            transform: rotateY(-90deg) translateZ(150px);
  }
}
.cube .sides .right {
  -webkit-animation: right-animation 3s ease infinite;
          animation: right-animation 3s ease infinite;
  -webkit-animation-delay: 100ms;
          animation-delay: 100ms;
  -webkit-transform: rotateY(90deg) translateZ(150px);
          transform: rotateY(90deg) translateZ(150px);
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
}
@-webkit-keyframes right-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateY(90deg) translateZ(150px);
            transform: rotateY(90deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateY(90deg) translateZ(75px);
            transform: rotateY(90deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateY(90deg) translateZ(75px);
            transform: rotateY(90deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateY(90deg) translateZ(150px);
            transform: rotateY(90deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateY(90deg) translateZ(150px);
            transform: rotateY(90deg) translateZ(150px);
  }
}
@keyframes right-animation {
  0% {
    opacity: 1;
    -webkit-transform: rotateY(90deg) translateZ(150px);
            transform: rotateY(90deg) translateZ(150px);
  }
  20% {
    opacity: 1;
    -webkit-transform: rotateY(90deg) translateZ(75px);
            transform: rotateY(90deg) translateZ(75px);
  }
  70% {
    opacity: 1;
    -webkit-transform: rotateY(90deg) translateZ(75px);
            transform: rotateY(90deg) translateZ(75px);
  }
  90% {
    opacity: 1;
    -webkit-transform: rotateY(90deg) translateZ(150px);
            transform: rotateY(90deg) translateZ(150px);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateY(90deg) translateZ(150px);
            transform: rotateY(90deg) translateZ(150px);
  }
}
.text {
  margin-top: 450px;
  color: #f27777;
  font-size: 3rem;
  width: 100%;
  font-weight: 600;
  text-align: center;
}
.gm-style .gm-style-iw {
   font-size: 15px;
   font-style: italic;
   font-weight: bold;

    font-family: 'Cinzel', serif;


   text-transform: uppercase;
}   
     table {
    

    font-family: 'Cinzel', serif;
    border-collapse: collapse;
    width: 25%;
    font-size: 20px;
    font-weight: bolder;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;

}
     tr:hover {background-color:  #C67347;}    /*style the p tag*/
         
     
        /*style the arrow*/
        
  </style>
<script type="text/javascript">
  (function() {

  var tsp; // singleton
  var gebMap;           // The map DOM object
  var directionsPanel;  // The driving directions DOM object
  var gebDirectionsResult;    // The driving directions returned from GMAP API
  var gebDirectionsService;
  var gebGeocoder;      // The geocoder for addresses
  var maxTspSize = 100;  // A limit on the size of the problem, mostly to save Google servers from undue load.
  var maxTspBF = 0;     // Max size for brute force, may seem conservative, but ma
  var maxTspDynamic = 15;     // Max size for brute force, may seem conservative, but many browsers have limitations on run-time.
  var maxSize = 10;     // Max number of waypoints in one Google driving directions request.
  var maxTripSentry = 2000000000; // Approx. 63 years., this long a route should not be reached...
  var avoidHighways = false; // Whether to avoid highways. False by default.
  var avoidTolls = false; // Whether to avoid toll roads. False by default.
  var travelMode;
  var distIndex;
  var waypoints = new Array();
  var addresses = new Array();
  var GEO_STATUS_MSG = new Array();
  var DIR_STATUS_MSG = new Array();
  var labels = new Array();
  var addr = new Array();
  var wpActive = new Array();
  var addressRequests = 0;
  var addressProcessing = false;
  var requestNum = 0;
  var currQueueNum = 0;
  var wayArr;
  var legsTmp;
  var distances;
  var durations;
  var legs;
  var dist;
  var dur;
  var visited;
  var currPath;
  var bestPath;
  var bestTrip;
  var nextSet;
  var numActive;
  var costForward;
  var costBackward;
  var improved = false;
  var chunkNode;
  var okChunkNode;
  var numDirectionsComputed = 0;
  var numDirectionsNeeded = 0;
  var cachedDirections = false;
  var requestLimitWait = 1000;
  var fakeDirResult; // Object used to store travel info like travel mode etc. Needed for route renderer.

  var onSolveCallback = function(){};
  var onProgressCallback = null;
  var originalOnFatalErrorCallback = function(tsp, errMsg) { alert("Request failed: " + errMsg); }
  var onFatalErrorCallback = originalOnFatalErrorCallback;
  var doNotContinue = false;
  var onLoadListener = null;
  var onFatalErrorListener = null;

  var directionunits;

  /** Computes greedy (nearest-neighbor solution to the TSP)
   */
  function tspGreedy(mode) {
    var curr = 0;
    var currDist = 0;
    var numSteps = numActive - 1;
    var lastNode = 0;
    var numToVisit = numActive;
    if (mode == 1) {
      numSteps = numActive - 2;
      lastNode = numActive - 1;
      numToVisit = numActive - 1;
    }
    for (var step = 0; step < numSteps; ++step) {
      visited[curr] = true;
      bestPath[step] = curr;
      var nearest = maxTripSentry;
      var nearI = -1;
      for (var next = 1; next < numToVisit; ++next) {
  if (!visited[next] && dur[curr][next] < nearest) {
    nearest = dur[curr][next];
    nearI = next;
  }
      }
      currDist += dur[curr][nearI];
      curr = nearI;
    }
    if (mode == 1) bestPath[numSteps] = lastNode;
    else bestPath[numSteps] = curr;
    currDist += dur[curr][lastNode];
    bestTrip = currDist;
  }

  /** Returns the cost of moving along the current solution path offset
   *  given by a to b. Handles moving both forward and backward.
   */
  function cost(a, b) {
    if (a <= b) {
      return costForward[b] - costForward[a];
    } else {
      return costBackward[b] - costBackward[a];
    }
  }

  /** Returns the cost of the given 3-opt variation of the current solution.
   */
  function costPerm(a, b, c, d, e, f) {
    var A = currPath[a];
    var B = currPath[b];
    var C = currPath[c];
    var D = currPath[d];
    var E = currPath[e];
    var F = currPath[f];
    var g = currPath.length - 1;

    var ret = cost(0, a) + dur[A][B] + cost(b, c) + dur[C][D] + cost(d, e) + dur[E][F] + cost(f, g);
    return ret;
  }

  /** Update the datastructures necessary for cost(a,b) and costPerm to work
   *  efficiently.
   */
  function updateCosts() {
    costForward = new Array(currPath.length);
    costBackward = new Array(currPath.length);

    costForward[0] = 0.0;
    for (var i = 1; i < currPath.length; ++i) {
      costForward[i] = costForward[i-1] + dur[currPath[i-1]][currPath[i]];
    }
    bestTrip = costForward[currPath.length-1];

    costBackward[currPath.length-1] = 0.0;
    for (var i = currPath.length - 2; i >= 0; --i) {
      costBackward[i] = costBackward[i+1] + dur[currPath[i+1]][currPath[i]];
    }
  }

  /** Update the current solution with the given 3-opt move.
   */
  function updatePerm(a, b, c, d, e, f) {
    improved = true;
    var nextPath = new Array(currPath.length);
    for (var i = 0; i < currPath.length; ++i) nextPath[i] = currPath[i];
    var offset = a + 1;
    nextPath[offset++] = currPath[b];
    if (b < c) {
      for (var i = b + 1; i <= c; ++i) {
  nextPath[offset++] = currPath[i];
      }
    } else {
      for (var i = b - 1; i >= c; --i) {
  nextPath[offset++] = currPath[i];
      }
    }
    nextPath[offset++] = currPath[d];
    if (d < e) {
      for (var i = d + 1; i <= e; ++i) {
  nextPath[offset++] = currPath[i];
      }
    } else {
      for (var i = d - 1; i >= e; --i) {
  nextPath[offset++] = currPath[i];
      }
    }
    nextPath[offset++] = currPath[f];
    currPath = nextPath;

    updateCosts();
  }

  /** Uses the 3-opt algorithm to find a good solution to the TSP.
   */
  function tspK3(mode) {
    // tspGreedy(mode);
    currPath = new Array(bestPath.length);
    for (var i = 0; i < bestPath.length; ++i) currPath[i] = bestPath[i];

    updateCosts();
    improved = true;
    while (improved) {
      improved = false;
      for (var i = 0; i < currPath.length - 3; ++i) {
  for (var j = i+1; j < currPath.length - 2; ++j) {
    for (var k = j+1; k < currPath.length - 1; ++k) {
      if (costPerm(i, i+1, j, k, j+1, k+1) < bestTrip)
        updatePerm(i, i+1, j, k, j+1, k+1);
      if (costPerm(i, j, i+1, j+1, k, k+1) < bestTrip)
        updatePerm(i, j, i+1, j+1, k, k+1);
      if (costPerm(i, j, i+1, k, j+1, k+1) < bestTrip)
        updatePerm(i, j, i+1, k, j+1, k+1);
      if (costPerm(i, j+1, k, i+1, j, k+1) < bestTrip)
        updatePerm(i, j+1, k, i+1, j, k+1);
      if (costPerm(i, j+1, k, j, i+1, k+1) < bestTrip)
        updatePerm(i, j+1, k, j, i+1, k+1);
      if (costPerm(i, k, j+1, i+1, j, k+1) < bestTrip)
        updatePerm(i, k, j+1, i+1, j, k+1);
      if (costPerm(i, k, j+1, j, i+1, k+1) < bestTrip)
        updatePerm(i, k, j+1, j, i+1, k+1);
    }
  }
      }
    }
    for (var i = 0; i < bestPath.length; ++i) bestPath[i] = currPath[i];
  }

  /* Computes a near-optimal solution to the TSP problem, 
   * using Ant Colony Optimization and local optimization
   * in the form of k2-opting each candidate route.
   * Run time is O(numWaves * numAnts * numActive ^ 2) for ACO
   * and O(numWaves * numAnts * numActive ^ 3) for rewiring?
   * 
   * if mode is 1, we start at node 0 and end at node numActive-1.
   */
  function tspAntColonyK2(mode) {
    var alfa = 0.1; // The importance of the previous trails
    var beta = 2.0; // The importance of the durations
    var rho = 0.1;  // The decay rate of the pheromone trails
    var asymptoteFactor = 0.9; // The sharpness of the reward as the solutions approach the best solution
    var pher = new Array();
    var nextPher = new Array();
    var prob = new Array();
    var numAnts = 20;
    var numWaves = 20;
    for (var i = 0; i < numActive; ++i) {
      pher[i] = new Array();
      nextPher[i] = new Array();
    }
    for (var i = 0; i < numActive; ++i) {
      for (var j = 0; j < numActive; ++j) {
  pher[i][j] = 1;
  nextPher[i][j] = 0.0;
      }
    }

    var lastNode = 0;
    var startNode = 0;
    var numSteps = numActive - 1;
    var numValidDests = numActive;
    if (mode == 1) {
      lastNode = numActive - 1;
      numSteps = numActive - 2;
      numValidDests = numActive - 1;
    }
    for (var wave = 0; wave < numWaves; ++wave) {
      for (var ant = 0; ant < numAnts; ++ant) {
  var curr = startNode;
  var currDist = 0;
  for (var i = 0; i < numActive; ++i) {
    visited[i] = false;
  }
  currPath[0] = curr;
  for (var step = 0; step < numSteps; ++step) {
    visited[curr] = true;
    var cumProb = 0.0;
    for (var next = 1; next < numValidDests; ++next) {
      if (!visited[next]) {
        prob[next] = Math.pow(pher[curr][next], alfa) * 
    Math.pow(dur[curr][next], 0.0 - beta);
        cumProb += prob[next];
      }
    }
    var guess = Math.random() * cumProb;
    var nextI = -1;
    for (var next = 1; next < numValidDests; ++next) {
      if (!visited[next]) {
        nextI = next;
        guess -= prob[next];
        if (guess < 0) {
    nextI = next;
    break;
        }
      }
    }
    currDist += dur[curr][nextI];
    currPath[step+1] = nextI;
    curr = nextI;
  }
  currPath[numSteps+1] = lastNode;
  currDist += dur[curr][lastNode];
    
  // k2-rewire:
  var lastStep = numActive;
  if (mode == 1) {
    lastStep = numActive - 1;
  }
  var changed = true;
  var i = 0;
  while (changed) {
    changed = false;
    for (; i < lastStep - 2 && !changed; ++i) {
      var cost = dur[currPath[i+1]][currPath[i+2]];
      var revCost = dur[currPath[i+2]][currPath[i+1]];
      var iCost = dur[currPath[i]][currPath[i+1]];
      var tmp, nowCost, newCost;
      for (var j = i+2; j < lastStep && !changed; ++j) {
        nowCost = cost + iCost + dur[currPath[j]][currPath[j+1]];
        newCost = revCost + dur[currPath[i]][currPath[j]]
    + dur[currPath[i+1]][currPath[j+1]];
        if (nowCost > newCost) {
    currDist += newCost - nowCost;
    // Reverse the detached road segment.
    for (var k = 0; k < Math.floor((j-i)/2); ++k) {
      tmp = currPath[i+1+k];
      currPath[i+1+k] = currPath[j-k];
      currPath[j-k] = tmp;
    }
    changed = true;
    --i;
        }
        cost += dur[currPath[j]][currPath[j+1]];
        revCost += dur[currPath[j+1]][currPath[j]];
      }
    }
  }

  if (currDist < bestTrip) {
    bestPath = currPath;
    bestTrip = currDist;
  }
  for (var i = 0; i <= numSteps; ++i) {
    nextPher[currPath[i]][currPath[i+1]] += (bestTrip - asymptoteFactor * bestTrip) / (numAnts * (currDist - asymptoteFactor * bestTrip));
  }
      }
      for (var i = 0; i < numActive; ++i) {
  for (var j = 0; j < numActive; ++j) {
    pher[i][j] = pher[i][j] * (1.0 - rho) + rho * nextPher[i][j];
    nextPher[i][j] = 0.0;
  }
      }
    }
  }

  /* Returns the optimal solution to the TSP problem.
   * Run-time is O((numActive-1)!).
   * Prerequisites: 
   * - numActive contains the number of locations
   * - dur[i][j] contains weight of edge from node i to node j
   * - visited[i] should be false for all nodes
   * - bestTrip is set to a very high number
   *
   * If mode is 1, it will return the optimal solution to the related
   * problem of finding a path from node 0 to node numActive - 1, visiting
   * the in-between nodes in the best order.
   */
  function tspBruteForce(mode, currNode, currLen, currStep) {
    // Set mode parameters:
    var numSteps = numActive;
    var lastNode = 0;
    var numToVisit = numActive;
    if (mode == 1) {
      numSteps = numActive - 1;
      lastNode = numActive - 1;
      numToVisit = numActive - 1;
    }

    // If this route is promising:
    if (currLen + dur[currNode][lastNode] < bestTrip) {

      // If this is the last node:
      if (currStep == numSteps) {
  currLen += dur[currNode][lastNode];
  currPath[currStep] = lastNode;
  bestTrip = currLen;
  for (var i = 0; i <= numSteps; ++i) {
    bestPath[i] = currPath[i];
  }
      } else {

  // Try all possible routes:
  for (var i = 1; i < numToVisit; ++i) {
    if (!visited[i]) {
      visited[i] = true;
      currPath[currStep] = i;
      tspBruteForce(mode, i, currLen+dur[currNode][i], currStep+1);
      visited[i] = false;
    }
  }
      }
    }
  }

  /* Finds the next integer that has num bits set to 1.
   */
  function nextSetOf(num) {
    var count = 0;
    var ret = 0;
    for (var i = 0; i < numActive; ++i) {
      count += nextSet[i];
    }
    if (count < num) {
      for (var i = 0; i < num; ++i) {
  nextSet[i] = 1;
      }
      for (var i = num; i < numActive; ++i) {
  nextSet[i] = 0;
      }
    } else {
      // Find first 1
      var firstOne = -1;
      for (var i = 0; i < numActive; ++i) {
  if (nextSet[i]) {
    firstOne = i;
    break;
  }
      }
      // Find first 0 greater than firstOne
      var firstZero = -1;
      for (var i = firstOne + 1; i < numActive; ++i) {
  if (!nextSet[i]) {
    firstZero = i;
    break;
  }
      }
      if (firstZero < 0) {
  return -1;
      }
      // Increment the first zero with ones behind it
      nextSet[firstZero] = 1;
      // Set the part behind that one to its lowest possible value
      for (var i = 0; i < firstZero - firstOne - 1; ++i) {
  nextSet[i] = 1;
      }
      for (var i = firstZero - firstOne - 1; i < firstZero; ++i) {
  nextSet[i] = 0;
      }
    }
    // Return the index for this set
    for (var i = 0; i < numActive; ++i) {
      ret += (nextSet[i]<<i);
    }
    return ret;
  }

  /* Solves the TSP problem to optimality. Memory requirement is
   * O(numActive * 2^numActive)
   */
  function tspDynamic(mode) {
    var numCombos = 1<<numActive;
    var C = new Array();
    var parent = new Array();
    for (var i = 0; i < numCombos; ++i) {
      C[i] = new Array();
      parent[i] = new Array();
      for (var j = 0; j < numActive; ++j) {
  C[i][j] = 0.0;
  parent[i][j] = 0;
      }
    }
    for (var k = 1; k < numActive; ++k) {
      var index = 1 + (1<<k);
      C[index][k] = dur[0][k];
    }
    for (var s = 3; s <= numActive; ++s) {
      for (var i = 0; i < numActive; ++i) {
  nextSet[i] = 0;
      }
      var index = nextSetOf(s);
      while (index >= 0) {
  for (var k = 1; k < numActive; ++k) {
    if (nextSet[k]) {
      var prevIndex = index - (1<<k);
      C[index][k] = maxTripSentry;
      for (var m = 1; m < numActive; ++m) {
        if (nextSet[m] && m != k) {
    if (C[prevIndex][m] + dur[m][k] < C[index][k]) {
      C[index][k] = C[prevIndex][m] + dur[m][k];
      parent[index][k] = m;
    }
        }
      }
    }
  }
  index = nextSetOf(s);
      }
    }
    for (var i = 0; i < numActive; ++i) {
      bestPath[i] = 0;
    }
    var index = (1<<numActive)-1;
    if (mode == 0) {
      var currNode = -1;
      bestPath[numActive] = 0;
      for (var i = 1; i < numActive; ++i) {
  if (C[index][i] + dur[i][0] < bestTrip) {
    bestTrip = C[index][i] + dur[i][0];
    currNode = i;
  }
      }
      bestPath[numActive-1] = currNode;
    } else {
      var currNode = numActive - 1;
      bestPath[numActive-1] = numActive - 1;
      bestTrip = C[index][numActive-1];
    }
    for (var i = numActive - 1; i > 0; --i) {
      currNode = parent[index][currNode];
      index -= (1<<bestPath[i]);
      bestPath[i-1] = currNode;
    }
  }  

  function makeLatLng(latLng) {
    return(latLng.toString().substr(1,latLng.toString().length-2));
  }

  function makeDirWp(latLng, address) {
    if (address != null && address != "")
      return ({ location: address, stopover: true });
    return ({ location: latLng,
    stopover: true });
  }

  function getWayArr(curr) {
    var nextAbove = -1;
    for (var i = curr + 1; i < waypoints.length; ++i) {
      if (wpActive[i]) {
  if (nextAbove == -1) {
    nextAbove = i;
  } else {
    wayArr.push(makeDirWp(waypoints[i], addresses[i]));
    wayArr.push(makeDirWp(waypoints[curr], addresses[curr]));
  }
      }
    }
    if (nextAbove != -1) {
      wayArr.push(makeDirWp(waypoints[nextAbove], addresses[nextAbove]));
      getWayArr(nextAbove);
      wayArr.push(makeDirWp(waypoints[curr], addresses[curr]));
    }
  }

  function getDistTable(curr, currInd) {
    var nextAbove = -1;
    var index = currInd;
    for (var i = curr + 1; i < waypoints.length; ++i) {
      if (wpActive[i]) {
  index++;
  if (nextAbove == -1) {
    nextAbove = i;
  } else {
    legs[currInd][index] = legsTmp[distIndex];
    dist[currInd][index] = distances[distIndex];
    dur[currInd][index] = durations[distIndex++];
    legs[index][currInd] = legsTmp[distIndex];
    dist[index][currInd] = distances[distIndex];
    dur[index][currInd] = durations[distIndex++];
  }
      }
    }
    if (nextAbove != -1) {
      legs[currInd][currInd+1] = legsTmp[distIndex];
      dist[currInd][currInd+1] = distances[distIndex];
      dur[currInd][currInd+1] = durations[distIndex++];
      getDistTable(nextAbove, currInd+1);
      legs[currInd+1][currInd] = legsTmp[distIndex];
      dist[currInd+1][currInd] = distances[distIndex];
      dur[currInd+1][currInd] = durations[distIndex++];
    }
  }

  function directions(mode) {
    if (cachedDirections) {
      // Bypass Google directions lookup if we already have the distance
      // and duration matrices.
      doTsp(mode);
    }
    wayArr = new Array();
    numActive = 0;
    numDirectionsComputed = 0;
    for (var i = 0; i < waypoints.length; ++i) {
      if (wpActive[i]) ++numActive;
    }
    numDirectionsNeeded = numActive * (numActive - 1);

    for (var i = 0; i < waypoints.length; ++i) {
      if (wpActive[i]) {
  wayArr.push(makeDirWp(waypoints[i], addresses[i]));
  getWayArr(i);
  break;
      }
    }

    // Roundtrip
    if (numActive > maxTspSize) {
      alert("Too many locations! You have " + numActive + ", but max limit is " + maxTspSize);
    } else {
      legsTmp = new Array();
      distances = new Array();
      durations = new Array();
      chunkNode = 0;
      okChunkNode = 0;
      if (typeof onProgressCallback == 'function') {
  onProgressCallback(tsp);
      }
      nextChunk(mode);
    }
  }

  function nextChunk(mode) {
    //  alert("nextChunk");
    chunkNode = okChunkNode;
    if (chunkNode < wayArr.length) {
      var wayArrChunk = new Array();
      for (var i = 0; i < maxSize && i + chunkNode < wayArr.length; ++i) {
  wayArrChunk.push(wayArr[chunkNode+i]);
      }
      var origin;
      var destination;
      origin = wayArrChunk[0].location;
      destination = wayArrChunk[wayArrChunk.length-1].location;
      var wayArrChunk2 = new Array();
      for (var i = 1; i < wayArrChunk.length - 1; i++) {
  wayArrChunk2[i-1] = wayArrChunk[i];
      }
      chunkNode += maxSize;
      if (chunkNode < wayArr.length-1) {
  chunkNode--;
      }
      
      var myGebDirections = new google.maps.DirectionsService();
      
      myGebDirections.route({
  origin: origin,
      destination: destination,
      waypoints: wayArrChunk2,
      avoidHighways: avoidHighways,
      avoidTolls: avoidTolls,
      unitSystem: directionunits,
      travelMode: travelMode }, 
  function(directionsResult, directionsStatus) {
    if (directionsStatus == google.maps.DirectionsStatus.OK) {
      requestLimitWait = 1000;
      //alert("Request completed!");
      // Save legs, distances and durations
      fakeDirResult = directionsResult;
      for (var i = 0; i < directionsResult.routes[0].legs.length; ++i) {
        ++numDirectionsComputed;
        legsTmp.push(directionsResult.routes[0].legs[i]);
        durations.push(directionsResult.routes[0].legs[i].duration.value);
        distances.push(directionsResult.routes[0].legs[i].distance.value);
      }
      if (typeof onProgressCallback == 'function') {
        onProgressCallback(tsp);
      }
      okChunkNode = chunkNode;
      nextChunk(mode);
    } else if (directionsStatus == google.maps.DirectionsStatus.OVER_QUERY_LIMIT) {
      requestLimitWait *= 2;
      setTimeout(function(){ nextChunk(mode) }, requestLimitWait);
    } else {
      var errorMsg = DIR_STATUS_MSG[directionsStatus];
      var doNotContinue = true;
      alert("Request failed: " + errorMsg);
    }
  });
    } else {
      readyTsp(mode);
    }
  }

  function readyTsp(mode) {
    //alert("readyTsp");
    // Get distances and durations into 2-d arrays:
    distIndex = 0;
    legs = new Array();
    dist = new Array();
    dur = new Array();
    numActive = 0;
    for (var i = 0; i < waypoints.length; ++i) {
      if (wpActive[i]) {
  legs.push(new Array());
  dist.push(new Array());
  dur.push(new Array());
  addr[numActive] = addresses[i];
  numActive++;
      }
    }
    for (var i = 0; i < numActive; ++i) {
      legs[i][i] = null;
      dist[i][i] = 0;
      dur[i][i] = 0;
    }
    for (var i = 0; i < waypoints.length; ++i) {
      if (wpActive[i]) {
  getDistTable(i, 0);
  break;
      }
    }

    doTsp(mode);
  }

  function doTsp(mode) {
    //alert("doTsp");
    // Calculate shortest roundtrip:
    visited = new Array();
    for (var i = 0; i < numActive; ++i) {
      visited[i] = false;
    }
    currPath = new Array();
    bestPath = new Array();
    nextSet = new Array();
    bestTrip = maxTripSentry;
    visited[0] = true;
    currPath[0] = 0;
    cachedDirections = true;
    if (numActive <= maxTspBF + mode) {
      tspBruteForce(mode, 0, 0, 1);
    } else if (numActive <= maxTspDynamic + mode) {
      tspDynamic(mode);
    } else {
      tspAntColonyK2(mode);
      tspK3(mode);
    }

    prepareSolution();
  }

  function prepareSolution() {
    var wpIndices = new Array();
    for (var i = 0; i < waypoints.length; ++i) {
      if (wpActive[i]) {
  wpIndices.push(i);
      }
    }
    var bestPathLatLngStr = "";
    var directionsResultLegs = new Array();
    var directionsResultRoutes = new Array();
    var directionsResultOverview = new Array();
    var directionsResultBounds = new google.maps.LatLngBounds();
    for (var i = 1; i < bestPath.length; ++i) {
      directionsResultLegs.push(legs[bestPath[i-1]][bestPath[i]]);
    }
    for (var i = 0; i < bestPath.length; ++i) {
      bestPathLatLngStr += makeLatLng(waypoints[wpIndices[bestPath[i]]]) + "\n";
      directionsResultBounds.extend(waypoints[wpIndices[bestPath[i]]]);
      directionsResultOverview.push(waypoints[wpIndices[bestPath[i]]]);
    }
    directionsResultRoutes.push({ 
      legs: directionsResultLegs,
    bounds: directionsResultBounds,
    copyrights: "Map data ©2012 Google",
    overview_path: directionsResultOverview,
    warnings: new Array(),
    });
    gebDirectionsResult = fakeDirResult;
    gebDirectionsResult.routes = directionsResultRoutes;

    if (onFatalErrorListener)
      google.maps.event.removeListener(onFatalErrorListener);
    onFatalErrorListener = google.maps.event.addListener(gebDirectionsService, 'error', onFatalErrorCallback);

    if (typeof onSolveCallback == 'function') {
      onSolveCallback(tsp);
    }
  }

  function reverseSolution() {
    for (var i = 0; i < bestPath.length / 2; ++i) {
      var tmp = bestPath[bestPath.length-1-i];
      bestPath[bestPath.length-1-i] = bestPath[i];
      bestPath[i] = tmp;
    }
    prepareSolution();
  }

  function reorderSolution(newOrder) {
    var newBestPath = new Array(bestPath.length);
    for (var i = 0; i < bestPath.length; ++i) {
      newBestPath[i] = bestPath[newOrder[i]];
    }
    bestPath = newBestPath;
    prepareSolution();
  }

  function removeStop(number) {
    var newBestPath = new Array(bestPath.length - 1);
    for (var i = 0; i < bestPath.length; ++i) {
      if (i != number) {
  newBestPath[i - (i > number ? 1 : 0)] = bestPath[i];
      }
    }
    bestPath = newBestPath;
    prepareSolution();
  }

  function addWaypoint(latLng, label) {
    var freeInd = -1;
    for (var i = 0; i < waypoints.length; ++i) {
      if (!wpActive[i]) {
  freeInd = i;
  break;
      }
    }
    if (freeInd == -1) {
      if (waypoints.length < maxTspSize) {
  waypoints.push(latLng);
  labels.push(label);
  wpActive.push(true);
  freeInd = waypoints.length-1;
      } else {
  return(-1);
      }
    } else {
      waypoints[freeInd] = latLng;
      labels[freeInd] = label;
      wpActive[freeInd] = true;
    }
    return(freeInd);
  }

  function addAddress(address, label, callback) {
    addressProcessing = true;
    gebGeocoder.geocode({ address: address }, function(results, status) {
  if (status == google.maps.GeocoderStatus.OK) {
    addressProcessing = false;
    --addressRequests;
    ++currQueueNum;
    if (results.length >= 1) {
      var latLng = results[0].geometry.location;
      var freeInd = addWaypoint(latLng, label);
      address = address.replace("'", "");
      address = address.replace("\"", "");
      addresses[freeInd] = address;
      if (typeof callback == 'function')
        callback(address, latLng);
    }
  } else if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
    setTimeout(function(){ addAddress(address, label, callback) }, 100); 
  } else {
    --addressRequests;
    alert("Failed to geocode address: " + address + ". Reason: " + GEO_STATUS_MSG[status]);
    ++currQueueNum;
    addressProcessing = false;
    if (typeof(callback) == 'function')
      callback(address);
  }
      });
  }

  function swapWaypoints(i, j) {
    var tmpAddr = addresses[j];
    var tmpWaypoint = waypoints[j];
    var tmpActive = wpActive[j];
    var tmpLabel = labels[j];
    addresses[j] = addresses[i];
    addresses[i] = tmpAddr;
    waypoints[j] = waypoints[i];
    waypoints[i] = tmpWaypoint;
    wpActive[j] = wpActive[i];
    wpActive[i] = tmpActive;
    labels[j] = labels[i];
    labels[i] = tmpLabel;
  }

  BpTspSolver.prototype.startOver = function() {
    waypoints = new Array();
    addresses = new Array();
    labels = new Array();
    addr = new Array();
    wpActive = new Array();
    wayArr = new Array();
    legsTmp = new Array();
    distances = new Array();
    durations = new Array();
    legs = new Array();
    dist = new Array();
    dur = new Array();
    visited = new Array();
    currPath = new Array();
    bestPath = new Array();
    bestTrip = new Array();
    nextSet = new Array();
    travelMode = google.maps.DirectionsTravelMode.DRIVING;
    numActive = 0;
    chunkNode = 0;
    okChunkNode = 0;
    addressRequests = 0;
    addressProcessing = false;
    requestNum = 0;
    currQueueNum = 0;
    cachedDirections = false;
    onSolveCallback = function(){};
    onProgressCallback = null;
    doNotContinue = false;
    directionunits = google.maps.UnitSystem.METRIC;
    GEO_STATUS_MSG[google.maps.GeocoderStatus.OK] = "Success.";
    GEO_STATUS_MSG[google.maps.GeocoderStatus.INVALID_REQUEST] = "Request was invalid.";
    GEO_STATUS_MSG[google.maps.GeocoderStatus.ERROR] = "There was a problem contacting the Google servers.";
    GEO_STATUS_MSG[google.maps.GeocoderStatus.OVER_QUERY_LIMIT] = "The webpage has gone over the requests limit in too short a period of time.";
    GEO_STATUS_MSG[google.maps.GeocoderStatus.REQUEST_DENIED] = "The webpage is not allowed to use the geocoder.";
    GEO_STATUS_MSG[google.maps.GeocoderStatus.UNKNOWN_ERROR] = "A geocoding request could not be processed due to a server error. The request may succeed if you try again.";
    GEO_STATUS_MSG[google.maps.GeocoderStatus.ZERO_RESULTS] = "No result was found for this GeocoderRequest.";
    DIR_STATUS_MSG[google.maps.DirectionsStatus.INVALID_REQUEST] = "The DirectionsRequest provided was invalid.";
    DIR_STATUS_MSG[google.maps.DirectionsStatus.MAX_WAYPOINTS_EXCEEDED] = "Too many DirectionsWaypoints were provided in the DirectionsRequest. The total allowed waypoints is 8, plus the origin and destination.";
    DIR_STATUS_MSG[google.maps.DirectionsStatus.NOT_FOUND] = "At least one of the origin, destination, or waypoints could not be geocoded.";
    DIR_STATUS_MSG[google.maps.DirectionsStatus.OK] = "The response contains a valid DirectionsResult.";
    DIR_STATUS_MSG[google.maps.DirectionsStatus.OVER_QUERY_LIMIT] = "The webpage has gone over the requests limit in too short a period of time.";
    DIR_STATUS_MSG[google.maps.DirectionsStatus.REQUEST_DENIED] = "The webpage is not allowed to use the directions service.";
    DIR_STATUS_MSG[google.maps.DirectionsStatus.UNKNOWN_ERROR] = "A directions request could not be processed due to a server error. The request may succeed if you try again.";
    DIR_STATUS_MSG[google.maps.DirectionsStatus.ZERO_RESULTS] = "No route could be found between the origin and destination.";
  }
    
  /* end (edited) OptiMap code */
  /* start public interface */

  function BpTspSolver(map, panel, onFatalError) {
    if (tsp) {
      alert('You can only create one BpTspSolver at a time.');
      return;
    }

    gebMap               = map;
    directionsPanel      = panel;
    gebGeocoder          = new google.maps.Geocoder();
    gebDirectionsService = new google.maps.DirectionsService();
    onFatalErrorCallback = onFatalError; // only for fatal errors, not geocoding errors
    tsp                  = this;
  }

  BpTspSolver.prototype.addAddressWithLabel = function(address, label, callback) {
    ++addressRequests;
    ++requestNum;
    tsp.addAddressAgain(address, label, callback, requestNum - 1);  
  }

  BpTspSolver.prototype.addAddress = function(address, callback) {
    tsp.addAddressWithLabel(address, null, callback);
  };

  BpTspSolver.prototype.addAddressAgain = function(address, label, callback, queueNum) {
    if (addressProcessing || queueNum > currQueueNum) {
      setTimeout(function(){ tsp.addAddressAgain(address, label, callback, queueNum) }, 100);
      return;
    }
    addAddress(address, label, callback);
  };

  BpTspSolver.prototype.addWaypointWithLabel = function(latLng, label, callback) {
    ++requestNum;
    tsp.addWaypointAgain(latLng, label, callback, requestNum - 1);
  };

  BpTspSolver.prototype.addWaypoint = function(latLng, callback) {
    tsp.addWaypointWithLabel(latLng, null, callback);
  };

  BpTspSolver.prototype.addWaypointAgain = function(latLng, label, callback, queueNum) {
    if (addressProcessing || queueNum > currQueueNum) {
      setTimeout(function(){ tsp.addWaypointAgain(latLng, label, callback, queueNum) }, 100);
      return;
    }
    addWaypoint(latLng, label);
    ++currQueueNum;
    if (typeof(callback) == 'function') {
      callback(latLng);
    }
  }

  BpTspSolver.prototype.getWaypoints = function() {
    var wp = [];
    for (var i = 0; i < waypoints.length; i++) {
      if (wpActive[i]) {
  wp.push(waypoints[i]);
      }
    }
    return wp;
  };

  BpTspSolver.prototype.getAddresses = function() {
    var addrs = [];
    for (var i = 0; i < addresses.length; i++) {
      if (wpActive[i])
  addrs.push(addresses[i]);
    }
    return addrs;
  };

  BpTspSolver.prototype.getLabels = function() {
    var labs = [];
    for (var i = 0; i < labels.length; i++) {
      if (wpActive[i])
  labs.push(labels[i]);
    }
    return labs;
  };

  BpTspSolver.prototype.removeWaypoint = function(latLng) {
    for (var i = 0; i < waypoints.length; ++i) {
      if (wpActive[i] && waypoints[i].equals(latLng)) {
  wpActive[i] = false;
  return true;
      }
    }
    return false;
  };

  BpTspSolver.prototype.removeAddress = function(addr) {
    for (var i = 0; i < addresses.length; ++i) {
      if (wpActive[i] && addresses[i] == addr) {
  wpActive[i] = false;
  return true;
      }
    }
    return false;
  };

  BpTspSolver.prototype.setAsStop = function(latLng) {
    var j = -1;
    for (var i = waypoints.length - 1; i >= 0; --i) {
      if (j == -1 && wpActive[i]) {
  j = i;
      }
      if (wpActive[i] && waypoints[i].equals(latLng)) {
  for (var k = i; k < j; ++k) {
    swapWaypoints(k, k + 1);
  }
  break;
      }
    }
  }

  BpTspSolver.prototype.setAsStart = function(latLng) {
    var j = -1;
    for (var i = 0; i < waypoints.length; ++i) {
      if (j == -1 && wpActive[i]) {
  j = i;
      }
      if (wpActive[i] && waypoints[i].equals(latLng)) {
  for (var k = i; k > j; --k) {
    swapWaypoints(k, k - 1);
  }
  break;
      }
    }
  }

  BpTspSolver.prototype.getGDirections = function() {
    return gebDirectionsResult;
  };

  BpTspSolver.prototype.getGDirectionsService = function() {
    return gebDirectionsService;
  };

  // Returns the order that the input locations was visited in.
  //   getOrder()[0] is always the starting location.
  //   getOrder()[1] gives the first location visited, getOrder()[2]
  //   gives the second location visited and so on.
  BpTspSolver.prototype.getOrder = function() {
    return bestPath;
  }

  // Methods affecting the way driving directions are computed
  BpTspSolver.prototype.getAvoidHighways = function() {
    return avoidHighways;
  }

  BpTspSolver.prototype.setAvoidHighways = function(avoid) {
    avoidHighways = avoid;
  }

  BpTspSolver.prototype.getAvoidTolls = function() {
    return avoidTolls;
  }

  BpTspSolver.prototype.setAvoidTolls = function(avoid) {
    avoidTolls = avoid;
  }

  BpTspSolver.prototype.getTravelMode = function() {
    return travelMode;
  }

  BpTspSolver.prototype.setTravelMode = function(travelM) {
    travelMode = travelM;
  }

  BpTspSolver.prototype.getDurations = function() {
    return dur;
  }

  // Helper functions
  BpTspSolver.prototype.getTotalDuration = function() {
    return gebDirections.getDuration().seconds;
  }

  // we assume that we have enough waypoints
  BpTspSolver.prototype.isReady = function() {
    return addressRequests == 0;
  };

  BpTspSolver.prototype.solveRoundTrip = function(callback) {
    if (doNotContinue) {
      alert('Cannot continue after fatal errors.');
      return;
    }

    if (!this.isReady()) {
      setTimeout(function(){ tsp.solveRoundTrip(callback) }, 20);
      return;
    }
    if (typeof callback == 'function')
      onSolveCallback = callback;

    directions(0);
  };

  BpTspSolver.prototype.solveAtoZ = function(callback) {
    if (doNotContinue) {
      alert('Cannot continue after fatal errors.');
      return;
    }

    if (!this.isReady()) {
      setTimeout(function(){ tsp.solveAtoZ(callback) }, 20);
      return;
    }

    if (typeof callback == 'function')
      onSolveCallback = callback;

    directions(1);
  };

  BpTspSolver.prototype.setDirectionUnits = function(mOrKm) {
    if (mOrKm == "m") {
      directionunits = google.maps.UnitSystem.IMPERIAL;
    }
    else {
      directionunits = google.maps.UnitSystem.METRIC;
    }
  }

  BpTspSolver.prototype.setOnProgressCallback = function(callback) {
    onProgressCallback = callback;
  }

  BpTspSolver.prototype.getNumDirectionsComputed = function () {
    return numDirectionsComputed;
  }

  BpTspSolver.prototype.getNumDirectionsNeeded = function () {
    return numDirectionsNeeded;
  }

  BpTspSolver.prototype.reverseSolution = function () {
    reverseSolution();
  }

  BpTspSolver.prototype.reorderSolution = function(newOrder, callback) {
    if (typeof callback == 'function')
      onSolveCallback = callback;

    reorderSolution(newOrder);
  }

  BpTspSolver.prototype.removeStop = function(number, callback) {
    if (typeof callback == 'function')
      onSolveCallback = callback;

    removeStop(number);
  }

  window.BpTspSolver = BpTspSolver;
    
 })();
</script>
<title></title>
</head>
<body>


  <header style="font-size: 80px;">
                <!-- header-top-area-start -->
                <div class="header-top-area" id="sticky-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <!-- logo-area-start -->
                                <div class="logo-area">
                                    <a href="index.php"><img src="logo7.png" alt="logo" /></a>
                                </div>
                                <!-- logo-area-end -->
                            </div>
                            <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
                                <!-- menu-area-start -->
                                <div class="menu-area">
                                    <nav>
                                        <ul>
                                            <li style="font-size: 40px"><a style="font-size: 20px;" href="index.php">Home</a>
                                                
                                            </li>
                                            <li style="font-size: 40px"><a style="font-size: 20px;" href="bakeries1.php">Shop</a>
                                                <ul class="mega-menu">
                                                    <li><a style="font-size: 20px;"href="#">Categories</a>
                                                     <ul class="mega-menu mega-menu-2">
                                                    <li>
                                                        <ul class="sub-menu-2">
                                                            <li><a style="font-size: 25px;"href="bakeries1.php">Bakeries</a></li>
                                                            <li><a style="font-size: 25px;"href="groceries1.php">Groceries</a></li>
                                                            <li><a href="stationeries1.php" style="font-size: 25px;">Stationaries</a></li>
                                                           
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="homecare1.php" style="font-size: 25px;">Home care</a></li>
                                                            <li><a style="font-size: 25px;"href="personalcare1.php">Personal Care</a></li>
                                                            <li><a href="fruits1.php" style="font-size: 25px;">Fruits & Veggies</a></li>
                                                           
                                                        </ul>
                                                    </li>
                                                </ul>
                                                    </li>
                                                    
                                        </ul>
                                    </nav>
                                </div>
                                <!-- menu-area-end -->
                            </div>
                            <div class="mobile-menu-area hidden-md hidden-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul id="nav">
                                            <li><a style="font-size: 30px;" href="index.php">Home</a>
                                                
                                            </li>
                                            <li><a href="bakeries1.php" style="font-size: 30px;">Shop</a>
                                                <ul>
                                                    <li><a style="font-size: 25px;" href="bakeries1.php">Bakeries</a></li>
                                                    <li><a href="groceries1.php" style="font-size: 25px;" >Groceries</a></li>
                                                    <li><a href="stationeries1.php"style="font-size: 25px;" >Stationeries</a></li>
                                                    <li><a style="font-size: 25px;" href="homecare1.php">Homecare</a></li>
                                                    <li><a href="personalcare1.php" style="font-size: 25px;" >Personal Care</a></li>
                                                    <li><a href="fruits1.php" style="font-size: 25px;" >Fruits and Veggies </a></li>
                                                    
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-3 com-sm-6 col-xs-6">
                                <!-- header-right-area-start -->
                                <div class="header-right-area">
                                    <ul>
                                        <li><a href="near.php" title="Shops Nearby"><i class="fa fa-map-marker"></i></a>
                                            
                                        </li>
                                    <!--     <li><a href="#" id="show-search"><i class="fa fa-search"></i></a>
                                            <div class="search-content" id="hide-search">
                                                <span class="close" id="close-search">
                                                    <i class="fa fa-window-close"></i>
                                                </span>
                                                <div class="search-text">
                                                    <h1>Search</h1>
                                                    <form autocomplete="off" action="search.php" method="get" id="search">
                            <div class="autocomplete">    
                            <input type="text" name="Items" id="myInput" placeholder="Type your keyword...">

                            <button type="submit" class="btn"><img src="img/core-img/search.png" alt="Submit"></button>
                        </div>
                     
                    </form>
                                                </div>
                                            </div>
                                        </li> -->
                                        <li><a href="cart.php"><i class="fa fa-shopping-basket"></i></a>
                                            <span style="font-size: 25px;" ><?php if(isset($_SESSION["shopping_cart"])){echo count($_SESSION["shopping_cart"]);}else{echo "0";};?></span>
                                            <div class="mini-cart-sub">
                                                <div class="cart-product">
                                                    <div class="single-cart">
                                                        <?php   

                          if(isset($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?> 
                                                        <div class="cart-img">
                                                            <a href="#"><img src="<?php echo $values["image_source"];?>" alt="book" /></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a style="font-size: 25px;" href="#" data-toggle="modal" data-target="#mymodal<?php echo $values["item_id"]; ?>" ><?php echo $values["item_name"] ?></a></h5>
                                                            <p style="font-size: 25px;" >Quantity : <?php echo $values["quantity"]?> </p>
                                                        </div>
                                                    <?php }} ?>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="cart-bottom">
                                                    <a href="<?php if(isset($_SESSION["user"])){?>cart.php<?php } else{ ?>account/login.php<?php } ?> ">Edit Cart</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#" id="show-cart" title="Account"><i class="fa fa-reorder"></i></a>
                                            <div class="shapping-area" id="hide-cart">
                                                
                                                <div class="single-shapping">
                                                    <span style="font-size: 30px;" >My Account</span>
                                                    <?php if(isset($_SESSION["user"])){ ?>
                                                    <ul>
                                                        <li style="font-size: 25px;" >Hello <?php echo $_SESSION["user"]; ?></li>
                                                        <li><a style="font-size: 25px;" href="logout.php">Log Out</a>                
</li>
                                                    </ul>    
                                                    <?php } 
                                                    else{
                                                    ?>
                                                    
                                                <?php } ?>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- header-right-area-end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-top-area-end -->
                <!-- mobile-menu-area-start -->
                <div class="mobile-menu-area hidden-md hidden-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul id="nav">
                                            <li><a href="index.php">Home</a>
                                                
                                            </li>
                                            <li><a href="groceries1.php">Shop</a>
                                                <ul>
                                                    <li class="active"><a href="#">Bakeries</a></li>
                                                    <li><a href="groceries1.php">Groceries</a></li>
                                                    <li><a href="stationeries1.php">Stationeries</a></li>
                                                    <li><a href="homecare1.php">Homecare</a></li>
                                                    <li><a href="personalcare1.php">Personal Care</a></li>
                                                    <li><a href="fruits1.php">Fruits and Veggies </a></li>
                                                    
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile-menu-area-end -->
            </header>
            <!-- header-area-end -->
            <!-- breadcrumbs-area-start -->
            

<div id="container">
  <div class="cube">
    <div class="sides">
      <div class="top"></div>
      <div class="right"></div>
      <div class="bottom"></div>
      <div class="left"></div>
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>
  <div class="text">Please wait<br> The Fox is looking for your path ...</div>


</div>
 <div id="Fox" align="center">
<img src="https://i.gifer.com/K4UU.gif">
</div>
<nav class="navbar navbar">
  <div class="container-fluid" >
    

    <div id="btns" class="btn-group" style="display: none; font-family: 'Slabo 27px', serif;">
    <button style="font-size: 24px;" type="button" id="cost" onclick="calc(1,0)" class="btn btn-info">Cost Effective</button>
    <button type="button" style="font-size: 24px;" id="dist" onclick="calc(0,1)" class="btn btn-info">Dist. Effective</button>
    <button type="button" style="font-size: 24px;" id="both" onclick="calc(1,1)" class="btn btn-info " autofocus="active" >Both Effective</button>
  </div></div>
</nav>
<!-- <nav class="navbar navbar-inverse">
<div class="container-fluid">      
<div>          
  <ul class="nav nav-pills" role="tablist">
     <li>  <button type="button" id="cost" onclick="calc(1,0)" class="btn btn-outline-info">Cost Effective</button></li>
   <li> <button type="button" id="dist" onclick="calc(0,1)" class="btn btn-outline-info">Dist. Effective</button></li>
    <li><button type="button" id="both" onclick="calc(1,1)" class="btn btn-outline-info">Both Effective</button>      </li> 
  </ul></div>
</div>
</nav>   -->
<!--   <input type="button" id="cost" onclick="calc(1,0)" value="Cost Effective">
  <input type="button" id="dist" onclick="calc(0,1)" value="Distance Effective">
  <input type="button" id="both" onclick="calc(1,1)" value="Both"> -->
</div>
<div id="choice" style="display: none;">
  <img src="choose.gif" align="right">
</div>
<div id="error" style="display: none;font-size: 50px;text-align: center;">
  <img src="err.gif" align="center"><br>
</div>
<div id="googleMap" style="width:100%;height:400px;display: none;"></div>
<!-- <div id="my_textual_div" style="width:100%;height:400px;"></div> -->
<div id="ans" style="display: none; padding-left: 275px;">
  <br><br><br>
  <table id="MyTable" align="left" >

    <tr>
      <td>Shop No.</td>
      <td>Things To Purchase</td>
    </tr>
  </table>
  <div align="right">
    <img src="cart.gif">
    <img src="choose.gif" ></div>
    <br>
    <div>
    <p id="tcst" style="font-family: 'Cinzel', serif; font-size: 24px;">
    </p>
</div></div>





<script>



 
  // function onSolveCallback1(myTsp2){
  //   console.log(myTsp2.getOrder());
  // }

  window.shoplatt = <?php echo json_encode($shoplat); ?>;
  window.shoplonn = <?php echo json_encode($shoplon); ?>;
  // console.log(shoplatt);
  var pur = <?php echo json_encode($pur); ?>;

   // while(window.mylat=="0"){
//     navigator.geolocation.getCurrentPosition(function(location) {
//   console.log(location.coords.latitude);
//   console.log(location.coords.longitude);
//   console.log(location.coords.accuracy);
//   window.mylat=toString(location.coords.latitude);
//   window.mylon=toString(location.coords.longitude);
//   console.log(typeof(location.coords.latitude));
// });
   // }
   // console.log(window.mylat);
  window.mdb= <?php echo json_encode($foo); ?>;
  var numitem= <?php echo json_encode($num); ?>;
  window.mfinal = new Array(numitem);
  window.mfinalshop =new Array(numitem);
  var numshop = shoplatt.length;
  var locat =  new Array();
  var latlll;;
  // console.log(distdb);
  for(var i=0;i<numitem;i++){
    mfinal[i]=Infinity;
    mfinalshop[i]=-1;
  }
  function myMap() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition,showError);
    } else {
        document.write( "Geolocation is not supported by this browser.");
    }
function showError(error) {
  var x= document.getElementById("error"); 
   var z = document.getElementById("container");
        z.style.display = "none";
  var y = document.getElementById("Fox");
        y.style.display = "none";
         var y = document.getElementById("error");
        y.style.display = "block";
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML += "The Fox stumbled as you denied the permission for your location."+"<br>"+"Try again allowing location access."
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
function showPosition(position) {
    window.mylat= position.coords.latitude;
    window.mylon =  position.coords.longitude;

// window.mylat = 26.510555;
// window.mylon= 80.230667;

var tsp = new BpTspSolver(null,null);
tsp.setAvoidHighways(true); 
tsp.setTravelMode(google.maps.DirectionsTravelMode.WALKING);
window.myloc = new google.maps.LatLng(window.mylat,window.mylon);
tsp.addWaypoint(window.myloc,null);

for (var i = 0; i < shoplatt.length; i++) {
    var lat = parseFloat(shoplatt[i]);
    var lng = parseFloat(shoplonn[i]);
    
    var latLng = new google.maps.LatLng(lat,lng);
    // console.log(latLng);
    locat.push(latLng);
    // document.write(latLng);
    tsp.addWaypoint(locat[i],null);
    
  }
      tsp.solveRoundTrip(onSolveCallback);
}}
function onSolveCallback(myTsp) {
  // console.log(myTsp.getAddresses());
  var ch = document.getElementById("choice");
  ch.style.display = "block";
  var x = document.getElementById("container");
        x.style.display = "none";
  var y = document.getElementById("Fox");
        y.style.display = "none";
  var z= document.getElementById("btns");
    z.style.display = "block";

    window.orderr = myTsp.getOrder();
    window.distt = myTsp.getDurations();
    document.getElementById("both").click();
  }
// document.getElementById("cost").addEventListener("click", function(){
//     document.getElementById("ans").innerHTML = "Hello World";
// });
//   document.getElementById("dist").addEventListener("click", calc(0,1));
//   document.getElementById("both").addEventListener("click", calc(1,1));   } 
</script>
<script type="text/javascript">
function calc(pr,di){
  var ch = document.getElementById("choice");
  ch.style.display = "none";
var tbl = document.getElementById('MyTable'); // table reference       
 lastRow = tbl.rows.length - 1; // set the last row index          
 // delete rows with index greater then 0   
 for (i = lastRow; i > 0; i--) {       
  tbl.deleteRow(i);  //delete the row 
 }

  // console.log("here");
  var db= [];
  for (var i = 0; i < window.mdb.length; i++)
    db[i] = window.mdb[i].slice();
  var finalshop = window.mfinalshop.slice();
  var final = window.mfinal.slice();
  var shoplat = window.shoplatt.slice();
  var shoplon = window.shoplonn.slice();
  var latx = new Array();
  var lonx = new Array();
  var flat=new Array();
  var flon= new Array();
   var order = window.orderr;
   var porder = order.slice();
   var dist = window.distt;
   var tp = new Array();
   for(var n=0;n<numitem;n++){
    tp.push(Infinity);
   }
   // console.log(order);  
   var td = new Array();
   var i,j;
   // var remove = new Array();
   var r=0;
   var size=order.length-2;
   var q= order.length-2;
   for(var l=0;l<size;l++){
    latx.push(shoplat[order[l+1]-1]);
    lonx.push(shoplon[order[l+1]-1]);
   }
   // console.log(db);
   for(i=0;i<size;i++){
    for(j=0;j<numshop;j++){
      if(db[j][0]==shoplat[order[i+1]-1] && db[j][1]==shoplon[order[i+1]-1])
      break;    
    }
    for(var k=0;k<numitem;k++){
      if(k>0){
         if((pr*db[j][k+2]+di*0.025*dist[order[i+1]][order[i]])<final[k]){
        final[k]=pr*db[j][k+2]+di*0.025*dist[order[i+1]][order[i]];
        // console.log(dist[order[i+1]][order[i]]);  
        tp[k] = db[j][k+2];
        if(finalshop[k]!=-1){
          db[finalshop[k]][k+2]=Infinity;
        }
        finalshop[k]=j;
        // console.log(k,j);
      }
      else {db[j][k+2]=Infinity;}

      } 
    else {
      // console.log(db[j][2]);
      
      // console.log(db[j][2]);
      if((pr*db[j][k+2]+di*0.025*dist[order[i+1]][order[i]])<final[k]){
        final[k]=pr*db[j][k+2]+di*0.025*dist[order[i+1]][order[i]];
        tp[k] = db[j][k+2];
        if(finalshop[k]!=-1){
          db[finalshop[k]][2]=Infinity;
        }
        finalshop[k]=j;
        // console.log(k,j);
      }
      else {db[j][2]=Infinity;}
    }}
   }
   // console.log(tp);
   var sump=0;
   for(var n=0;n<numitem;n++){
    sump+=parseInt(tp[n]);
   }
   document.getElementById("tcst").innerHTML="Final Cost = "+sump+"/- Rs.";
   // console.log(sump);
   // console.log(final);
   var del=0;
   for( var x=0;x<size;x++){
    del=0;
    for(var y=0;y<numitem;y++){
      if(db[x][y+2]==Infinity)del++;
    }
    if(del==numitem){
      lat = parseFloat(shoplat[x]);
      lng = parseFloat(shoplon[x]);
     var latLng = new google.maps.LatLng(lat,lng);
   
     r++;
     
      shoplat.splice(x,1);
      shoplon.splice(x,1);
      db.splice(x,1);
      size--;x--;
    }
   }
   for(var x=0;x<q;x++){
    // console.log(window.shoplatt[porder[x+1]-1]);
    // console.log(shoplat.indexOf(window.shoplatt[porder[x+1]-1]));

    if(shoplat.indexOf(window.shoplatt[porder[x+1]-1]) == -1)
    {  porder.splice(x+1,1);
    x--;
    q--;
   }}
   td=0;
   // console.log(shoplat);
   // console.log(porder);
   // console.log(dist);
   for(var n=1;n<porder.length;n++){
    // console.log(dist[porder[n]][porder[n-1]])
    td+=dist[porder[n]][porder[n-1]];
    // console.log(dist[porder[n]][porder[n-1]]);
   }
   if(pr==0)td-=150;
   else td+=250;
   // console.log(tp);
   td/=1000;
   document.getElementById("tcst").innerHTML+="<br>"+"Total Distance to be travelled = "+td+" km.";
// console.log(final);
   var flatlng = new Array();
  for(var q=0; q<latx.length;q++){
    for(var w=0;w<shoplat.length;w++){
      if(latx[q]==shoplat[w] && lonx[q]==shoplon[w]){
        flat.push(latx[q]);
        flon.push(lonx[q]);
        latLng = new google.maps.LatLng(latx[q],lonx[q]);
        flatlng.push(latLng);
        break;
      }
    }
  }

  // myTsp.removeWaypoint(locat[0]);
  // console.log(myTsp.getWaypoints());
  // console.log(final);
   var y = document.getElementById("googleMap");
        y.style.display = "block";
  var y = document.getElementById("ans");
        y.style.display = "block";

var mapProp= {
    center:window.myloc,
    zoom:15,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
// var directionsPanel = document.getElementById("my_textual_div");
  var mymark = new google.maps.Marker({
    position: window.myloc,
    map: map,
    title: "You Are Here!"
  });
for(var i=0;i<shoplat.length;i++){
  var contentString="Purchase ";
  for( var p=0;p<numitem;p++){
    if(db[i][p+2]!=Infinity){
      contentString+=pur[p]+" , ";
    }
  }
    contentString= contentString.slice(0,contentString.length-2);
  var n = contentString.lastIndexOf(',');
contentString = contentString.slice(0, n) + contentString.slice(n).replace(',', 'and');

   var table = document.getElementById("MyTable");
    var row = table.insertRow(i+1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = i+1;
    cell2.innerHTML = contentString;
   var infowindow = new google.maps.InfoWindow()
 var marker = new google.maps.Marker({
    position: flatlng[i],
    map: map,
    label: (i+1).toString(),
    title: (i+1).toString()
  });
google.maps.event.addListener(marker,'click', (function(marker,contentString,infowindow){ 
        return function() {
           infowindow.setContent(contentString);
           infowindow.open(map,marker);
        };
    })(marker,contentString,infowindow)); 


}
directionsService = new google.maps.DirectionsService();
  directionsDisplay = new google.maps.DirectionsRenderer(
  {
      suppressMarkers: true
  });                directionsDisplay.setMap(map);
                var waypts = [];
                for (var i = 0; i < flat.length; i++) {
                    waypts.push({
                        location: flatlng[i],
                        stopover: true
                    });
                }
                
                // Add final route to map
                var request = {
                    origin: window.myloc,
                    destination: window.myloc,
                    waypoints: waypts,
                    travelMode: google.maps.TravelMode.WALKING,
                    avoidHighways: true,
                    avoidTolls: false
                };
                directionsService.route(request, function(response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                    }
                    // clearMapMarkers();
                });
                return;
  // var sol =myTsp;
  // myTsp.solveRoundTrip(onSolveCallback1);
    }
</script>
<!-- <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyDkqGlGRIOABg_apXOkVHli_1Qkd-kNFes&callback=myMap"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkqGlGRIOABg_apXOkVHli_1Qkd-kNFes&callback=myMap"></script>
<!-- <button onclick="setTimeout(myFunction, 15000);">Try it</button>

<script>
function myFunction() {
    alert(window.order);
}
</script> -->
</body>
</html>