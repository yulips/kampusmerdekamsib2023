<?php 
    require("db.php");

    $query = mysqli_query($conn, 'SELECT * FROM buku');


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
    <table id="tabel" class="table table-striped" border="1" style="width:50%;">
                <thead>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Judul</th>
                    <th>ISBN</th>
                    <th>Tahun</th>
                    <th>Penerbit</th>
                    <th>Pengarang</th>
                    <th>Kategori</th>
                    <th>Jenis Buku</th>
                    <th>Stok</th>
                    <th>Harga Jual</th>
                </thead>
                <?php if(mysqli_num_rows($query) > 0) {?>
                <?php 
                    $no = 1;
                    while ($data= mysqli_fetch_array($query)) {      
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no?></td>
                        <td>
                            <a href="edit copy.php?isbn=<?php echo $data["isbn"]?>">Update</a>
                            <a href="hapus.php?isbn=<?php echo $data["isbn"]?>">Hapus</a>
                        </td>
                        <td><?php echo $data["judul"]?></td>
                        <td><?php echo $data["isbn"]?></td>
                        <td><?php echo $data["tahun"]?></td>
                        <td><?php echo $data["id_penerbit"]?></td>
                        <td><?php echo $data["id_pengarang"]?></td>
                        <td><?php echo $data["id_kategori"]?></td>
                        <td><?php echo $data["id_jenisBuku"]?></td>
                        <td><?php echo $data["stok"]?></td>
                        <td><?php echo $data["harga_jual"]?></td>
                                   
                    </tr>
                </tbody>
                <?php $no++; }?>
                <?php } ?>
            </table>
        </table>
    </div>

    
</body>
</html>