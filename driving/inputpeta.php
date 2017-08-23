<!DOCTYPE html>
<html>
  <head>
    <title>Input</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
</script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Google Maps Location picker</title>
    <style type="text/css">    
      #map {
        border :1px solid #cccccc;
        padding : 5px;
        width: 100%;
        height: 300px;
      }
</style>
<script src="http://maps.google.com/maps/api/js?sensor=false"
    type="text/javascript"></script>
  </head>

  <body>

  <div class="container-fluid">
  <div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
  <div class = "panel panel-default">
  <div class = "panel-body">
  <form method = 'POST' action='simpan_peta.php' enctype='multipart/form-data'>

  

  <div class="form-group">
  <label for="nama">Nama</label>
  <input class="form-control" type="text" name='nama_lokasi' id='nama_lokasi' placeholder="Nama">
</div>

<div class="form-group">
  <label for="titik">Tentukan Lokasi (Geser Titik Merah)</label>
  <div id="map"></div>
</div>

<div class="form-group">
  <!-- <label for="latitude">Latitude</label> -->
  <input class="form-control" type="text" name='latitude' id='latitude'>
</div>
<div class="form-group">
  <!-- <label for="longitude">Longitude</label> -->
  <input class="form-control" type="text" name='longitude' id='longitude'>
</div>
<div class="form-group">
    <input type="submit" value="Submit" class="btn btn-primary" id="submit">
</div>
  </form>
  </div>
  </div>
  <br/>
  <br/>
  </div>
  <div class="col-md-3">
  </div>
  </div>
  </div>


  <script type="text/javascript">
    //* Fungsi untuk mendapatkan nilai latitude longitude
function updateMarkerPosition(latLng) {
  document.getElementById('latitude').value = [latLng.lat()]
    document.getElementById('longitude').value = [latLng.lng()]
}
       
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 15,
center: new google.maps.LatLng(5.55896624613971,95.32950172283938),
 mapTypeId: google.maps.MapTypeId.ROADMAP
  });
//posisi awal marker   
var latLng = new google.maps.LatLng(5.55896624613971,95.32950172283938);
 
/* buat marker yang bisa di drag lalu 
  panggil fungsi updateMarkerPosition(latLng)
 dan letakan posisi terakhir di id=latitude dan id=longitude
 */
var marker = new google.maps.Marker({
    position : latLng,
    title : 'lokasi',
    map : map,
    draggable : true
  });
   
updateMarkerPosition(latLng);
google.maps.event.addListener(marker, 'drag', function() {
 // ketika marker di drag, otomatis nilai latitude dan longitude
 //menyesuaikan dengan posisi marker 
    updateMarkerPosition(marker.getPosition());
  });
</script>

</body>
  
</html>