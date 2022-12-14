<?php 
    if($_GET['no_rm']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from pasien where no_rm='".$_GET['no_rm']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus Pasien');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus Pasien');location.href='home.php';</script>";
        }
    }
?>
