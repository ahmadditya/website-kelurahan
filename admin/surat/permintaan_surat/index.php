<?php
include('../part/akses.php');
include('../part/header.php');
?>

<?php
include('../part/navbar.php');
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
                  include('../../../config/koneksi.php');

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
                <i class="ni ni-email-83 text-lg opacity-10" aria-hidden="true"></i>
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
                <i class="ni ni-send text-lg opacity-10" aria-hidden="true"></i>
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
                <p class="text-sm mb-0 text-capitalize font-weight-bold">
                  <?php
                  $tanggal = date('D d F Y');
                  $hari = date('D', strtotime($tanggal));
                  $bulan = date('F', strtotime($tanggal));
                  $hariIndo = array(
                    'Mon' => 'Senin',
                    'Tue' => 'Selasa',
                    'Wed' => 'Rabu',
                    'Thu' => 'Kamis',
                    'Fri' => 'Jumat',
                    'Sat' => 'Sabtu',
                    'Sun' => 'Minggu',
                  );
                  $bulanIndo = array(
                    'January' => 'Januari',
                    'February' => 'Februari',
                    'March' => 'Maret',
                    'April' => 'April',
                    'May' => 'Mei',
                    'June' => 'Juni',
                    'July' => 'Juli',
                    'August' => 'Agustus',
                    'September' => 'September',
                    'October' => 'Oktober',
                    'November' => 'November',
                    'December' => 'Desember'
                  );
                  echo $hariIndo[$hari] . ', ' . date('d ') . $bulanIndo[$bulan] . date(' Y');
                  ?>
                </p>
                <h5 class="font-weight-bolder mb-0">

                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="content-wrapper">
      <section class="content-header">
        <h1>Permintaan Surat</h1>
        <ol class="breadcrumb">
          <li><a href="../../dashboard/"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
          <li class="active">Permintaan Surat</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <br><br>
            <table class="table table-striped table-bordered table-responsive" id="data-table" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th><strong>Tanggal</strong></th>
                  <th><strong>NIK</strong></th>
                  <th><strong>Nama</strong></th>
                  <th><strong>Jenis Surat</strong></th>
                  <th><strong>Status</strong></th>
                  <th><strong>Aksi</strong></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $qTampil = mysqli_query($connect, "SELECT penduduk.nama, surat_keterangan.id_sk, surat_keterangan.no_surat, surat_keterangan.nik, surat_keterangan.jenis_surat, surat_keterangan.status_surat, surat_keterangan.tanggal_surat FROM penduduk LEFT JOIN surat_keterangan ON surat_keterangan.nik = penduduk.nik WHERE surat_keterangan.status_surat='pending' 
                UNION SELECT penduduk.nama, surat_keterangan_berkelakuan_baik.id_skbb, surat_keterangan_berkelakuan_baik.no_surat, surat_keterangan_berkelakuan_baik.nik, surat_keterangan_berkelakuan_baik.jenis_surat, surat_keterangan_berkelakuan_baik.status_surat, surat_keterangan_berkelakuan_baik.tanggal_surat FROM penduduk LEFT JOIN surat_keterangan_berkelakuan_baik ON surat_keterangan_berkelakuan_baik.nik = penduduk.nik WHERE surat_keterangan_berkelakuan_baik.status_surat='pending' 
                UNION SELECT penduduk.nama, surat_keterangan_domisili.id_skd, surat_keterangan_domisili.no_surat, surat_keterangan_domisili.nik, surat_keterangan_domisili.jenis_surat, surat_keterangan_domisili.status_surat, surat_keterangan_domisili.tanggal_surat FROM penduduk LEFT JOIN surat_keterangan_domisili ON surat_keterangan_domisili.nik = penduduk.nik WHERE surat_keterangan_domisili.status_surat='pending' 
                UNION SELECT penduduk.nama, surat_keterangan_kepemilikan_kendaraan_bermotor.id_skkkb, surat_keterangan_kepemilikan_kendaraan_bermotor.no_surat, surat_keterangan_kepemilikan_kendaraan_bermotor.nik, surat_keterangan_kepemilikan_kendaraan_bermotor.jenis_surat, surat_keterangan_kepemilikan_kendaraan_bermotor.status_surat, surat_keterangan_kepemilikan_kendaraan_bermotor.tanggal_surat FROM penduduk LEFT JOIN surat_keterangan_kepemilikan_kendaraan_bermotor ON surat_keterangan_kepemilikan_kendaraan_bermotor.nik = penduduk.nik WHERE surat_keterangan_kepemilikan_kendaraan_bermotor.status_surat='pending'
                UNION SELECT penduduk.nama, surat_keterangan_perhiasan.id_skp, surat_keterangan_perhiasan.no_surat, surat_keterangan_perhiasan.nik, surat_keterangan_perhiasan.jenis_surat, surat_keterangan_perhiasan.status_surat, surat_keterangan_perhiasan.tanggal_surat FROM penduduk LEFT JOIN surat_keterangan_perhiasan ON surat_keterangan_perhiasan.nik = penduduk.nik WHERE surat_keterangan_perhiasan.status_surat='pending' 
                UNION SELECT penduduk.nama, surat_keterangan_usaha.id_sku, surat_keterangan_usaha.no_surat, surat_keterangan_usaha.nik, surat_keterangan_usaha.jenis_surat, surat_keterangan_usaha.status_surat, surat_keterangan_usaha.tanggal_surat FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.status_surat='pending'
                UNION SELECT penduduk.nama, surat_lapor_hajatan.id_slh, surat_lapor_hajatan.no_surat, surat_lapor_hajatan.nik, surat_lapor_hajatan.jenis_surat, surat_lapor_hajatan.status_surat, surat_lapor_hajatan.tanggal_surat FROM penduduk LEFT JOIN surat_lapor_hajatan ON surat_lapor_hajatan.nik = penduduk.nik WHERE surat_lapor_hajatan.status_surat='pending' 
                UNION SELECT penduduk.nama, surat_pengantar_skck.id_sps, surat_pengantar_skck.no_surat, surat_pengantar_skck.nik, surat_pengantar_skck.jenis_surat, surat_pengantar_skck.status_surat, surat_pengantar_skck.tanggal_surat FROM penduduk LEFT JOIN surat_pengantar_skck ON surat_pengantar_skck.nik = penduduk.nik WHERE surat_pengantar_skck.status_surat='pending'");
                if ($qTampil->num_rows > 0) {
                  foreach ($qTampil as $row) {
                ?>
                    <tr>
                      <?php
                      $tgl_lhr = date($row['tanggal_surat']);
                      $tgl = date('d ', strtotime($tgl_lhr));
                      $bln = date('F', strtotime($tgl_lhr));
                      $thn = date(' Y', strtotime($tgl_lhr));
                      $blnIndo = array(
                        'January' => 'Januari',
                        'February' => 'Februari',
                        'March' => 'Maret',
                        'April' => 'April',
                        'May' => 'Mei',
                        'June' => 'Juni',
                        'July' => 'Juli',
                        'August' => 'Agustus',
                        'September' => 'September',
                        'October' => 'Oktober',
                        'November' => 'November',
                        'December' => 'Desember'
                      );
                      ?>
                      <td><?php echo $tgl . $blnIndo[$bln] . $thn; ?></td>
                      <td><?php echo $row['nik']; ?></td>
                      <td style="text-transform: capitalize;"><?php echo $row['nama']; ?></td>
                      <td><?php echo $row['jenis_surat']; ?></td>
                      <td><a class="btn btn-danger btn-sm" href='#'><i class="fa fa-spinner"></i><b> <?php echo $row['status_surat']; ?></b></a></td>
                      <td>
                        <?php
                        if ($row['jenis_surat'] == "Surat Keterangan") {
                        ?>
                          <a class="btn btn-success btn-sm" href='konfirmasi/surat_keterangan/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"></i><b> KONFIRMASI</b></a>
                        <?php
                        } else if ($row['jenis_surat'] == "Surat Keterangan Berkelakuan Baik") {
                        ?>
                          <a class="btn btn-success btn-sm" href='konfirmasi/surat_keterangan_berkelakuan_baik/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"></i><b> KONFIRMASI</b></a>
                        <?php
                        } else if ($row['jenis_surat'] == "Surat Keterangan Domisili") {
                        ?>
                          <a class="btn btn-success btn-sm" href='konfirmasi/surat_keterangan_domisili/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"></i><b> KONFIRMASI</b></a>
                        <?php
                        } else if ($row['jenis_surat'] == "Surat Keterangan Kepemilikan Kendaraan Bermotor") {
                        ?>
                          <a class="btn btn-success btn-sm" href='konfirmasi/surat_keterangan_kepemilikan_kendaraan_bermotor/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"></i><b> KONFIRMASI</b></a>
                        <?php
                        } else if ($row['jenis_surat'] == "Surat Keterangan Perhiasan") {
                        ?>
                          <a class="btn btn-success btn-sm" href='konfirmasi/surat_keterangan_perhiasan/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"></i><b> KONFIRMASI</b></a>
                        <?php
                        } else if ($row['jenis_surat'] == "Surat Keterangan Usaha") {
                        ?>
                          <a class="btn btn-success btn-sm" href='konfirmasi/surat_keterangan_usaha/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"></i><b> KONFIRMASI</b></a>
                        <?php
                        } else if ($row['jenis_surat'] == "Surat Lapor Hajatan") {
                        ?>
                          <a class="btn btn-success btn-sm" href='konfirmasi/surat_lapor_hajatan/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"></i><b> KONFIRMASI</b></a>
                        <?php
                        } else if ($row['jenis_surat'] == "Surat Pengantar SKCK") {
                        ?>
                          <a class="btn btn-success btn-sm" href='konfirmasi/surat_pengantar_skck/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"></i><b> KONFIRMASI</b></a>
                        <?php
                        }
                        ?>
                      </td>
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <?php
      include('../part/footer.php');
      ?>