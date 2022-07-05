<?php
include('connection/config.php');
include('session.php');
include('header.php');
include('navbar.php');
include('sidebar_admin.php');

$sql = "SELECT * FROM sisa_pepejal";
$result = mysqli_query($db, $sql);
?>

<head>
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/local.css" />
        <link rel="icon"  href="images/favicon3.ico" width="100px" height="100px">
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <!-- you need to include the shieldui css and js assets in order for the charts to work -->
        <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
        <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
        <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>

<div class="container-fluid">
  
  <div class="row content">

  <div class="col-sm-12
   text-left">
    
<div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                 
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li><a href="adminmain.php">Halaman Utama</a></li>
                        <li><a href="sisa_pepejal.php">Pengurusan Sisa Pepejal</a></li>         
                        <li><a href="pembersihan_awam.php"> Pengurusan Pembersihan Awam</a></li>           
                    
<!--                        <li><a href="cetak.php?c3t@k45!hjfd"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></li>-->

                    </ul>

                    <ul class="nav navbar-nav navbar-right navbar-user">

                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Log Keluar<b class="caret"></b></a>
                            <ul class="dropdown-menu">

                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script type="text/javascript">
                $("#btnPrint").live("click", function () {
                    var divContents = $("#dvContainer").html();
                    var printWindow = window.open('', '', 'height=400,width=600');
                    printWindow.document.write('<html><head><title>DIV Contents</title>');
                    printWindow.document.write('</head><body >');
                    printWindow.document.write(divContents);
                    printWindow.document.write('</body></html>');
                    printWindow.document.close();
                    printWindow.print();
                });
            </script>
            <div id="page-wrapper">

                <div class="row">
                    <div class="col-lg-12" >
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-search" aria-hidden="true"></i> Carian Mengikut Nama Taman Dan Kategori </h3>
                            </div>
                            
                              <script type="text/javascript">
                                $("#btnPrint").live("click", function () {
                                    var divContents = $("#dvContainer").html();
                                    var printWindow = window.open('', '', 'height=400,width=600');
                                    printWindow.document.write('<html><head><title>DIV Contents</title>');
                                    printWindow.document.write('</head><body >');
                                    printWindow.document.write(divContents);
                                    printWindow.document.write('</body></html>');
                                    printWindow.document.close();
                                    printWindow.print();
                                });
                            </script>
                            <div class="panel-body">
                                <div id="shieldui-grid1">

                                    <div class="widget-content">

                                        <form method="post">

                                            <div class="form-group">

                                                <label for="NamaTaman">Nama Taman</label> 

                                                <select name="NamaTaman" class="form-control" id="NamaTaman" placeholder="Sila pilih Nama Taman">
                                                    <option>Sila Pilih Nama Taman</option>
                                                    <option>Taman Intan</option>
                                                    <option>Taman Fajar</option>
                                                    
                                                </select>  
                                            </div>

                                            <div class="form-group">

                                                <label for="SubKategori">SubKategori</label> 

                                                <select name="SubKategori" class="form-control" id="SubKategori" placeholder="SIla Pilih SubKategori">
                                                    <option>Sila Pilih Jenis SubKategori</option>
                                                     <option>Premis Kediaman</option>
                                                    <option>Premis Perniagaan</option>
                                                    <option>CBK</option>
                                                    
                                                </select>  
                                            </div>

                                           

                                            <div>
                                                <input  class="btn btn-info" type="submit" name="cari" value="CARI">
                                                 <input class="btn btn-success" type="button" value="CETAK" id="btnPrint" />
                                                <a href="sisa_pepejal.php"> <input  class="btn btn-danger" type="button" name="kembali" value="KEMBALI"></a>
                                            </div>
                                            <br>
                                            </div>

                                            </div>

                                        </form>

                                        <?php
                                        if (isset($_POST['cari'])) {
                                            $rekod = NULL;
                                            $db=mysqli_connect("localhost","root","","igreen");

//                                            $search = $_POST['tarikh'];
//                                            $search = $_POST['category'];
//                                            $category = mysql_real_escape_string(stripslashes($_POST['category'])); 
                                            $NamaTaman= mysql_real_escape_string(stripslashes($_POST['NamaTaman']));
                                            $SubKategori = mysql_real_escape_string(stripslashes($_POST['SubKategori']));
                                           
                                            $sql = "SELECT * FROM sisa_pepejal WHERE NamaTaman='$NamaTaman' AND SubKategori='$SubKategori' ";


                                            $result_apply = mysqli_query($db, $sql) or die(mysqli_error($db));
                                            $record_apply = mysqli_num_rows($result_apply);

                                            if ($record_apply != 0) {
                                                ?>
                                               <div id="dvContainer">
                                            <center><img src="image/logo.png" width="100px" height="100px"/>  
                                                <br>
                                                <h4>CARIAN MENGIKUT NAMA TAMAN DAN SUBKATEGORI</h4>
                                            </center> 
                                            <br>
                                            
                                            <br>
                                            <style type="text/css"> 
                                                #BAD { border-collapse: collapse; } 

                                                td {border-style: solid; border-color: #838383} 

                                            </style> 
                                            <table class="table table-bordered table-striped">

                                                <tr>
                                                   
                                                <td><b><center>Tahun</center></td></b>
                                                <td><b><center>SubKategori</center></td></b>
                                                <td><b><center>Frekuensi</center></td></b>
                                                <td><b><center>Hari</center></td></b>
                                                <td><b><center>Kawasan SKIM</center></td></b>

                                                <td><b><center>Lokasi</center></td></b>
                                                <td><b><center>Jenis Lokasi</center></td></b>
                                                <td><b><center>Unit/Panjang/Keluasan</center></td></b>
                                                <td><b><center>Kod</center></th></b>
                                                <td><b><center>Saiz Bin</center></td></b>
                                            <td><b><center>Bilangan</td></b>
                                            <td><b><center><center>Nama Jalan</center></td></b>

                                                    <td><b><center>Nama Taman</center></td></b>

                                                <td><b><center>Catatan
                                                </center></td></center></td></b>
                                                    </tr>

                                                    <?php while ($result2 = mysqli_fetch_assoc($result_apply)) { ?>
                                                        <tr>
                                                          
                                                        <td><center><?php echo $result2['Tahun']; ?></center></td>
                                                        <td><center><?php echo $result2['SubKategori']; ?></center></td>
                                                        <td><center><?php echo $result2['Frekuensi']; ?></center></td>
                                                        <td><center><?php echo $result2['Hari']; ?></center></td>
                                                        <td><center><?php echo $result2['KawasanSKIM']; ?></center></td>

                                                        <td><center><?php echo $result2['Lokasi']; ?></center>
                                                        <td><center><?php echo $result2['JenisLokasi']; ?></center></td>
                                                        <td><center><?php echo $result2['Unit']; ?> </center></td>
                                                        <td><center><?php echo $result2['Kod']; ?></center></td>
        
                                                        <td><center><?php echo $result2['SaizBin']; ?></center></td>
                                                        <td><center><?php echo $result2['Bilangan']; ?></center></td>
                                                        <td><center><?php echo $result2['NamaJalan']; ?></center></td>

                                                        <td><center><?php echo $result2['NamaTaman']; ?></center></td>
                                                         <td><center><?php echo $result2['Catatan']; ?></center></td>
          


                                                        </tr>
                                                    <?php } ?>              
                                            </table>
                                            <?php
                                        } else {
                                            ?><div class="alert alert-danger">Tiada Rekod Yang Ditemui</div><?php
                                        }
                                    }
                                    ?>                           
                                </div>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /#page-wrapper -->
            </div>
            <!-- /#wrapper -->


   

  
 