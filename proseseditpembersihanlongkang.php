<?php

session_start();

include('connection/config.php');

if(isset($_POST['submit']))
{

$IDPembersihan=$_GET['IDPembersihan'];
$Tahun =$_POST['Tahun']; 
$Sub=$_POST['SubKategori'];
$JenisSubKategori=$_POST['JenisSubKategori'];
$UnitPanjangKeluasan=$_POST['UnitPanjangKeluasan'];
$Jenis=$_POST['Jenis'];
$Frekuensi=$_POST['Frekuensi'];
$NamaJalan=$_POST['NamaJalan']; 
$NamaTaman=$_POST['NamaTaman'];
$Catatan=$_POST['Catatan'];



$sql = "UPDATE pembersihan_awam SET Tahun='$Tahun' ,SubKategori='$Sub',JenisSubKategori='$JenisSubKategori', UnitPanjangKeluasan='$UnitPanjangKeluasan',Jenis='$Jenis', Frekuensi='$Frekuensi', NamaJalan='$NamaJalan', NamaTaman='$NamaTaman', Catatan='$Catatan' WHERE  IDPembersihan='$IDPembersihan'";


}



if (mysqli_query($db, $sql)) {
    header('location:jadualpembersihanlongkang.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}


mysqli_close($db);


?>




