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
    // menampilkan looping bintang dengan perulangan for

    $bintang = 9; //variabel bintang dengan nilai sebanyak 9

    for ($i = 1 ; $i<=$bintang; $i++) { //perulangan baris untuk looping pertama
    /*variabel i mempunyai nilai untuk diinisialisasi yang dimulai dari 1,
    kemudian dengan kondisi dimana i tidak kurang lebih dari nilai bintang yaitu 9,
    setelah itu menggunakan iterasi ++ karena apabila niali i belum sesuai dengan nilai i
    akan bertambah sesuai dengan kondisi yang ada*/

        for($j = $bintang ; $j>=$i; $j--){ //perulangan kolom untuk looping kedua
        /* apabila keadaan diatas sudah sesuai dengan kondisinya,
        dimana j >= nilai i, maka looping ini akan dijalankan.
        namun, apabila belum sesuai maka tidak akan mencetak (*) */

            echo "*"; //apabila kedua kondisi looping sesuai, maka * akan mencetak sesuai nilainya
        }

        echo "<br>"; //apabila hanya 1 kondisi looping yang sesuai, maka akan mencetak baris baru ini
        // dan apabila kedua kondisi sesuai, maka akan mencetak juga baris baru untuk loopingan berikutnya
    }
    ?>
</body>
</html>