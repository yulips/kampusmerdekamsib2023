<?php 
    require("db.php");

    $query = mysqli_query($conn, 'SELECT id_kategori, judul.buku, kategori  FROM buku JOIN kategori ON buku.isbn = kategori.isbn');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel Customer</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" 
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" 
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" 
    crossorigin="anonymous"></script>

</head>
<body>
    <div class="tabel">
        <table class="table table-striped" border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>No</th>
                <th>ID kategori</th>
                <th>Judul</th>
                <th>Kategori</th>
            </tr>
            <?php if(mysqli_num_rows($query) > 0) {
                //mengetahui jumlah baris dalam tabel ?> 
            <?php 
                $no = 1;
                while ($data= mysqli_fetch_array($query)) {
                //menampilkan tabel 
                    
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $data["id_kategori"]?></td>
                <td><?php echo $data["judul"]?></td>
                <td><?php echo $data["kategori"]?></td>
            </tr>
            <?php $no++; }?>
            <?php 
                }
            ?>
        </table>
    </div>

    
</body>
</html>