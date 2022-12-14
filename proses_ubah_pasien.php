<?php
if($_POST){
    $no=$_POST['no'];
    $nama=$_POST['nama'];
    $tanggal=$_POST['tanggal'];
    $gender=$_POST['gender'];
    $pekerjaan=$_POST['pekerjaan'];
    if(empty($nama)){
        echo "<script>alert('nama pasien tidak boleh kosong');location.href='ubah_pasien.php?no_rm=".$no."';</script>";

    
    } else {
        include "koneksi.php";
            $update=mysqli_query($conn,"update pasien set no_rm='".$no."', nama_pasien='".$nama."', tanggal_lahir='".$tanggal."', jenis_kelamin='".$gender."', pekerjaan='".$pekerjaan."' where no_rm = '".$no."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pasien');location.href='home.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_pasien.php?no_rm=".$no."';</script>";
            }
        
    } 
}
?>
