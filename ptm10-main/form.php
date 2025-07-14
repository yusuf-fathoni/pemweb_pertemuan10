<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <label>nama : </label>
        <input type="text" name="nama">
        <br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="laki-laki">laki laki
        <input type="radio" name="gender" value="perempuan">perempuan
        <br><br>
        <label>Hobi</label>
        <input type="checkbox" name="hobi[]" value="membaca">membaca
        <input type="checkbox" name="hobi[]" value="menulis">menulis <br>
        <br>
        <label>Jurusan</label>
        <select name="jurusan">
            <option value="informatika">Informatika</option>
            <option value="sitem informasi">sitem informasi</option>
        </select><br>

        <input type="submit" value="kirim">
    </form>
    <?php
    if (isset($_POST['submit'])){
        $nama = $_POST['$nama'];
        $gender = $_POST['$gender'];
        $hobi = $_POST['$hobi'];
        $jurusan = $_POST['$jurusan'];
    
        echo "Halo, $nama <br>";
        echo "Gender: $gender <br>";
        echo "Hobi: " . implode(", ", $hobi) . "<br>";
        echo "Jurusan: $jurusan";
    }


    ?>
    
</body>
</html>