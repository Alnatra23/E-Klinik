<?php
    include "header.php";
?>
<!DOCTYPE html>
    <html>

    <head>
        <title>Aplikasi Login Sederhana</title>
        <link rel="stylesheet" href="style_home.css">
    </head>

    <body>
        <center>
        <h4 class="judul">ADMINISTRASI DATA PASIEN DAN TINDAKAN</h4>
        </center>
    <table class="tcenter" width="1150px">

<thead>
    <tr>
        <th>No RM</th>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>  
        <th width="80px">Tanggal Lahir</th>
        <th>ID Dokter</th>
        <th>ID Departemen</th>
        <th>Diagnosa</th>
        <th>Nomor Ruangan</th>
        <th width="400px">Aksi</th>
    </tr>
</thead>

<tbody>
    <?php
    include "koneksi.php";
    $qry_psn = mysqli_query($conn, "SELECT * FROM pasien INNER JOIN tindakan ON pasien.nama_pasien = tindakan.nama_pasien INNER JOIN dokter ON dokter.id_dokter = tindakan.id_dokter;");

    while ($dt_psn = mysqli_fetch_array($qry_psn)) {
    ?>
        <tr>

            <td><?= $dt_psn['no_rm'] ?></td>
            <td><?= $dt_psn['nama_pasien'] ?></td>
            <td><?= $dt_psn['alamat'] ?></td>
            <td><?= $dt_psn['jenis_kelamin'] ?></td>
            <td><?= $dt_psn['tanggal_lahir'] ?></td>
            <td><?= $dt_psn['id_dokter'] ?></td>
            <td><?= $dt_psn['id_departemen'] ?></td>
            <td><?= $dt_psn['diagnosa'] ?></td>
            <td><?= $dt_psn['no_ruang'] ?></td>
            
            <td>
            <a href="detail.php?no_reg=<?= $dt_psn['no_reg'] ?>" class="btn-green">View</a> 
            <a href="ubah_pasien.php?no_rm=<?= $dt_psn['no_rm'] ?>" class="btn-yellow">Edit</a> 
            <a href="hapus.php?no_rm=<?= $dt_psn['no_rm'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn-red">Hapus</a>
            </td>

        
        </tr>
        <?php
    }
    ?>
</tbody>
<a href="tambah_pasien.php" class="btn-blue">Tambah Pasien</a>
<a href="tambah_tindakan.php" class="btn-blue">Tambah Tindakan</a>  
</table>
    </body>

    </html>