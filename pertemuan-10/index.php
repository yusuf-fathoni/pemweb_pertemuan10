<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>halo saya dari php</p>
<h3>Form Umur</h3>
    <form method="POST">
        <label for="umur">Masukkan umur:</label>
        <input type="number" name="umur" id="umur" required>
        <input type="submit" name="submit" value="Kirim">
    </form>
    <p>"haalo gaes"</p>

    <?php
    if (isset($_POST['submit'])) {
        $umur = $_POST['umur'];


        if ($umur >= 18) {
            echo "<h3>Anda sudah dewasa.</h3>";
        } else {
            echo "<p>Anda masih anak-anak.</p>";
        }
    }
    ?>
</body>
</html>