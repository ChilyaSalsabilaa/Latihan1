<?php
if($_POST){
    $id_pegawai=$_POST['id_pegawai'];
    $nik_pegawai=$_POST['nik_pegawai'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_tlp=$_POST['no_tlp'];
    $id_jabatan=$_POST['id_jabatan'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update tabel_pegawai set nik_pegawai='".$nik_pegawai."', nama='".$nama."' , alamat='".$alamat."' , jenis_kelamin='".$jenis_kelamin."' ,  no_tlp='".$no_tlp."' ,  id_jabatan='".$id_jabatan."', username='".$username."' where id_pegawai = '".$id_pegawai."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update tabel_pegawai set nik_pegawai='".$nik_pegawai."', nama='".$nama."' , alamat='".$alamat."' , jenis_kelamin='".$jenis_kelamin."' , no_tlp='".$no_tlp."' , id_jabatan='".$id_jabatan."', username='".$username."', password='".md5($password)."' where id_pegawai = '".$id_pegawai."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
            }
        }
        
    } 
}
?>
