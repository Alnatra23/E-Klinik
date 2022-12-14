<?php
if($_POST){
    $no=$_POST['no'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $tanggal=$_POST['tanggal'];
    $pekerjaan=$_POST['pekerjaan'];
    
    if(empty($no)){
        echo "<script>alert('Nomor Rekam Medis tidak boleh kosong');location.href='tambah_pasien.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pasien (no_rm, nama_pasien, alamat, tanggal_lahir, jenis_kelamin, pekerjaan) value ('".$no."','".$nama."','".$alamat."','".$tanggal."','".$gender."','".$pekerjaan."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Pasien');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pasien');location.href='tambah_pasien.php';</script>";
        }
    }
}
?>
