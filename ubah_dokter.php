<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<?php 
    include "koneksi.php";
    $qry_get_dt=mysqli_query($conn,"select * from dokter where id_dokter = '".$_GET['id_dokter']."'");
    $dt_dt=mysqli_fetch_array($qry_get_dt);
    ?>
    <h3>Ubah Dokter</h3>
    <form action="proses_ubah_dokter.php" method="post">
        ID Dokter :
        <input type="text" name="id" value="<?=$dt_dt['id_dokter']?>" class="form-control">
        Nama Dokter : 
        <input type="text" name="nama" value="<?=$dt_dt['nama']?>" class="form-control">
        Departemen : 
        <select name="id_depart" class="form-control" value="<?=$dt_dt['id_departemen']?>">
            <option></option>
            <option>Mata</option>
            <option>Umum</option>
        </select>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4" value="<?=$dt_dt['alamat']?>"></textarea>
        Tanggal Lahir :
        <input type="date" name="tanggal" value="<?=$dt_dt['tgl_lahir']?>" class="form-control">
        <input type="submit" name="simpan" value="Ubah Dokter" class="btn btn-primary my-2">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
