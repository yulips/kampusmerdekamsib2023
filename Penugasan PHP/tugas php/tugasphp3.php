<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>
</head>
<body>
    <?php 
    // menampilkan looping angka
    $angka = 8;
    for ($i=0; $i<=$angka; $i++) {
        for ($j=0; $j<=$i; $j++) {
            echo "$j";
        }
        
        echo "<br>";
    }
    ?>
</body>
</html>