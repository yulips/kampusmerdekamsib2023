
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Buku</title>

    <!-- CSS -->
    <link rel="stylesheet" href="tambah.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        $("#form").validate ({
          messages: {
            email: {
              required: "E-mail harus diisi",
              email: "Masukkan E-mail yang valid",
            },
          },
          errorPlacement: function (error, element) {
            error.appendTo(element.parent(".input-control"));
          },

          submitHandler: function (form) {
          form.submit();
      }
        });
      });
    </script>

</head>
<body style="background-color:blue;">
    <div class="container">
        <div class="form" style="margin: 2rem 0 0 30rem;">
            <h2 style="color:white;">Tambah Data Buku</h2>

            <div class="wrapper">
                <div class="card">
                    <form id="form" action="proses tambah.php" method="post" class="formhs" enctype="multipart/form-data">
                        <div class="input-control">
                            <label for="isbn" >ISBN :</label>
                            <input type="text" name="isbn" id="isbn" required>
                            
                        </div>
                        <div class="input-control">
                            <label for="judul">Judul  : </label>
                            <input type="text" name="judul" id="judul" required>
                            
                        </div>
                        <div class="input-control">
                            <label for="tahun">Tahun  : </label>
                            <input type="text" name="tahun" id="tahun" required>
                            
                        </div>
                        <div class="input-control">
                            <label for="penerbit">Penerbit   : </label>
                            <input type="text" name="id_penerbit" id="penerbit" required>
                        </div>                 
                        <div class="input-control">
                            <label for="pengarang">Pengarang  : </label>
                            <input type="text" name="id_pengarang" id="pengarang" required>
                            
                        </div>
                        <div class="input-control">
                            <label for="kategori">Kategori   : </label>
                            <input type="text" name="id_kategori" id="kategori" required>
                            
                        </div>
                        <div class="input-control">
                            <label for="jenis_buku">Jenis Buku  : </label>
                            <input type="text" name="id_jenisBuku" id="jenis_buku" required>
                            
                        </div>
                        <div class="input-control">
                            <label for="stok">Stok   : </label>
                            <input type="text" name="stok" id="stok" required>
                        </div>                 
                        <div class="input-control">
                            <label for="harga_jual">Harga Jual   : </label>
                            <input type="text" name="harga_jual" id="harga_jual" required>
                        </div>       
                        <div class="input-control">
                            <label for="gambar">Gambar   : </label>
                            <input type="file" name="gambar" id="gambar">
                        </div>        
                        <button type="submit" name="submit" class="submit" style="margin-left:5rem;">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    <script src="script.js"></script>
</body>
</html>