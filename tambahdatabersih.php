<?php

include('connection/config.php');
include('session.php'); 
include('header.php');
include('navbar.php');
include('sidebar_admin.php');

//$nochrome = $_GET['id'];

?>

<!-- Main -->
<div class="container-fluid">
   
        <div class="col-sm-12">
           
                               
        </div>
        <!-- /col-3 -->
        <div class="col-sm-8">

            <!-- column 2 -->

            <strong><i class="glyphicon glyphicon-check"></i> Tambah Data Baru </strong>
            <hr>

        <div class="col-md-12">

          

          <form class="form-horizontal" role="form" name="addItem" method="post" action="prosestambahdatabersih.php" >

            <div class="form-group">
              <label class="control-label col-sm-2" for="Tahun" placeholder="Tahun">Tahun:</label>
              <div class="col-sm-10">
                <select class="form-control" id="Year" name="Tahun">
                  <option value="0" selected>Pilih Tahun</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                   <option value="2020">2020</option>
                </select>

              </div>
            </div>


 <div class="form-group">
              <label class="control-label col-sm-2" for="SubKategori" placeholder="Pilih SubKategori">Sub Kategori:</label>
              <div class="col-sm-10">
                <select class="form-control" id="SubKategori" name="SubKategori">
                  <option value="0" selected>Pilih Sub Kategori</option>
                  <option value="Pembersihan longkang">Pembersihan Longkang</option>
                  <option value="Pembersihan Jalan">Pembersihan Jalan</option>
                  <option value="Pemotongan Rumput">Pemotongan Rumput</option>
                  
                </select>

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="JenisSubKategori" placeholder="Pilih jenis SubKategori">Jenis Sub Kategori:</label>
              <div class="col-sm-10">
                <select class="form-control" id="JenisSubKategori" name="JenisSubKategori">
                  <option value="0" selected>Pilih Jenis Sub Kategori</option>
                  <option value="Longkang Terbuka (Lebar kurang 450 mm) Panjang (M)">Longkang Terbuka (Lebar kurang 450 mm) Panjang (M)</option>
                  <option value="Longkang Terbuka (450 mm kurang lebar 100 mm) Panjang (M)">Longkang Terbuka (450 mm kurang lebar 100 mm) Panjang (M)</option>
                  <option value="Longkang Terbuka (1000 mm kurang lebar kurang 2000 mm) Panjang (M)">Longkang Terbuka (1000 mm kurang lebar kurang 2000 mm) Panjang (M)</option>
                  <option value="Longkang Tertutup (Lebar kurang 450mm)Panjang (M)">Longkang Tertutup (Lebar kurang 450mm)Panjang (M)</option>
                  <option value="Perangkap Sampah Longkang (Unit)">Perangkap Sampah Longkang (Unit)</option>
                  
                </select>

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="UnitPanjangKeluasan">Unit/<br>Panjang/<br>Keluasan:</label>
              <div class="col-sm-10">
                <input type="int" class="form-control" id="UnitPanjangKeluasan" name="UnitPanjangKeluasan" placeholder="Masukkan Unit/Panjang/Keluasan" required class="form-control">
              </div>
</div>

<div class="form-group">
              <label class="control-label col-sm-2" for="Jenis" placeholder="Pilih Jenis">Jenis:</label>
              <div class="col-sm-10">
                <select class="form-control" id="Jenis" name="Jenis">
                  <option value="0" selected>Pilih Jenis</option>
                  <option value="Tanpa Median">Tanpa Median</option>
                   <option value="Median">Median</option>
                   <option value="Parkir Awam">Parkir Awam</option>
                  
                   
                   
                </select>

              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-sm-2" for="Frekuensi" placeholder="Pilih Frekuensi">Frekuensi:</label>
              <div class="col-sm-10">
                <select class="form-control" id="Frekuensi" name="Frekuensi">
                  <option value="0" selected>Pilih Frekuensi</option>
                  <option value="1 kali sebulan">1 kali Sebulan</option>
                  <option value="2 kali sebulan">2 kali sebulan</option>
                  <option value="26 kali sebulan">26 kali sebulan</option>
                </select>

              </div>
            </div>


 <div class="form-group">
              <label class="control-label col-sm-2" for="NamaJalan">Nama Jalan :</label>
              <div class="col-sm-10">
                <input type="Varchar" class="form-control" id="NamaJalan" name="NamaJalan" placeholder="Masukkan Nama Jalan" required class="form-control">
              </div>
</div>


          <div class="form-group">
              <label class="control-label col-sm-2" for="NamaTaman">Nama Taman :</label>
              <div class="col-sm-10">
                <input type="Varchar" class="form-control" id="NamaTaman" name="NamaTaman" placeholder="Masukkan Nama Taman" required class="form-control">
              </div>
</div>


            <div class="form-group">
              <label class="control-label col-sm-2" for="Catatan">Catatan :</label>
              <div class="col-sm-10">
                <input type="int" class="form-control" id="Catatan" name="Catatan" placeholder="Masukkan Catatan" required class="form-control">
              </div>
</div>

          </br>

            <div align="right">
              <button type="submit" class="btn btn-default" name="submit"  style="background-color: #196F3D  ; color: white" >Tambah Data</button>
              <a href="pembersihan_awam.php" class="btn btn-default" style="background-color: #E74C3C    ; color: white " >Kembali
              </a>
            </div>
          </form>

        </div>
      </div>

  </div>








<br><br>
	</body>
</html>