<?php    

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    include_once("db.php");
   
    $result = mysqli_query($conn, "INSERT INTO `customer`(`first_name`, `last_name`, `email`, `phone`, `address`) VALUES 
    ('$first_name', '$last_name', '$email', '$phone', '$address') ");

    if($result){
        echo "The form has been successfully submitted.";
    } else {
        echo "Something went wrong!";
    }

    header('Location: index.php');

   
    

    
       

?>