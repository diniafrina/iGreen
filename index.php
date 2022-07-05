 <?php 
session_start();
include("connection/config.php");
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sistem i-Green</title> 
   <link rel="icon" href="image/picture3.png"/>
  
      <style>

      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);



body{
	position: auto;
	background-image: url(image/bg.jpg);
	color: #fff;
	font-family: Times New Roman;
	font-size: 16px;
	display: block;
	
}


.grad img{
	margin-top:  5%;
	margin-left: 42%;
}

.header{
	position: absolute;
	top: calc(60% - 35px);
	left: calc(60% - 255px);
	z-index: 2;
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 45px;
	font-weight: 200;
	color: #fff !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(40% - 10px);
	height: 250px;
	width: 450px
	padding: 20px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 5px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 100px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 4px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 8px;
	margin-top: 20px;
}

.login input[type=Reset]{
	width: 100px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 4px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 8px;
	margin-top: 20px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}

img{
	margin-bottom: 20%;
}

    </style>
</head>



<body>




		<div class="grad"><img src="image/picture3.png" size=20px> </div>
		<div class="header">
			
	<div>Sistem <span> i-Green</span> </div>
		</div>
		<br><br>
		<form name="form1" method="post" action="checklogin.php" role="login">
		<div class="login">

	
		<br><br><br><br>
		<br><br><br><br><br><br>

     <b>Nama Pengguna:</b>

	<input type="text" placeholder=" Masukkan Nama Pengguna" name="username" required><br>

     <b style="margin-left: 6%">Kata Laluan: </b>
     
	<input type="password" placeholder=" Masukkan Koatalaluan" name="password" required><br>
	<center>
	<p>
	<input type="submit" value="Log Masuk" name="submit"  style="background-color: #196F3D  ; color: white">
	<input type="Reset" value="Semula" name="Reset"  style="background-color: #E74C3C    ; color: white">
	</div>
</div>

	</form>

	<div class="footer" style="margin-left: 5%">
            <center><p style="color: black"> © 2018 Bahagian Teknologi Maklumat <br> Majlis Perbandaran Kluang <br> 
                Paparan Terbaik Menggunakan Google Chrome Terkini</p></center>
     <br></div>
		
		
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  
</body>
</html>
