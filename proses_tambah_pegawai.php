<?php
if($_POST){
    $nik_pegawai=$_POST['nik_pegawai'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_tlp=$_POST['no_tlp'];
    $id_jabatan= $_POST['id_jabatan'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into tabel_pegawai (nik_pegawai, nama, alamat, jenis_kelamin, no_tlp,  id_jabatan, username, password) value ('".$nik_pegawai."','".$nama."','".$alamat."','".$jenis_kelamin."','".$no_tlp."','".$id_jabatan."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>
