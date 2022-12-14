<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Dokter</h3>
    <form action="proses_tambah_dokter.php" method="post">
        ID Dokter :
        <input type="text" name="id" value="" class="form-control">
        Nama :
        <input type="text" name="nama" value="" class="form-control">
        Departemen : 
        <select name="id_depart" class="form-control">
            <option></option>
            <option>Mata</option>
            <option>Umum</option>
        </select>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Tanggal Lahir :
        <input type="date" name="tanggal" value="" class="form-control">
                <input type="submit" name="simpan" value="Tambah Pasien" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
