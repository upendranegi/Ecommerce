<?php

require "../admin/conn/conn.php";
   $useid=$_POST['user'];
   $productname=$_POST['pdid'];
    $fquty=$_POST['fquty'];
  $quty=$_POST['qunty'];
   $price=$_POST['Priseds'];
   $personli=$_POST['personli'];

   

    $addsql="SELECT * FROM `cart` WHERE productname='$productname' and email='$useid'";

    $adds=mysqli_query($conn, $addsql);
    if (mysqli_num_rows($adds) > 0) {
   $price=$_POST['Priseds'];
       $cartu="UPDATE `cart` SET `quntity`='$quty',`Personalisation`='$personli',`price`='$price',`f_quntity`='$fquty' WHERE productname='$productname' and email='$useid'";
       if(mysqli_query($conn, $cartu)){
?>
<script>
    var datas='<?php echo $productname  ?>';


    window.location.href="../checkout.php?id="+datas +"&& type=Buy";
</script>
<?php
}
    
    }
    else{
$sql="INSERT INTO `cart`(`productname`, `email`, `quntity`, `Personalisation`, `price`, `f_quntity`) VALUES ('$productname','$useid','$quty','$personli','$price','$fquty')";

if(mysqli_query($conn, $sql)){
?>

<script>
    var datas='<?php echo $productname  ?>';


    window.location.href="../checkout.php?id="+datas +"&& type=Buy";
</script>

<?php
}

    }

?>

<script>


</script>