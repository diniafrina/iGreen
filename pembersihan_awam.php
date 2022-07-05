 
<?php
include('connection/config.php');
include('session.php');
include('header.php');
include('navbar.php');
include('sidebar_admin.php');

$sql = "SELECT * FROM pembersihan_awam";
$result = mysqli_query($db, $sql);

?>

  <div class="container-fluid">  
 <div class="row content" style="height: 0%">

  <div class="col-sm-12 text-left">
    <h3> Pengurusan Sisa Pepejal</h3>
     <a href="tambahdatabersih.php" class="btn  btn-success "><img src="image/databaru.png" width=30 height=30>  Tambah Data Baru</a>
   
         <a href="printdatabersih.php" class="btn btn-info"><img src="image/printer.png" width=30 height=30> Cetak </a>
           <a href="cari.php" class="btn btn-warning"><img src="image/search.png"  width=30 height=30> Carian Data</a>
            <a href="cth.php" class="btn btn-primary" class="btn pull-left btn-primary dropdown-toggle "  type="button"  data-toggle="dropdown"><img src="image/kategori.png" width=30 height=30> SubKategori <span class="caret"></span></a>
            
    <ul class="dropdown-menu">
      <li><a href="jadualpembersihanjalan.php">Pembersihan Jalan</a></li>
      <li><a href="jadualpembersihanlongkang.php">Pembersihan Longkang</a></li>
      <li><a href="jadualpemotonganrumput.php">Pemotongan Rumput</a></li>
    </ul>
</div>
</div>
<br>
            

<div class="table-responsive">
        <table id="sisa_pepejal" class="table table-striped table-bordered">
           <thead>
                  <tr>
                                
                                <td><b>Tahun</b></td>
                                <td><b>Sub Kategori</b></td>
                                <td><b>Jenis Sub Kategori</b></td>
                                <td><b>Unit/<br>Panjang/<br>Keluasan</b></td>
                                <td><b>Jenis</b></td>
                                <td><b>Frekuensi</b></td>
                                <td><b>Nama Jalan</b></td>
                                <td><b>Nama Taman</b></td>
                                <td><b>Catatan</b></td>
                                <td><b>Proses</b></td>
                                
                             </tr>                          
                            </thead>
                          

                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                                
                                <tr> 
                          
                                <td><?php echo $row['Tahun']; ?></td>
                                <td><?php echo $row['SubKategori'];?></td>
                                <td><?php echo $row['JenisSubKategori'];?></td>
                                <td><?php echo $row['UnitPanjangKeluasan'];?></td>
                                <td><?php echo $row['Jenis'];?></td>
                                <td><?php echo $row['Frekuensi'];?></td> 
                                <td><?php echo $row['NamaJalan'];?></td>
                                <td><?php echo $row['NamaTaman'];?></td>
                                <td><?php echo $row['Catatan'];?></td>
                              
                                <td> 
                                 
 
                                  <a href="editdatabersih.php?IDPembersihan=<?php echo $row['IDPembersihan']; ?>" class="btn btn-info" >
                                     <span title="Kemaskini" class="glyphicon glyphicon-pencil"></span> 
                                 </a>

<p>
                                  <a href="padamdatabersih.php?IDPembersihan=<?php echo $row['IDPembersihan']; ?>" class="confirmation btn btn-danger" 
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