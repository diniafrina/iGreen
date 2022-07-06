<?php

session_start();


include('connection/config.php');

// Define $username and $password

$IDPepejal=$_GET['IDPepejal'];

$sql = "DELETE FROM sisa_pepejal WHERE IDPepejal=$IDPepejal";
$infosisa_pepejal = mysqli_query($db,$sql);


if (mysqli_query($db, $sql)) 
{
    header('location:jadualpremisperniagaan.php');
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}


mysqli_close($db);


?>





