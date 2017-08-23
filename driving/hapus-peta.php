<?php
include "conn.php";
$id = $_GET['kd'];

$query = mysql_query("DELETE FROM posisi WHERE id='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'tampilkan_peta_admin.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'tampilkan_peta_admin.php'</script>";	
}
?>