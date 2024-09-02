<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ubah Pegawai</title>
</head>
<body>
<?php 
    include "koneksi.php";
    $qry_get_pegawai=mysqli_query($conn,"select * from tabel_pegawai where id_pegawai = '".$_GET['id_pegawai']."'");
    $dt_pegawai=mysqli_fetch_array($qry_get_pegawai);
    ?>

    <h3>Ubah Pegawai</h3>
    <form action="proses_ubah_pegawai.php" method="post">
        <input type="hidden" name="id_pegawai" value= "<?=$dt_pegawai['id_pegawai']?>">
        NIK Pegawai :
    <input type="text" name="nik_pegawai" value=   "<?=$dt_pegawai['nik_pegawai']?>" class="form-control">
        
        Nama : 
    <input type="text" name="nama_pegawai" value="<?=$dt_pegawai['nama_pegawai']?>" class="form-control">
        
        Alamat : 
    <textarea name="alamat" class="form-control" rows="4"><?=$dt_pegawai['alamat']?></textarea>

        Jenis Kelamin : 
        <?php 
        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_pegawai['jenis_kelamin']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>

        
        <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>
        
        Kelas :
        <select name="id_kelas" class="form-control">

        <option></option>
            <?php 
            include "koneksi.php";
            $qry_kelas=mysqli_query($conn,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                if($data_kelas['id_kelas']==$dt_siswa['id_kelas']){
                    $selek="selected";
                } else {
                    $selek="";
                }
        echo '<option value="'.$data_kelas['id_kelas'].'" '.$selek.'>'.$data_kelas['nama_kelas'].'</option>';   
            }
            ?>
        </select>
        Username : 
        <input type="text" name="username" value="<?=$dt_siswa['username']?>" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>