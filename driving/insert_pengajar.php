<?php
$namafolder="gambar_pengajar/"; //tempat menyimpan file

include "conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
        $id = $_POST['id'];
        $no_hp = $_POST['no_hp'];
		$nama_cv = $_POST['nama_cv'];
		$tarif = $_POST['tarif'];
		$nama= $_POST['nama'];
		$jk=$_POST['jk'];
        $ttl = $_POST['ttl'];
        $alamat=$_POST['alamat'];
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="INSERT INTO data_pengajar(id,no_hp,nama_cv,tarif,nama,jk,ttl,alamat,foto) VALUES
            ('$id','$no_hp','$nama_cv','$tarif','$nama','$jk','$ttl','$alamat','$gambar')";
			$res=mysql_query($sql) or die (mysql_error());
			echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<h3><a href='input_pengajar.php'> Input Lagi</a></h3>";
            echo "<h3><a href='pengajar.php'> Data Pengajar</a></h3>";	   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
}

?>