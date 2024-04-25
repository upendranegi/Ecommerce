<?php
require "../conn/conn.php";


$id=$_GET['id'];

$sql="DELETE FROM `review` WHERE id='$id'";
if(mysqli_query($conn, $sql)){
    echo  "<script>
    alert('Product Review deleted succesfully !')
    window.location.href='../admin.php';
    </script>";
}else{
    echo  "<script>
    alert('Failed to delete Product Review  !')
    window.location.href='../admin.php';
    </script>";
}
?>