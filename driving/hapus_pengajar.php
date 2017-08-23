<?php
include "conn.php";
$id = $_GET['kd'];

$query = mysql_query("DELETE FROM data_pengajar WHERE id='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'pengajar.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'pengajar.php'</script>";	
}
?>