<?php
require "../conn/conn.php";

if (isset($_POST['submit'])) {
  $name =$_POST['Productname'];

   $id=$_POST['id'];

   $variation = htmlspecialchars_decode($_POST['variation']);
  $pname = htmlspecialchars_decode($_POST['Name']);
  $price = $_POST['price'];

  $sql="UPDATE `variation` SET `product_name`='$name',`variation_name`='$variation',`name`='$pname',`price`='$price' WHERE id='$id'";
 


if (mysqli_query($conn, $sql)) {
 
echo "<script>
alert('  Variation Edit Successfully !')
window.location.href='../admin.php';
</script>";

}
else{
  echo "<script>
  alert('Failed to Edit  Product Variation !')
  window.location.href='../admin.php';
  </script>";
}
}