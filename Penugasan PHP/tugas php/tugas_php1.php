<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
</head>
<body>
    <?php 
    // menampilkan looping perkalian
    for($i = 1; $i<=1; $i++ ){ 
        for($j=1; $j<=10; $j++){
            
            $perkalian = $i * $j;
            echo $i . "x" . $j . "=" . $perkalian;
            
            echo "<br>";
        }
    }
    ?>
</body>
</html>