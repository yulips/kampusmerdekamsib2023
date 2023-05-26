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

   
    $result = mysqli_query($conn, "INSERT INTO `buku`(`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_kategori`, `id_jenisBuku`, `stok`, `harga_jual`) VALUES 
    ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_kategori', '$id_jenisBuku', '$stok', '$harga_jual') ");

    if($result){
        echo "The form has been successfully submitted.";
    } else {
        echo "Something went wrong!";
    }

    header('Location: admin.php');

   
    

    
       

?>