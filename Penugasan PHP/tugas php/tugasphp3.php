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
    $angka = 8;//variabel bintang dengan nilai sebanyak 9

    for ($i=0; $i<=$angka; $i++) { //perulangan looping pertama untuk baris
    /*variabel i mempunyai nilai untuk diinisialisasi yang dimulai dari 0,
    kemudian dengan kondisi dimana i tidak kurang lebih dari nilai angka yaitu 8,
    setelah itu menggunakan iterasi ++ karena apabila niali i belum sesuai dengan nilai i
    akan bertambah sesuai dengan kondisi yang ada*/

        for ($j=0; $j<=$i; $j++) { //perulangan looping kedua untuk kolom
        /* apabila keadaan diatas sudah sesuai dengan kondisinya,
        dimana j <= nilai i, maka looping ini akan dijalankan.
        namun, apabila belum sesuai maka tidak akan mencetak (*) */
            
            echo "$j"; 
            /*apabila kedua kondisi looping sesuai, maka nilai j sesuai yang di inisialisasi dan kondisinya
             akan mencetak sesuai nilainya */
        }
        
        echo "<br>"; //apabila hanya 1 kondisi looping yang sesuai, maka akan mencetak baris baru ini
        // dan apabila kedua kondisi sesuai, maka akan mencetak juga baris baru untuk loopingan berikutnya
    }
    ?>
</body>
</html>