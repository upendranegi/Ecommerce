<?php
require "../conn/conn.php";


$id=$_GET['id'];

$sql="DELETE FROM `categories` WHERE productid='$id'";
if(mysqli_query($conn, $sql)){
    echo  "<script>
    alert(' Category Deleted !')
    window.location.href='../admin.php';
    </script>";
}else{
    echo  "<script>
    alert('Failed to delete Category  !')
    window.location.href='../admin.php';
    </script>";
}
?>