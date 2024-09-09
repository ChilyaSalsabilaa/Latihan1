<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="tambah.css">
    <title>TAMBAH PEGAWAI</title>
</head>
<body>
    </b><h3><center><b><u>TAMBAH PEGAWAI</u></b></center></h3> <br>
    <form action="proses_tambah_pegawai.php" method="post">
        <b>NIK Pegawai :</b>
        <input type="text" name="nik_pegawai" value="" class="form-control1"> <br>

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

        <b>No Telpon :</b> 
        <input type="text" name="no_tlp" value="" class="form-control"> <br>
        
        <b>Jabatan :</b>
        <select name="id_jabatan" class="form-control">
            <option></option> <br>
            
    <?php 
            include "koneksi.php";
            $qry_jabatan=mysqli_query($conn,"select * from tabel_jabatan");
            while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                echo '<option value="'.$data_jabatan['id_jabatan'].'">'.$data_jabatan['nama_jabatan'].'</option>';    
            }
    ?>
        </select>
        <b>Username :</b> 
        <input type="text" name="username" value="" class="form-control"> <br>
        <b>Password :</b> 
        <input type="password" name="password" value="" class="form-control"> <br>
        <input type="submit" name="simpan" value="Tambah Pegawai" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
