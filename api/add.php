<?php
require "../admin/conn/conn.php";

if(isset($_POST['add'])){
 $id= $_POST['username'];
 $proid=  $_POST['productname'];
$fquntity=$_POST['fquntity'];


$sql="SELECT * FROM `cart` WHERE productname='$proid' and email='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
$quntity=$row['quntity'];

  }
}

if($fquntity<$quntity){
    $fquntity+=1;
    $usql="UPDATE `cart` SET`f_quntity`='$fquntity' WHERE productname='$proid' and email='$id'";
    if (mysqli_query($conn, $usql)) {
        echo "<script>  window.location.href='../addtocart.php';
 </script>"; 
    }
}
else{
    echo "<script>  window.location.href='../addtocart.php';
    </script>"; 
}
}



if(isset($_POST['subtrack'])){
  $id= $_POST['username'];
  $proid=  $_POST['productname'];
 $fquntity=$_POST['fquntity'];
 
 
 
 if($fquntity>1){
   echo  $fquntity-=1;
     $usql="UPDATE `cart` SET`f_quntity`='$fquntity' WHERE productname='$proid' and email='$id'";
     if (mysqli_query($conn, $usql)) {
         echo "<script>  window.location.href='../addtocart.php';
  </script>"; 
     }
 }
 else{
     echo "<script>  window.location.href='../addtocart.php';
     </script>"; 
 }
 }
?>