<html>
    
<body>
    
<?php
    
    include "conn.php";
    
    $nama=$_POST["nama_lokasi"];
    $lat =$_POST["latitude"];
    $lng =$_POST["longitude"];
    
    $sql="insert into posisi values('','$nama','$lat','$lng')";
    
    $sqla = mysql_query($sql);
    
    ?>
    
    Berhasil Simpan Posisi
    
    </body>
</html>
    
    