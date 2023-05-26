
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data Buku</title>

    <link rel="stylesheet" href="tambah.css">
</head>
<body style="background-color:blue;">
    <div class="container">
            <div class="form" style="margin: 3rem 0 0 30rem;">
                <h2>Ubah Data Buku</h2>

            <div class="wrapper">
                <div class="card">
                    <?php 
                        include_once("db.php");

                        $isbn = $_GET["isbn"];

                        $result = mysqli_query($conn, "SELECT * FROM buku WHERE `isbn` = '$isbn' ");
                        
                        while ($data= mysqli_fetch_array($result)) {

                            $isbn = $data["isbn"];
                            $judul = $data["judul"];
                            $tahun = $data["tahun"];
                            $id_penerbit = $data["id_penerbit"];
                            $id_pengarang = $data["id_pengarang"];
                            $id_kategori = $data["id_kategori"];
                            $id_jenisBuku = $data["id_jenisBuku"];
                            $stok = $data["stok"];
                            $harga_jual = $data["harga_jual"];;
                        
                    ?>

                    <form id="form" action="proses edit.php" method="post" class="formhs" onsubmit="validasi()">
                        <div class="input-control">
                            <label for="isbn" >ISBN :</label>
                            <input type="text" name="isbn" id="isbn" required value="<?php echo $data["isbn"] ?>">
                            
                        </div>
                        <div class="input-control">
                            <label for="judul">Judul  : </label>
                            <input type="text" name="judul" id="judul" required value="<?php echo $data["judul"] ?>">
                            
                        </div>
                        <div class="input-control">
                            <label for="tahun">Tahun  : </label>
                            <input type="text" name="tahun" id="tahun" required value="<?php echo $data["tahun"] ?>">
                            
                        </div>
                        <div class="input-control">
                            <label for="penerbit">Penerbit   : </label>
                            <input type="text" name="id_penerbit" id="penerbit" required value="<?php echo $data["id_penerbit"] ?>">
                        </div>                 
                        <div class="input-control">
                            <label for="pengarang">Pengarang  : </label>
                            <input type="text" name="id_pengarang" id="pengarang" required value="<?php echo $data["id_pengarang"] ?>">
                            
                        </div>
                        <div class="input-control">
                            <label for="kategori">Kategori   : </label>
                            <input type="text" name="id_kategori" id="kategori" required value="<?php echo $data["id_kategori"] ?>">
                            
                        </div>
                        <div class="input-control">
                            <label for="jenis_buku">Jenis Buku  : </label>
                            <input type="text" name="id_jenisBuku" id="jenis_buku" required value="<?php echo $data["id_jenisBuku"] ?>">
                            
                        </div>
                        <div class="input-control">
                            <label for="stok">Stok   : </label>
                            <input type="text" name="stok" id="stok" required value="<?php echo $data["stok"]?>">
                        </div>                 
                        <div class="input-control">
                            <label for="harga_jual">Harga Jual   : </label>
                            <input type="text" name="harga_jual" id="harga_jual" required value="<?php echo $data["harga_jual"]?>">
                        </div>                 
                        <button type="submit" name="submit" class="submit" style="margin-left:5rem;">Submit</button>
                    </form>
                    <?php  } ?>
                    </div>
                </div>
            </div>
            
        </div>
        
</body>
</html>