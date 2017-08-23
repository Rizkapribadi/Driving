<?php
include "conn.php";
$id          = $_POST['id'];
$user_id     = $_POST['user_id'];
$nama        = $_POST['nama'];
$saran	     = $_POST['saran'];
$tgl         = $_POST['tgl'];
$jam         = $_POST['jam'];

//if( empty($nama) || empty($jk) || empty($kelas) || empty($perlu) || empty($cari) || empty($saran) ){
    //echo "<b>Data Harus Di isi.!!!</b>";
//}else{

$query = mysql_query("INSERT INTO saran (id, user_id, nama, saran, tgl, jam) VALUES ('$id','$user_id', '$nama', '$saran', '$tgl', '$jam')");
if ($query){
	echo "<script>alert('Saran berhasil di kirim ke Admin!'); window.location = 'index_user.php'</script>";	
} else {
	echo "<script>alert('Saran belum berhasil di kirim ke Admin!'); window.location = 'index_user.php'</script>";	
}
//}
?>