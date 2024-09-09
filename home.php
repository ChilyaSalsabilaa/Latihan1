<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>home page</title>
</head>
<body>
<?php 
    include "header.php";
?>
<h2>Selamat datang <?=$_SESSION['nama']?>! </h2>
<?php
    include "footer.php";
?>  
</body>
</html>

