<?php
include "conn.php";
$user_id       = $_POST['user_id'];
$username      = $_POST['username'];
$password      = $_POST['password'];
$fullname      = $_POST['fullname'];
$email         = $_POST['email'];

$query = mysql_query("UPDATE user SET username='$username', password='$password', fullname='$fullname',email='$email' WHERE user_id='$user_id'")or die(mysql_error());
if ($query){
echo "<h3><a href='login_user.html'>Profil Berhasil di Edit, Silahkan klik disini untuk login kembali</a></h3>";
} else {
	echo "gagal";
    }
?>