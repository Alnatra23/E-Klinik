<?php
    include "header.php";
?>
<!DOCTYPE html>
    <html>

    <head>
        <title>Aplikasi Login Sederhana</title>
        <link rel="stylesheet" href="style_dokter.css">
    </head>

    <body>
    <table class="tcenter" width="1150px">

<thead>
    <tr>
        <th>ID Dokter</th>
        <th>ID Departemen</th>
        <th>Nama Dokter</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>

        <th>Aksi</th>
    </tr>
</thead>

<tbody>
    <?php
    include "koneksi.php";
    $qry_dt = mysqli_query($conn, "SELECT * FROM dokter");

    while ($dt_dt = mysqli_fetch_array($qry_dt)) {
    ?>
        <tr>

            <td><?= $dt_dt['id_dokter'] ?></td>
            <td><?= $dt_dt['id_departemen'] ?></td>
            <td><?= $dt_dt['nama'] ?></td>
            <td><?= $dt_dt['alamat'] ?></td>
            <td><?= $dt_dt['tgl_lahir'] ?></td>
            
            <td>
            <a href="ubah_dokter.php?id_dokter=<?= $dt_dt['id_dokter'] ?>" class="btn-yellow">Edit</a> 
            <a href="hapusdok.php?id_dokter=<?= $dt_dt['id_dokter'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn-red">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
</tbody>

</table>

    </body>

    </html>