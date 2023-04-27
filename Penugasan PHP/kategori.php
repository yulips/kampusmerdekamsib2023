<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori BMI</title>
    
</head>
<body>
    <h2> Menghitung Nilai BMI </h2>

    <div class="form">
        <form method="post" action=""> 
            <p>Nama : <input type="text" name="nama"> </p>
            <p>Tinggi Badan : <input type="text" name="tinggi"> cm</p>
            <p>Berat Badan : <input type="text" name="berat"> kg </p>
            <input type="submit" name="submit" value="Submit" /> 
        </form> 
    </div>

    <?php 
    if(isset($_POST['submit'])) {
        $nama=$_POST['nama'];
        $tinggi=$_POST['tinggi'];
        $berat=$_POST['berat'];

        $bmi = $berat / (($tinggi * $tinggi)/10000);

        echo "<br>";
        echo "Halo $nama. Nilai BMI Anda adalah $bmi, anda termasuk "; 

            if (($bmi>=25.0) && ($bmi>=30.0)) {
                echo "Berat Badan dengan kategori Gemuk"; 
            }
            elseif(($bmi>=18.5) && ($bmi<25.0) ){
                echo "Berat Badan dengan kategori Sedang";
            }
            else {
            echo "Berat Badan dengan kategori Kurus"; 
            }

        echo "<br>";
        echo "Kategori BMI : <br> Kurus = lebih kecil dari 18.5 <br> Sedang = 18.5 - 22.9 <br> Gemuk = 23.0 - 24.9";
        
    }
?>
</body>
</html>