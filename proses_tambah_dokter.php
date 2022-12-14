<?php
if($_POST){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $id_depart=$_POST['id_depart'];
    $alamat=$_POST['alamat'];
    $tanggal=$_POST['tanggal'];
    
    if(empty($id)){
        echo "<script>alert('ID tidak boleh kosong');location.href='tambah_dokter.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into dokter (id_dokter, id_departemen, nama, alamat, tgl_lahir) value ('".$id."','".$id_depart."','".$nama."','".$alamat."','".$tanggal."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan dokter');location.href='tambah_dokter.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan dokter');location.href='tambah_dokter.php';</script>";
        }
    }
}
?>
