<?php
require "../conn/conn.php";
$id=$_POST['id'];
$status=$_POST['status'];

$sql="UPDATE `review` SET `pstatus`='$status' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Review Status Change !')
    window.location.href='../admin.php';
    </script>";
  }
  else{
    echo "<script>
    alert('Failed to  Change review Status++ !')
    window.location.href='../admin.php';
    </script>";
  }

  mysqli_close($conn);

?>