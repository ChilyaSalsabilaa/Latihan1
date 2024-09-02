<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <title>tambah pegawai</title>
</head>
<body>
    <center> <h2>Tambah Pegawai</h2> </center> <br>
    <form action="proses_tambah_pegawai.php" method="post">
        <b>NIK Pegawai :</b>
        <input type="text" name="nik_pegawai" value="" class="form-control"> <br>
        
        <b>Nama :</b> 
        <input type="text" name="nama" value="" class="form-control"> <br>

        <b>Alamat :</b> 
        <textarea name="alamat" class="form-control" rows="4"></textarea> <br>
        
        <b>Jenis Kelamin :</b>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select> <br>

        <b>Nomor Telpon :</b> 
        <input type="text" name="no_tlp" value="" class="form-control"> <br>
        
        <b>Jabatan :</b> 
        <select name="id_jabatan" class="form-control"> <br>
            
            <?php 

        include "koneksi.php";
        $qry_pegawai=mysqli_query($conn,"select * from tabel_pegawai");
        while($data_pegawai=mysqli_fetch_array($qry_pegawai)){
        echo '<option value="'.$data_pegawai['id_jabatan'].'">'.$data_pegawai['jabatan'].'</option>';    
        }
        ?>
        </select>

        <i>Username :</i>
        <input type="text" name="username" value="" class="form-control">
        
        <i>Password :</i> 
        <input type="password" name="password" value="" class="form-control">
        
        <input type="submit" name="simpan" value="Tambah Pegawai" class="btn btn-primary">    
    </form>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>