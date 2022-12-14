<?php 
    include "header.php";
?>

<!DOCTYPE html>
    <html>

    <head>
        <title>Aplikasi Login Sederhana</title>
    </head>

    <body>
        <center>
    <h3>ADMINISTRASI DATA PASIEN DAN TINDAKAN</h3>
    </center>
    <center>
        <?php 
    include "koneksi.php";
    $qry_psn = mysqli_query($conn, "SELECT * FROM pasien INNER JOIN tindakan ON pasien.nama_pasien = tindakan.nama_pasien INNER JOIN dokter ON dokter.id_dokter = tindakan.id_dokter WHERE no_reg = '".$_GET['no_reg']."' ");
      while ($dt_psn = mysqli_fetch_array($qry_psn)) {
    ?>

    <h3>VIEW DATA <?=$dt_psn['no_rm']?></h3> <h3><?=$dt_psn['nama_pasien']?></h3>
    </center>
    <center>
    <p>Nomor Rekam Medis : <?=$dt_psn['no_rm']?></p>
    <p>Nama Pasien       :<?=$dt_psn['nama_pasien']?></p>
    <p>Alamat:<?=$dt_psn['alamat']?></p>
    <p>Jenis Kelamin : <?=$dt_psn['jenis_kelamin']?></p>
    <p>Tanggal Lahir : <?=$dt_psn['tanggal_lahir']?></p>
    <p>Dokter : <?=$dt_psn['nama']?></p>
    <p>Departemen : <?=$dt_psn['id_departemen']?></p>
    <p>Diagnosa : <?=$dt_psn['diagnosa']?></p>
    <p>Nomor Ruangan : <?=$dt_psn['no_ruang']?></p>
    <p>Jam : <?=$dt_psn['jam']?></p>
    <p>Tindakan : <?=$dt_psn['tindakan_kedokteran']?></p>
    <p>Keterangan : <?=$dt_psn['keterangan']?></p>
    <a href="home.php" style="text-decoration:none; font-weight:bold; color:green">Kembali</a>
    </center>
    <?php   
      }
    ?>
    </body>

    </html>