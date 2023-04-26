<?php
    $bangun_datar = [
        ["persegi" => "persegi.jpg"],
        ["persegi_panjang" => "persegi panjang.jpg"],
        ["trapesium" => "trapesium.jpg"],
        ["segitiga" => "segitiga.jpg"],
        ["layang_layang" => "layang-layang.png"]
        ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Datar</title>
</head>
<body>
    
    <?php
    foreach($bangun_datar as $bd) {?>
        <img src="<?php echo "$bd[persegi]"?>" alt="" width="150px">
        <img src="<?php echo "$bd[persegi_panjang]"?>" alt="" width="200px">
        <img src="<?php echo "$bd[trapesium]"?>" alt="" width="200px">
        <img src="<?php echo "$bd[segitiga]"?>" alt="" width="200px">
        <img src="<?php echo "$bd[layang_layang]"?>" alt="" width="150px">
       
    <?php }?>

    <br>

    <?php  
    //luas persegi
    $sisi = 5;
    $luas_persegi= $sisi * $sisi;
    echo "luas bangun datar persegi adalah $luas_persegi cm";

    echo "<br>";

    //luas persegi panjang 
    $panjang = 65;
    $lebar =30;
    $luas_persegipanjang = $panjang * $lebar;
    echo "luas bangun datar persegi panjang adalah $luas_persegipanjang cm";

    echo "<br>";

    //luas trapesium
    $a=28;
    $b=48;
    $tinggi=10;
    $luas_trapesium= 1/2 * ($a+$b) * $tinggi;
    echo "luas bangun datar trapesium adalah $luas_trapesium cm";

    echo "<br>";

    //luas segitiga sama kaki
    $alas = 6;
    $tinggi_segitiga=4;
    $luas_segitiga= 1/2 * $alas * $tinggi_segitiga;
    echo "luas bangun datar segitiga adalah $luas_segitiga cm";

    echo "<br>";

    //luas layang - layang
    $d1 = 24;
    $d2 = 40;
    $luas_layanglayang= 1/2 * $d1 * $d2;
    echo "luas bangun datar segitiga adalah $luas_layanglayang cm";
    ?> 

</body>
</html>