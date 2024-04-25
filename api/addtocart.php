<?php

require "../admin/conn/conn.php";
    $useid=$_POST['userid'];
   $productname=$_POST['productname'];
    $personli=$_POST['personli'];
    $quty=$_POST['quty'];
    $price=$_POST['price'];

    $addsql="SELECT * FROM `cart` WHERE productname='$productname' and email='$useid'";

    $adds=mysqli_query($conn, $addsql);
    if (mysqli_num_rows($adds) > 0) {
        echo "<script>
        alert('Product is  alredy exist to you cart')
        window.location.href='../index.php';
    </script>";
    }
    else{
$sql="INSERT INTO `cart`(`productname`, `email`, `quntity`, `Personalisation`, `price`, `f_quntity`) VALUES ('$productname','$useid','$quty','$personli','$price','1')";

if(mysqli_query($conn, $sql)){
 echo "<script>  window.location.href='../addtocart.php';
 </script>";
}

    }

?>