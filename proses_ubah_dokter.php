<?php
if($_POST){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tanggal=$_POST['tanggal'];
    $idd=$_POST['id_depart'];
    if(empty($nama)){
        echo "<script>alert('nama dokter tidak boleh kosong');location.href='ubah_dokter.php?id_dokter=".$id."';</script>";

    
    } else {
        include "koneksi.php";
            $update=mysqli_query($conn,"update dokter set id_dokter='".$id."', nama='".$nama."', tgl_lahir='".$tanggal."', id_departemen='".$idd."' where id_dokter = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update dokter');location.href='home.php';</script>";
            } else {
                echo "<script>alert('Gagal update dokter');location.href='ubah_dokter.php?id_dokter".$id."';</script>";
            }
        
    } 
}
?>
