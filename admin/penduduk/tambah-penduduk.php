<?php 
  include ('../part/akses.php');
  include ('../part/header.php');
  include ('../../config/koneksi.php');
?> 

<?php 
  include ('../part/navbar.php');
?> 

   <div class="container-fluid py-4">
      <div class="row">

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Penduduk</p>
                    <h5 class="font-weight-bolder mb-0">
                       <?php
                include ('../../config/koneksi.php');

                $qTampil = mysqli_query($connect, "SELECT * FROM penduduk");
                $jumlahPenduduk = mysqli_num_rows($qTampil);
                echo $jumlahPenduduk;
              ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Permintaan Surat </p>
                    <h5 class="font-weight-bolder mb-0">
                      <?php
                $qTampil = mysqli_query($connect, "SELECT tanggal_surat FROM surat_keterangan WHERE status_surat='pending' 
                  UNION SELECT tanggal_surat FROM surat_keterangan_berkelakuan_baik WHERE status_surat='pending' 
                  UNION SELECT tanggal_surat FROM surat_keterangan_domisili WHERE status_surat='pending'
                  UNION SELECT tanggal_surat FROM surat_keterangan_kepemilikan_kendaraan_bermotor WHERE status_surat='pending'
                  UNION SELECT tanggal_surat FROM surat_keterangan_perhiasan WHERE status_surat='pending'
                  UNION SELECT tanggal_surat FROM surat_keterangan_usaha WHERE status_surat='pending'
                  UNION SELECT tanggal_surat FROM surat_lapor_hajatan WHERE status_surat='pending'
                  UNION SELECT tanggal_surat FROM surat_pengantar_skck WHERE status_surat='pending'");
                $jumlahPermintaanSurat = mysqli_num_rows($qTampil);
                echo $jumlahPermintaanSurat;
              ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Surat Selesai</p>
                    <h5 class="font-weight-bolder mb-0">
                      <?php
                $qTampil = mysqli_query($connect, "SELECT tanggal_surat FROM surat_keterangan WHERE status_surat='selesai' 
                  UNION SELECT tanggal_surat FROM surat_keterangan_berkelakuan_baik WHERE status_surat='selesai' 
                  UNION SELECT tanggal_surat FROM surat_keterangan_domisili WHERE status_surat='selesai'
                  UNION SELECT tanggal_surat FROM surat_keterangan_kepemilikan_kendaraan_bermotor WHERE status_surat='selesai'
                  UNION SELECT tanggal_surat FROM surat_keterangan_perhiasan WHERE status_surat='selesai'
                  UNION SELECT tanggal_surat FROM surat_keterangan_usaha WHERE status_surat='selesai'
                  UNION SELECT tanggal_surat FROM surat_lapor_hajatan WHERE status_surat='selesai'
                  UNION SELECT tanggal_surat FROM surat_pengantar_skck WHERE status_surat='selesai'");
                $jumlahPermintaanSurat = mysqli_num_rows($qTampil);
                echo $jumlahPermintaanSurat;
              ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-square-pin text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Kode Wilayah</p>
                    <h5 class="font-weight-bolder mb-0">
                      75.71.04.
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-building text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<section>
  <br>
      </div>
      <div class="content-wrapper">
  <section class="content-header">
    <h1>Data Penduduk</h1>
    <ol class="breadcrumb">
   
    </ol>
  </section>
<div class="content-wrapper">
  <section class="content-header">
  
  <section class="content">      
    <div class="row">
      <div class="col-md-12">
        <form method="post" enctype="multipart/form-data" action="import-penduduk.php">
          <div class="col-md-3">
            <input name="datapenduduk" type="file" required="required">
          </div>
          <div>
            <br>
            <input name="upload" type="submit" class="btn btn-primary" value="Import .XLS">
          </div>
        </form><br>
      </div>
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fas fa-user-plus"></i> Tambah Data Penduduk</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div>
          <div class="box-body">
            <div class="row">
              <form class="form-horizontal" method="post" action="simpan-penduduk.php">
                <div class="col-md-6">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">NIK</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnik" maxlength="16" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="NIK" required>
                        <script>
                          function hanyaAngka(evt){
                            var charCode = (evt.which) ? evt.which : event.keyCode
                            if (charCode > 31 && (charCode < 48 || charCode > 57))
                            return false;
                            return true;
                          }
                        </script>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Lengkap</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnama" class="form-control" style="text-transform: capitalize;" placeholder="Nama" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" name="ftempat_lahir" class="form-control" style="text-transform: capitalize;" placeholder="Tempat Lahir" required>                   
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="date" name="ftgl_lahir" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <select name="fjenis_kelamin" class="form-control" required>
                          <option value="">-- Jenis Kelamin --</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Agama</label>
                      <div class="col-sm-8">
                        <input type="text" name="fagama" class="form-control" style="text-transform: capitalize;" placeholder="Agama" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jalan</label>
                      <div class="col-sm-8">
                        <input type="text" name="fjalan" class="form-control" style="text-transform: capitalize;" placeholder="Jalan" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Dusun</label>
                      <div class="col-sm-8">
                        <select name="fdusun" class="form-control" style="text-transform: capitalize;" required>
                          <option value="">-- Dusun --</option>
                          <?php
                            $qTampilDusun = "SELECT * FROM dusun";
                            $tampilDusun = mysqli_query($connect, $qTampilDusun);
                            while($rows = mysqli_fetch_assoc($tampilDusun)){
                          ?>
                          <option value="<?php echo $rows['nama_dusun']; ?>"><?php echo $rows['nama_dusun']; ?></option>
                          <?php 
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">RT</label>
                      <div class="col-sm-8">
                        <select name="frt" class="form-control" required>
                          <option value="">-- RT --</option>
                          <option value="001">001</option>
                          <option value="002">002</option>
                          <option value="003">003</option>
                          <option value="004">004</option>
                          <option value="005">005</option>
                          <option value="006">006</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">RW</label>
                      <div class="col-sm-8">
                        <select name="frw" class="form-control" required>
                          <option value="">-- RW --</option>
                          <option value="001">001</option>
                          <option value="002">002</option>
                          <option value="003">003</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Desa</label>
                      <div class="col-sm-8">
                        <input type="text" name="fdesa" class="form-control" style="text-transform: capitalize;" placeholder="Desa" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Kecamatan</label>
                      <div class="col-sm-8">
                        <input type="text" name="fkecamatan" class="form-control" style="text-transform: capitalize;" placeholder="Kecamatan" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Kota</label>
                      <div class="col-sm-8">
                        <input type="text" name="fkota" class="form-control" style="text-transform: capitalize;" placeholder="Kota" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nomor KK</label>
                      <div class="col-sm-8">
                        <input type="text" name="fno_kk" maxlength="16" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="Nomor KK" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pendidikan di KK</label>
                      <div class="col-sm-8">
                        <select name="fpend_kk" class="form-control" required>
                          <option value="">-- Pendidikan di KK --</option>
                          <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                          <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                          <option value="D1/SEDERAJAT">D1/SEDERAJAT</option>
                          <option value="D2/SEDERAJAT">D2/SEDERAJAT</option>
                          <option value="D3/SEDERAJAT">D3/SEDERAJAT</option>
                          <option value="D4/SEDERAJAT">D4/SEDERAJAT</option>
                          <option value="S1/SEDERAJAT">S1/SEDERAJAT</option>
                          <option value="S2/SEDERAJAT">S2/SEDERAJAT</option>
                          <option value="S3/SEDERAJAT">S3/SEDERAJAT</option>
                          <option value="-">-</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pendidikan Terakhir</label>
                      <div class="col-sm-8">
                        <select name="fpend_terakhir" class="form-control" required>
                          <option value="">-- Pendidikan Terakhir --</option>
                          <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                          <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                          <option value="D1/SEDERAJAT">D1/SEDERAJAT</option>
                          <option value="D2/SEDERAJAT">D2/SEDERAJAT</option>
                          <option value="D3/SEDERAJAT">D3/SEDERAJAT</option>
                          <option value="D4/SEDERAJAT">D4/SEDERAJAT</option>
                          <option value="S1/SEDERAJAT">S1/SEDERAJAT</option>
                          <option value="S2/SEDERAJAT">S2/SEDERAJAT</option>
                          <option value="S3/SEDERAJAT">S3/SEDERAJAT</option>
                          <option value="-">-</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pendidikan Ditempuh</label>
                      <div class="col-sm-8">
                        <select name="fpend_ditempuh" class="form-control" required>
                          <option value="">-- Pendidikan Ditempuh Sekarang --</option>
                          <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                          <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                          <option value="D1/SEDERAJAT">D1/SEDERAJAT</option>
                          <option value="D2/SEDERAJAT">D2/SEDERAJAT</option>
                          <option value="D3/SEDERAJAT">D3/SEDERAJAT</option>
                          <option value="D4/SEDERAJAT">D4/SEDERAJAT</option>
                          <option value="S1/SEDERAJAT">S1/SEDERAJAT</option>
                          <option value="S2/SEDERAJAT">S2/SEDERAJAT</option>
                          <option value="S3/SEDERAJAT">S3/SEDERAJAT</option>
                          <option value="-">-</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pekerjaan</label>
                      <div class="col-sm-8">
                        <input type="text" name="fpekerjaan" class="form-control" style="text-transform: capitalize;" placeholder="Pekerjaan" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Status Perkawinan</label>
                      <div class="col-sm-8">
                        <select name="fstatus_perkawinan" class="form-control" required>
                          <option value="">-- Status Perkawinan --</option>
                          <option value="Belum Menikah">Belum Menikah</option>
                          <option value="Menikah">Menikah</option>
                          <option value="Cerai">Cerai</option>
                          <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Status Dlm Keluarga</label>
                      <div class="col-sm-8">
                        <select name="fstatus_dlm_keluarga" class="form-control" required>
                          <option value="">-- Status Dlm Keluarga --</option>
                          <option value="Ayah">Ayah</option>
                          <option value="Ibu">Ibu</option>
                          <option value="Anak">Anak</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Kewarganegaraan</label>
                      <div class="col-sm-8">
                        <select name="fkewarganegaraan" class="form-control" required>
                          <option value="">-- Kewarganegaraan --</option>
                          <option value="WNI">WNI</option>
                          <option value="WNA">WNA</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnama_ayah" class="form-control" style="text-transform: capitalize;" placeholder="Nama Ayah" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Ibu</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnama_ibu" class="form-control" style="text-transform: capitalize;" placeholder="Nama Ibu" required>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer pull-right">
                    <input type="reset" class="btn btn-default" value="Batal">
                    <input type="submit" name="submit" class="btn btn-info" value="Submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="box-footer">
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php 
  include ('../part/footer.php');
?>