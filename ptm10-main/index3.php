<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     echo "<h2>Looping for dari dalam php</h2>";
     for ($i = 1; $i <= 10; $i += 1){
        echo "Ini perulangan ke $i";
        echo "<br>";
     }

     echo "<h2>Looping while</h2>";
     $i = 1;
     while ($i < 10){
        echo "Ini perulangan While ke $i";
        echo "<br>";
        $i += 1;
     }
     ?>
</body>
</html>