<?php
 
include "conn.php";
 
$id = $_GET['id'];
 
$sql = "select * from posisi where id=$id";
$row = mysql_query($sql);
$result = mysql_fetch_array($row);
 
?>
 
<!DOCTYPE HTML>
<html>
<head>
<title>Info</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
</script>
 
<style>
      #map-canvas {
       
        height: 300px;
        width: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $result['lat']; ?>,<?php echo $result['lng']; ?>);
  var mapOptions = {
    zoom: 15,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: '<?php echo $result['nama']; ?>'
  });
 
 
 
//marker baru
  var latlng2 = new google.maps.LatLng(<?php echo $result['lat']; ?>,<?php echo $result['lng']; ?>);
 
 //description untuk marker
  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<p><b><?php echo $result['nama']; ?></b>'+
      '<div id="bodyContent">'+
      '</div>'+
      '</div>';
 
  // membuat sebuah window modal box
  var infowindow = new google.maps.InfoWindow({
      content: contentString, maxWidth: 400
  });
 
  var marker = new google.maps.Marker({    
      position: latlng2,
      map: map,
      title: '<?php echo $result['nama']; ?>'
  });
 
  //even listener google map utk menampilkan modal box description
  google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });
 
}
 
google.maps.event.addDomListener(window, 'load', initialize);
 
    </script>
 
 
 
</head>
 
<body>
 
<div class="about">
  <div class="container">
    <section class="title-section">
      <h1 class="title-header"> Info </h1>
    </section>
  </div>
</div>
 
<div class="container">
  <div class="row">
 
    <div class="col-md-8">
        <div class = "panel panel-default">
          <div class = "panel-body">
           
              <p><h2><?php echo $result['nama']; ?></h2></p>
              <hr style="border-bottom:1px solid #cccccc">
              <div class="row">
                <div class="col-md-6">
                   
                </div>
                <div class="col-md-6">
                   
                </div>
              </div>
              <hr style='border-bottom:1px solid #cccccc'>
 
              <div class="row">
                <div class="col-md-12">
                  <p><h3><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Lokasi:</h3></p>
                  <hr style='border-bottom:1px solid #cccccc'>
                  <div id="map-canvas"></div>
                </div>
              </div>
 
             
           
 
          </div>
        </div>
    </div>
 
    <div class="col-md-4">
     
  </div>
  </div>
 
</div>
  <br/><br/>
 
</body>
</html>