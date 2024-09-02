<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <title>tambah jabatan</title>
</head>
<body>
    <h3>Tambah jabatan</h3>
    <form action="proses_tambah_jabatan.php" method="post">
        Nama Jabatan :
        <input type="text" name="nama_jabatan" value="" class="form-control">

        Gaji Pokok : 
        <input type="text" name="gaji_pokok" value="" class="form-control">

        Tunjangan : 
        <input type="text" name="tunjangan" value="" class="form-control">
        
        <input type="submit" name="simpan" value="Tambah Jabatan" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>