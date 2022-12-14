<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<?php 
    include "koneksi.php";
    $qry_get_psn=mysqli_query($conn,"select * from pasien where no_rm = '".$_GET['no_rm']."'");
    $dt_psn=mysqli_fetch_array($qry_get_psn);
    ?>
    <h3>Ubah Pasien</h3>
    <form action="proses_ubah_pasien.php" method="post">
        No RM :
        <input type="text" name="no" value="<?=$dt_psn['no_rm']?>" class="form-control">
        Nama Pasien : 
        <input type="text" name="nama" value="<?=$dt_psn['nama_pasien']?>" class="form-control">
        Tanggal Lahir :
        <input type="date" name="tanggal" value="<?=$dt_psn['tanggal_lahir']?>" class="form-control">
        Gender : 
        <select name="gender" class="form-control" value="<?=$dt_psn['jenis_kelamin']?>">
            <option></option>
            <option value="Laki-Laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        Pekerjaan : 
        <input type="text" name="pekerjaan" value="<?=$dt_psn['pekerjaan']?>" class="form-control">
        <input type="submit" name="simpan" value="Ubah Pasien" class="btn btn-primary mt-2">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
