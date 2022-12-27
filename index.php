<?php 
date_default_timezone_get("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Form Registrasi</title>
</head>
<body>
    <form action="proses.php" method="post"></form>
    <label for="">Nama</label>
    <input type="text" name="nama" autocomplete = "off"> <br>
    <label for="">Umur</label>
    <input type="text" name="umur" autocomplete = "off"> <br>
    <label for="">Email</label>
    <input type="email" name="email" autocomplete = "off"> <br>
    <label for="">Jenis Kelamin</label>
    <input type="radio" name="jeniskelamin" value="Pria">Pria
    <input type="radio" name="jeniskelamin" value="Wanita">Wanita <br>
    <label for="">Agama</label>
    <select name="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
        <option value="Konghucu">Konghucu</option>
    </select> <br>
    <label for="">Komentar</label> <br>
    <textarea name="komentar" id="" cols="80" rows="8"></textarea> <br>
    <button type="submit" name="submit" value = <?php echo date("h:i:sa"); ?>>Submit</button>
</body>
</html>