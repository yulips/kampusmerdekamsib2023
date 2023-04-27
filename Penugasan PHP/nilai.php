<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <form method="post" action=""> 
        <p>Nilai : <input type="text" name="nilai"> </p>
        <input type="submit" name="submit" value="Submit" /> 
    </form> 

    <?php 
    // menghitung nilai kategori 
    if(isset($_POST ["submit"])) {
        $nilai = $_POST["nilai"];

        echo "<br>";
        echo "Halo nilai yang anda inputkan adalah $nilai. Nilai tersebut termasuk dalam kategori  "; 

        switch($nilai) {
            case ($nilai<=100 && $nilai>=90):
                echo "nilai A dengan rentang nilai 90 - 100";
                break;
            case ($nilai<=90 && $nilai>=80):
                echo "nilai B dengan rentang nilai 80 - 90";
                break;
            case ($nilai<=80 && $nilai>=70):
                echo "nilai C dengan rentang nilai 70 - 80";
                break;
            case ($nilai<=70 && $nilai>=0):
                echo "nilai D dengan rentang nilai 0 - 70";
                break;
        }
    
    
    }

    ?>

</body>
</html>