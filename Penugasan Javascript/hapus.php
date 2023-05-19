<?php 

include_once("db.php");

$id = $_GET["id"];

$result = mysqli_query($conn, "DELETE FROM `customer` WHERE `id` = '$id' " );

header("Location: index.php");


?>