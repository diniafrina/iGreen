<?php

session_start();

include('connection/config.php');

// Define $username and $password

$username=$_POST['username']; 
$password=$_POST['password'];

// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysql_real_escape_string($_POST['username'] ); 
//$password = mysql_real_escape_string($_POST['password'] ); 

//Check username and password from database
$sql="SELECT * FROM login WHERE username='$username' and password='$password'";

$result=mysqli_query($db,$sql);

$row=mysqli_fetch_array($result);


//If username and password exist in our database then create a session. //Otherwise echo error.
if($row){
	session_regenerate_id();
	$_SESSION['username'] = $_POST['username'];


	//level 1 is for admin
	if ($row['level']==1){

		 echo'<script type=text/javascript>
  alert("Anda baru sahaja log masuk!!");
  window.location="adminmain.php";
  </script>';
		
	

	//level 0 is for end-user
	}else{

		
		header("location: usermains.php"); 

	}



}

?>

