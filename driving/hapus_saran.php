<?php
include "conn.php";
$id = $_GET['kd'];

$query = mysql_query("DELETE FROM saran WHERE id='$id'");
if ($query){
	echo "<script>alert('Saran Berhasil dihapus!'); window.location = 'saran.php'</script>";	
} else {
	echo "<script>alert('Saran Gagal dihapus!'); window.location = 'saran.php'</script>";	
}
?>