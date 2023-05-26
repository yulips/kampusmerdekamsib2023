<?php 
    include_once("db.php");

    $isbn = $_POST["isbn"];

    $judul = $_POST["judul"];
    $tahun = $_POST["tahun"];
    $id_penerbit = $_POST["id_penerbit"];
    $id_pengarang = $_POST["id_pengarang"];
    $id_kategori = $_POST["id_kategori"];
    $id_jenisBuku = $_POST["id_jenisBuku"];
    $stok = $_POST["stok"];
    $harga_jual = $_POST["harga_jual"];

    $result = mysqli_query($conn, "UPDATE `buku` SET 
                                    isbn = '$isbn',
                                    judul = '$judul',
                                    tahun = '$tahun',
                                    id_pengarang = '$id_pengarang', 
                                    id_penerbit = '$id_penerbit',
                                    id_kategori = '$id_kategori', 
                                    id_jenisBuku = '$id_jenisBuku',
                                    stok = '$stok', 
                                    harga_jual = '$harga_jual'

                                    
                                    WHERE isbn = '$isbn'
                                    ");


    header("Location: admin.php");

?>