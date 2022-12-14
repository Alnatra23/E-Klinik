<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Tindakan</h3>
    <form action="proses_tambah_tindakan.php" method="post">
        ID Dokter :
        <select name="id_dokter" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_dktr=mysqli_query($conn,"select * from dokter");
            while($data_dktr=mysqli_fetch_array($qry_dktr)){
                echo '<option value="'.$data_dktr['id_dokter'].'">'.$data_dktr['id_dokter'].'</option>';    
            }
            ?>
        </select>
        Nama Pasien :
        <select name="nama" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_psn=mysqli_query($conn,"select * from pasien");
            while($data_psn=mysqli_fetch_array($qry_psn)){
                echo '<option value="'.$data_psn['nama_pasien'].'">'.$data_psn['nama_pasien'].'</option>';    
            }
            ?>
        </select>
        Jam :
        <input type="time" name="jam" value="" class="form-control">
        Diagnosa :
        <input type="text" name="diagnosa" value="" class="form-control">
        Tindakan : 
        <input type="text" name="tindakan" value="" class="form-control">
        Nomor Ruang :
        <input type="number" name="nor" value="" class="form-control">
        Keterangan :
        <textarea name="ket" class="form-control" rows="4"></textarea>
                <input type="submit" name="simpan" value="Tambah Tindakan" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
