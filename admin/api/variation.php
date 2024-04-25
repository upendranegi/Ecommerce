<?php
require "../conn/conn.php";

if (isset($_POST['submit'])) {
  $name =$_POST['Productname'];

$pdasql="SELECT * FROM `product_table` WHERE product_name='$name'";
$r=mysqli_query($conn,$pdasql);
if($r){
  while($row=mysqli_fetch_assoc($r)){
    $prodcutid=$row['product_id'];
   
   }
}


$psql="SELECT * FROM `variation` ORDER BY id DESC LIMIT 1";
$r=mysqli_query($conn,$psql);
if($r){
while($row=mysqli_fetch_assoc($r)){
 $varid= "Variation".$row['id']+1;
}
}

  $variation = htmlspecialchars_decode($_POST['variation']);
  $pname = htmlspecialchars_decode($_POST['Name']);
  $price = $_POST['price'];
 
  $sql ="INSERT INTO `variation`(`product_name`, `variationid`, `variation_name`, `name`,`price`) VALUES ('$prodcutid','$varid','$variation','$pname','$price')";


if (mysqli_query($conn, $sql)) {
 
echo "<script>
alert(' Product Variation  Has Been Added Successfully !')
window.location.href='../admin.php';
</script>";

}
else{
  echo "<script>
  alert('Failed to Add  Product Variation !')
  window.location.href='../admin.php';
  </script>";
}
}

// function randomname($filename) {
//   global $conn, $prodn, $id;
//   $prodn="vadata";
//   $bname = substr($filename, strrpos($filename, "."));
//   $result = mysqli_query($conn, "SELECT * FROM `product_table` order BY id DESC LIMIT 1");
//   if ($result) {
//     while ($row = mysqli_fetch_assoc($result)) {
//       $id =  $row["id"];
//       break;
//     }
//   }
//   $fname = $prodn.$id.rand().$bname;
//   return $fname;
// }
