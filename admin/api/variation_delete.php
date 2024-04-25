<?php
require "../conn/conn.php";


 $id=$_GET['id'];
 $sql="DELETE FROM `variation` WHERE id='$id'";

 if(mysqli_query($conn, $sql)){
    echo  "<script>
    alert('Variation Product  Deleted !')
    window.location.href='../admin.php';
    </script>";

 }else{

    echo  "<script>
    alert('Failed to delete Variation Product  !')
    window.location.href='../admin.php';
    </script>";
 }
 ?>