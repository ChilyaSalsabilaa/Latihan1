<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>UBAH PEGAWAI</title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_pegawai=mysqli_query($conn,"select * from tabel_pegawai where id_pegawai = '".$_GET['id_pegawai']."'");
    $data_pegawai=mysqli_fetch_array($qry_get_pegawai);
    ?>
    <h3>MENGUBAH DATA PEGAWAI</h3>
    <form action="proses_ubah_pegawai.php" method="post">
        <input type="hidden" name="id_pegawai" value="<?=$data_pegawai['id_pegawai']?>">
        NIK Pegawai :
        <input type="text" name="nik_pegawai" value="<?=$data_pegawai['nik_pegawai']?>" class="form-control">
        
        Nama : 
        <input type="text" name="nama" value="<?=$data_pegawai['nama']?>" class="form-control">
        
        Jenis Kelamin : 
        <?php 
        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$data_pegawai['jenis_kelamin']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
        <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>
        
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"><?=$data_pegawai['alamat']?></textarea>
        
        No Telpon : 
        <input type="text" name="no_tlp" value="<?=$data_pegawai['no_tlp']?>" class="form-control">
        
        Jabatan :
        <select name="id_jabatan" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_jabatan=mysqli_query($conn,"select * from tabel_jabatan");
            while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                if($data_jabatan['id_jabatan']==$data_pegawai['id_jabatan']){
                    $selek="selected";
                } else {
                    $selek="";
                }
            echo '<option value="'.$data_jabatan['id_jabatan'].'" '.$selek.'>'.$data_jabatan['nama_jabatan'].'</option>';   
            }
            ?>
        </select>
        Username : 
        <input type="text" name="username" value="<?=$data_pegawai['username']?>" class="form-control">
        
        Password : 
        <input type="password" name="password" value="" class="form-control">

        <input type="submit" name="simpan" value="Ubah Pegawai" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
