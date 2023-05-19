<?php 
    require("db.php");

    $query = mysqli_query($conn, 'SELECT * FROM customer');


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">

    <!-- Data Table -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

</head>
<body>
    <div>
        <div class="navbar">
            <nav class="navbar navbar-expand-lg bg-body-primary"  style="background-color: #e3f2fd;" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Daftar Customer</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin: 0 0 0 800px">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <button type="submit" name="Login" style=" margin-left: 15rem;
                                padding: 5px 10px 5px 10px">Login</button>
                            </li>
                            <li class="nav-item">
                                <button type="submit" name="Login" style=" margin-left:0.5rem;
                                padding: 0.3rem">Sign Up</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="tambahdata">
            <button type="submit" name="tambah" style="margin-left: 0.8rem;">
                <a href="tambah.php">Tambah Data Mahasiswa</a>
            </button>
        </div>

        <div class="tabel" style="margin-top:10px;">
            <table id="tabel" class="table table-striped" border="1">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Aksi</th>
                </thead>
                <?php if(mysqli_num_rows($query) > 0) {?>
                <?php 
                    $no = 1;
                    while ($data= mysqli_fetch_array($query)) {      
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no?></td>
                        <td><?php echo $data["first_name"] . " " .  $data["last_name"]?></td>
                        <td><?php echo $data["email"]?></td>
                        <td><?php echo $data["phone"]?></td>
                        <td><?php echo $data["address"]?></td>
                        <td>
                            <a href="edit copy.php?id=<?php echo $data["id"]?>">Update</a> |
                            <a href="hapus.php?id=<?php echo $data["id"]?>">Hapus</a>
                        </td>            
                    </tr>
                </tbody>
                <?php $no++; }?>
                <?php } ?>
            </table>
        </div>
    </div>

    <!-- Data table -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#tabel").DataTable();

        });
    </script>
    
</body>
</html>