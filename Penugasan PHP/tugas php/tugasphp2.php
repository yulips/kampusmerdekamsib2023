<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
</head>
<body>
    <?php 
    // menampilkan looping bintang paskal 
    $bintang = 9;
    for ($i = 1 ; $i<=$bintang; $i++) { 
        for($j = $bintang ; $j>=$i; $j--){
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>
</html>