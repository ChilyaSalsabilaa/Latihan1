<?php
if($_POST){
    $nik_pegawai=$_POST['nik_pegawai'];
    $nama=$_POST['nama'];
    if(empty($nik_pegawai)){
        echo "<script>alert('nik pegawai tidak boleh kosong');location.href='tambah_pegawai.php'; </script>";
    } 
    elseif (empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pegawai.php'</script>";
    } 
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into tabel_pegawai (nik_pegawai, nama) value ('".$nik_pegawai."','".$nama."')");
        if ($insert){
            echo "<script>alert('Sukses menambahkan tabel_pegawai');location.href='tambah_pegawai.php';</script>";
        } else {
            echo "<script>alert('gagal menambahkan tabel_pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}