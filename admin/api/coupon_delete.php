<?php 

require "../conn/conn.php";


$id=$_GET['id'];

$sql="DELETE FROM `cupon_code` WHERE  id='$id'";
if(mysqli_query($conn, $sql)){
    echo  "<script>
    alert(' Coupon code Deleted !')
    window.location.href='../admin.php';
    </script>";
}else{
    echo  "<script>
    alert('Failed to delete Coupon code  !')
    window.location.href='../admin.php';
    </script>";
}

?>