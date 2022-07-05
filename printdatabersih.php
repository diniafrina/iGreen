<?php

include('session.php');
include('header.php');
include('connection/config.php');
$sql = "SELECT * FROM pembersihan_awam";
$result = mysqli_query($db, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>

<body>

<br>

   <p></p>  
    <button id="printPageButton" onClick="window.print();"><img src="image/printer.png" width=30 height=30></button>
 <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
     
    </div>


    <div class="col-sm-8 text-left">
     

  
  <title>Pengurusan Pembersihan Awam</title>
  <center>
  <link rel = "stylesheet" type = "text/css" href="print.css" media = "print">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</center>
</head>
<body>

        
      <center><img src="image/logo.png" width="100" height="100"><center>
      
      <hr>
     <strong> <p>Pengurusan Pembersihan Awam</p></strong>
      <hr>
      <h3></h3>
   

         <div class="panel panel-invisible">
         </div>
<div class="print">
        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <td><b>Tahun</b></td>
                                <td><b>Sub Kategori</b></td>
                                <td><b>Jenis Sub Kategori</b></td>
                                <td><b>Unit/Panjang/Keluasan</b></td>
                                <td><b>Jenis</b></td>
                                <td><b>Frekuensi</b></td>
                                 <td><b>Nama Jalan</b></td>
                                 <td><b>Nama Taman</b></td>
                                 <td><b>Catatan</td>
                                 
                            </thead>
                            </div>

         <?php 
                            $num=1;

                            if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)){
                                
                                echo "<tr> 
                                <td>".$row['Tahun']."</td>
                                <td>".$row['SubKategori']."</td>
                              <td>".$row['JenisSubKategori']."</td>
                              <td>".$row['UnitPanjangKeluasan']."</td>
                              <td>".$row['Jenis']."</td>
                              <td>".$row['Frekuensi']."</td>
                              <td>".$row['NamaJalan']."</td>
                              <td>".$row['NamaTaman']."</td>
                               <td>".$row['Catatan']."</td>


                                 </a>  ";
                                
                               

                              }

                            }


                            ?>


    </div>
          
        </table>
    </div>
    
  </div>
</div>



</body>
</html>
