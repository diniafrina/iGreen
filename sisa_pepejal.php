   <?php
include('connection/config.php');
include('session.php');
include('header.php');
include('navbar.php');
include('sidebar_admin.php');

$sql = "SELECT * FROM sisa_pepejal";
$result = mysqli_query($db, $sql);

?>

    
<div class="container-fluid" >
  
  <div class="row content" style="height: 0%">

  <div class="col-sm-12 text-left">
    <h3> Pengurusan Sisa Pepejal</h3>
     <a href="tambahdata.php" class="btn  btn-success "><img src="image/databaru.png" width=30 height=30>  Tambah Data Baru</a>
   
         <a href="printdata.php" class="btn btn-info"><img src="image/printer.png" width=30 height=30> Cetak </a>
           <a href="cth.php" class="btn btn-warning"><img src="image/search.png"  width=30 height=30> Carian Data</a>
            <a href="cth.php" class="btn btn-primary" class="btn pull-left btn-primary dropdown-toggle "  type="button"  data-toggle="dropdown"><img src="image/kategori.png" width=30 height=30> SubKategori <span class="caret"></span></a>
            
    <ul class="dropdown-menu">
      <li><a href="jadualpremiskediaman.php">Premis Kediaman</a></li>
      <li><a href="jadualpremisperniagaan.php">Premis Perniagaan</a></li>
      <li><a href="jadualcbk.php">CBK</a></li>
    </ul>
</div>
</div>
<br>
<div class="table-responsive" align="center">
        <table id="sisa_pepejal"  class="table table-striped table-bordered " style="width: 50%">
           <thead>
                  <tr>
                                <td><b>Tahun</b> </td>
                                <td><b>Sub Kategori</b></td>
                                <td><b>Frekuensi</b></td>
                                <td><b>Hari</b></td>
                                <td><b>Kawasan SKIM</b></td>
                                <td><b>Lokasi</b></td>
                                <td><b>Jenis Lokasi</b></td>
                                <td><b>Unit/<br>Panjang/<br>Keluasan</b></td>
                                <td><b>Kod</b></td>
                                <td><b>Saiz Bin</b></td>
                                <td><b>Bilangan</b></td>
                                <td><b>Nama Jalan</b></td>
                                <td><b>Nama Taman</b></td>
                                <td><b>Catatan</b></td>

                                <td width="10%"><b>Proses</b></td>   
                             </tr>                      
                            </thead>
                          

                        <?php $num=1;
                            if (mysqli_num_rows($result) > 0)
                            while($row = mysqli_fetch_assoc($result)){ ?>
                                
                                <tr> 
                                <td><?php echo $row['Tahun']; ?></td>
                                <td><?php echo $row['SubKategori'];?></td>
                                <td><?php echo $row['Frekuensi'];?></td>
                                <td><?php echo $row['Hari'];?></td>
                                <td><?php echo $row['KawasanSKIM'];?></td>
                                <td><?php echo $row['Lokasi'];?></td>
                                <td><?php echo $row['JenisLokasi'];?></td>
                                <td><?php echo $row['Unit'];?></td>
                                <td><?php echo $row['Kod'];?></td>
                                <td><?php echo $row['SaizBin'];?></td>
                                <td><?php echo $row['Bilangan'];?></td>
                                <td><?php echo $row['NamaJalan'];?></td>
                                <td><?php echo $row['NamaTaman'];?></td>
                                <td><?php echo $row['Catatan'];?></td>

                                <td> 
                                 
                                  <a href="editdata.php?IDPepejal=<?php echo $row['IDPepejal']; ?>" class="btn btn-info" >
                                     <span title="Kemaskini" class="glyphicon glyphicon-pencil"></span> 
                                 </a>

<br>
                                  <a href="padamdata.php?IDPepejal=<?php echo $row['IDPepejal']; ?>" class="confirmation btn btn-danger" 
                                      onclick="return confirm('Anda mahu padam data tersebut?')">
                                     <span title="Padam" class="glyphicon glyphicon-trash"></span> 
                                 </a>

                                </td>
                              </tr>
                              <?php } ?>
                          
                         </table>
                       </div>

  </div>

<p>
<div class="container-fluid">

</div>
<?php

include('footer.php');

?>

