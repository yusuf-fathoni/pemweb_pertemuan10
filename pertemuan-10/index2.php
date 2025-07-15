<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <label for="role">role : </label>
    <input type="text" name="role">
    <input type="submit" name="submit" value="kirim">
</form>

<?php
if(isset($_POST["submit"])){
    $role = $_POST['role'];
switch ($role) {
    case "admin":
        echo "Akses penuh ke sistem"; 
        break;
    case "dosen":
        echo "Akses data mahasiswa";
        break;
    case "mahasiswa":
        echo "Akses pengisian KRS"; break;
    default:
        echo "Role tidak dikenal";
}

}

?>
</body>
</html>