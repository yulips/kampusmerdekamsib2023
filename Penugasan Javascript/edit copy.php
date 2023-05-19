
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data Buku</title>

    <link rel="stylesheet" href="tambah.css">
</head>
<body>
    <div class="container">
            <div class="form">
                <h2>Ubah Data Customer</h2>

            <div class="wrapper">
                    <div class="card">
                    <?php 
                    include_once("db.php");

                    $id = $_GET["id"];

                    $result = mysqli_query($conn, "SELECT * FROM customer WHERE id = '$id' ");
                    
                    while ($data= mysqli_fetch_array($result)) {

                        $id = $data["id"];
                        $first_name = $data["first_name"];
                        $last_name = $data["last_name"];
                        $email = $data["email"];
                        $phone = $data["phone"];
                        $address = $data["address"];
                    }
                    ?>
                        <form action="proses edit.php" method="post" class="formhs" >
                            <div>
                                <input type="hidden" name="id" id="id" required
                                value="<?php echo $id ?>">
                            </div>
                            <div class="first_name">
                                <label for="first_name">Nama Depan : </label>
                                <input type="text" name="first_name" id="first_name" required
                                value="<?php echo $first_name ?>">
                                
                            </div>
                            <div class="last_name">
                                <label for="last_name">Nama Belakang  : </label>
                                <input type="text" name="last_name" id="last_name" required
                                value="<?php echo $last_name; ?>" >
                            </div>
                            <div class="email">
                                <label for="email">Email   : </label>
                                <input type="text" name="email" id="email" required
                                value="<?php echo $email ?>">
                            </div>
                            <div class="phone">
                                <label for="phone">Phone  : </label>
                                <input type="text" name="phone" id="phone" required
                                value="<?php echo $phone ?>" >
                            </div>
                            <div class="address">
                                <label for="address">Address   : </label>
                                <input type="text" name="address" id="address" required
                                value="<?php echo $address ?>">
                            </div>
                            </div>
                            <button type="submit" name="submit" class="submit">Submit</button>
                        </form>
                    <?php // } ?>
                    </div>
                </div>
            </div>
            
        </div>
        
</body>
</html>