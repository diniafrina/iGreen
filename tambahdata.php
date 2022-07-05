<?php

include('connection/config.php');
include('session.php'); 
include('header.php');
include('navbar.php');
include('sidebar_admin.php');



?>

<!-- Main -->
<div class="container-fluid">
   
        <div class="col-sm-12">
           
                               
        </div>
        <!-- /col-3 -->
        <div class="col-sm-8" >

            <!-- column 2 -->

            <strong><i class="glyphicon glyphicon-check"></i> Tambah Data Baru </strong>
            <hr>

        <div class="col-md-12">

          

          <form class="form-horizontal" role="form" name="addItem" method="post" action="prosestambahdata.php" >

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
                  <option value="Premis Kediaman">Premis Kediaman</option>
                  <option value="Premis Perniagaan">Premis Perniagaan</option>
                  <option value="CBK">CBK</option>
                  
                </select>

              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-sm-2" for="Frekuensi" placeholder="Pilih Frekuensi">Frekuensi:</label>
              <div class="col-sm-10">
                <select class="form-control" id="Frekuensi" name="Frekuensi">
                  <option value="0" selected>Pilih Frekuensi</option>
                  <option value="2 kali seminggu">2 kali seminggu</option>
                  <option value="6 kali seminggu">6 kali seminggu</option>
                  
                </select>

              </div>
            </div>

           <div class="form-group">
              <label class="control-label col-sm-2" for="Hari" placeholder="Pilih Hari">Hari:</label>
              <div class="col-sm-10">
                <select class="form-control" id="Hari" name="Hari">
                  <option value="0" selected>Pilih Hari</option>
                  <option value="Isnin">Isnin</option>
                   <option value="Selasa">Selasa</option>
                   <option value="Rabu">Rabu</option>
                    <option value="Khamis">Khamis</option>
                     <option value="Jumaat">Jumaat</option>
                      <option value="Sabtu">Sabtu</option>
                       <option value="Ahad">Ahad</option>
                </select>

              </div>
            </div>


           <div class="form-group">
              <label class="control-label col-sm-2" for="KawasanSKIM" placeholder="Pilih KawasanSKIM">Kawasan Skim:</label>
              <div class="col-sm-10">
                <select class="form-control" id="KawasanSKIM" name="KawasanSKIM">
                  <option value="0" selected>Pilih Kawasan SKIM</option>
                  <option value="JHKG01">JHKG01</option>
                   <option value="JHKG02">JHKG02</option>
                   
                </select>

              </div>
            </div>
          
           <div class="form-group">
              <label class="control-label col-sm-2" for="Lokasi" placeholder="Pilih Lokasi">Lokasi:</label>
              <div class="col-sm-10">
                <select class="form-control" id="Lokasi" name="Lokasi">
                  <option value="0" selected>Pilih Lokasi</option>
                  <option value="Rumah Kediaman">Rumah kediaman</option>
                   <option value="Komersial Bertingkat">Komersial Bertingkat</option>
                   
                </select>

              </div>
            </div>

 <div class="form-group">
              <label class="control-label col-sm-2" for="JenisLokasi" placeholder="Pilih Jenis Lokasi">Jenis Lokasi:</label>
              <div class="col-sm-10">
                <select class="form-control" id="JenisLokasi" name="JenisLokasi">
                  <option value="0" selected>Pilih Jenis Lokasi</option>
                  <option value="Rumah Pangsa">Rumah Pangsa</option>
                   <option value="Komersial Kerbside">Komersial Kerbside</option>
                   <option value="Komersial Bulk">Komersial Bulk</option>
                   <option value="Institusi">Institusi</option>
                   
                   
                </select>

              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-sm-2" for="Unit">Unit  :</label>
              <div class="col-sm-10">
                <input type="Varchar" class="form-control" id="Unit" name="Unit" placeholder="Masukkan Unit" required class="form-control">
              </div>
</div>

 <div class="form-group">
              <label class="control-label col-sm-2" for="Kod">Kod :</label>
              <div class="col-sm-10">
                <input type="Varchar" class="form-control" id="Kod" name="Kod" placeholder="Masukkan Kod" required class="form-control">
              </div>
</div>

 <div class="form-group">
              <label class="control-label col-sm-2" for="SaizBin" placeholder="Pilih Saiz Bin">Saiz Bin:</label>
              <div class="col-sm-10">
                <select class="form-control" id="SaizBin" name="SaizBin">
                  <option value="0" selected>Pilih Saiz Bin</option>
                  <option value="120L">120 L</option>
                   <option value="240L">240 L</option>
                   <option value="1100L">1100 L</option>
                   <option value="RORO10M">RORO 10 Ml</option>
                   
                   
                </select>

              </div>
            </div>

 <div class="form-group">
              <label class="control-label col-sm-2" for="Bilangan">Bilangan :</label>
              <div class="col-sm-10">
                <input type="int" class="form-control" id="Bilangan" name="Bilangan" placeholder="Masukkan Bilangan" required class="form-control">
              </div>
</div>


 <div class="form-group">
              <label class="control-label col-sm-2" for="NamaJalan">Nama Jalan:</label>
              <div class="col-sm-10">
                <input type="int" class="form-control" id="NamaJalan" name="NamaJalan" placeholder="Masukkan Nama Jalan" required class="form-control">
              </div>
</div>



            <div class="form-group">
              <label class="control-label col-sm-2" for="NamaTaman">Nama Taman:</label>
              <div class="col-sm-10">
                <input type="int" class="form-control" id="NamaTaman" name="NamaTaman" placeholder="Masukkan Nama Taman. Cth: Taman 
                " required class="form-control">
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
              <button type="submit" class="btn btn-default" name="submit" style="background-color: #196F3D  ; color: white">Tambah Data</button>
              <a href="sisa_pepejal.php" class="btn btn-default" style="background-color: #E74C3C    ; color: white">Kembali
              </a>
            </div>
          </form>

        </div>
      </div>

  </div>








<br><br>
	</body>
</html>