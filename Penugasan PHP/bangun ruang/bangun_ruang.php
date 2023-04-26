<?php
    $bangun_ruang= [
        ["balok" => "balok.png"],
        ["kerucut" => "kerucut.jpg"],
        ["prisma" => "prisma segitiga.jpg"],
        ["tabung" => "tabung.png"]
        ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Ruang</title>
</head>
<body>
    
    <?php
    foreach($bangun_ruang as $br) {?>
        <img src="<?php echo "$br[balok]"?>" alt="" width="180px">
        <img src="<?php echo "$br[kerucut]"?>" alt="" width="150px">
        <img src="<?php echo "$br[prisma]"?>" alt="" width="150px">
        <img src="<?php echo "$br[tabung]"?>" alt="" width="150px">
       
    <?php }?>

    <br>

    <?php  
    //volume balok
    $panjang = 10;
    $lebar = 6;
    $tinggi = 5;
    $volume_balok= $panjang * $lebar * $tinggi;
    echo "volume balok adalah $volume_balok cm^3" ;

    echo "<br>";

    //volume kerucut
    $r= 7;
    $t = 24;
    $volume_kerucut= 1/3 * pi() * pow($r, 2) * $t;
    echo "volume kerucut adalah $volume_kerucut cm^3";

    echo "<br>";

    //volume prisma segitiga
    $alas= 35;
    $tinggi = 36;
    $volume_prismasegitiga= 1/2 * $alas * $tinggi;
    echo "volume prisma segitiga adalah $volume_prismasegitiga cm^3";

    echo "<br>";

    //volume tabung
    $r= 35;
    $t = 36;
    $volume_tabung= pi() * pow($r, 2) * $t;
    echo "volume tabung adalah $volume_tabung cm^3";

    ?> 

</body>
</html>