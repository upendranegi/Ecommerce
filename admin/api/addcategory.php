<?php
require "../conn/conn.php";

if(isset($_POST['submit'])){

    $catname=$_POST['Category_name'];
    $catimg=rname($_FILES['pic']['name']);

    $sql="INSERT INTO `categories`(`name`, `cat_img`) VALUES ('$catname','$catimg')";
    if (mysqli_query($conn, $sql)) {  
      move_uploaded_file($_FILES["pic"]["tmp_name"],'./cat_img/'.$catimg);
    
echo "<script>
alert('New Category Has Been Added Successfully !')
window.location.href='../admin.php';
</script>";

}
else{
  echo "<script>
  alert('Failed to Add New Product  !')
  window.location.href='../admin.php';
  </script>";
}
   
    
    mysqli_close($conn);
}


function rname($name){
global $conn,$id;
$bname = substr($name, strrpos($name, "."));
$result = mysqli_query($conn, "SELECT * FROM `product_table` order BY id DESC LIMIT 1");
if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id =  $row["id"];
    break;
  }
}
$fname = $id.$bname;
return $fname;
}
?>