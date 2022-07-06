<?php

session_start();


include('connection/config.php');

// Define $username and $password

$IDPembersihan=$_GET['IDPembersihan'];

$sql = "DELETE FROM pembersihan_awam WHERE IDPembersihan=$IDPembersihan";
$infosisa_pepejal = mysqli_query($db,$sql);


if (mysqli_query($db, $sql)) 
{
    header('location:pembersihan_awam.php');
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}


mysqli_close($db);


?>










