<?php
require "../admin/conn/conn.php";

if(isset($_POST['submit'])){
    if(empty($_POST['rating3'])){
        $rating=3;
    }
    else{
        $rating=  $_POST['rating3'];
    }
   
    $name=  $_POST['name'];
    $email=  $_POST['email'];
    $proname=  $_POST['proname'];

    $comment=  $_POST['comment'];

$sql="INSERT INTO `review`( `product_id`, `product_rview`, `rating`, `userid`, `name`, `pstatus`) VALUES ('$proname','$comment','$rating','$email' ,'$name','0')";


if (mysqli_query($conn, $sql)) {
    echo  "<script>
    alert('Thank you your review successfully added')
    window.location.href='../index.php';
</script>";
  } else {
    echo  "<script>
    alert('Failed to add your  ')
    window.location.href='../index.php';
</script>";
  }
  
  mysqli_close($conn);
}


?>