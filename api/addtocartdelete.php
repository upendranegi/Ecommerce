<?php
require "../admin/conn/conn.php";


$id=$_GET['id'];

$user=$_GET['user'];


$sql="DELETE FROM `cart` WHERE email='$user' and productname='$id'";
if(mysqli_query($conn, $sql)){
    echo "<script>
    alert('Product delete form  Add to cart')
    window.location.href='../index.php';
</script>";
}
?>