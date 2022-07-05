<?php

session_start();

include('connection/config.php');

if(isset($_POST['submit']))
{

$IDPepejal=$_GET['IDPepejal'];
$Tahun =$_POST['Tahun']; 
$Sub=$_POST['SubKategori'];
$Frekuensi=$_POST['Frekuensi'];
$Hari=$_POST['Hari'];
$Kawasan=$_POST['KawasanSKIM'];
$Lokasi=$_POST['Lokasi'];
$Jenis=$_POST['JenisLokasi'];
$Unit=$_POST['Unit'];
$Kod=$_POST['Kod'];
$Saiz=$_POST['SaizBin'];
$Bilangan=$_POST['Bilangan'];
$Namaj=$_POST['NamaJalan'];
$Namat=$_POST['NamaTaman'];
$Catatan=$_POST['Catatan'];



$sql = "UPDATE sisa_pepejal SET Tahun='$Tahun' ,SubKategori='$Sub', Frekuensi='$Frekuensi', Hari='$Hari', KawasanSKIM='$Kawasan', Lokasi='$Lokasi', JenisLokasi='$Jenis', Unit='$Unit', Kod='$Kod', SaizBin='$Saiz', Bilangan='$Bilangan', NamaJalan='$Namaj', NamaTaman='$Namat', Catatan='$Catatan' WHERE  IDPepejal='$IDPepejal'";


}



if (mysqli_query($db, $sql)) {
    header('location:sisa_pepejal.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}


mysqli_close($db);


?>


