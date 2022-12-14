<?php
if($_POST){
    $id_dktr=$_POST['id_dokter'];
    $nama=$_POST['nama'];
    $jam=$_POST['jam'];
    $diagnosa=$_POST['diagnosa'];
    $tindakan=$_POST['tindakan'];
    $nor=$_POST['nor'];
    $ket=$_POST['ket'];
    
    if(empty($nama)){
        echo "<script>alert('Nama Pasien tidak boleh kosong');location.href='tambah_tindakan.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into tindakan (id_dokter, nama_pasien, jam, diagnosa, tindakan_kedokteran, no_ruang, keterangan) value ('".$id_dktr."','".$nama."','".$jam."','".$diagnosa."','".$tindakan."','".$nor."','".$ket."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Pasien');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pasien');location.href='tambah_tindakan.php';</script>";
        }
    }
}
?>
