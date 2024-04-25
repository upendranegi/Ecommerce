<?php
require "../conn/conn.php";


 $id=$_GET['id'];

$sql="DELETE FROM `product_table` WHERE product_id='$id'";

if(mysqli_query($conn, $sql)){
    $vsql="DELETE FROM `variation` WHERE product_name='$id'";
if(mysqli_query($conn, $vsql)){
    }else{

    }

    echo  "<script>
    alert(' Product Deleted !')
    window.location.href='../admin.php';
    </script>";
}
else{
    echo  "<script>
    alert('Failed to delete Product  !')
    window.location.href='../admin.php';
    </script>";
}
?>