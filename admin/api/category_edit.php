<?php
require "../conn/conn.php";
$id=$_POST['id'];
$cat_name=$_POST['cat_name'];

$Psql = "SELECT * FROM `categories` WHERE productid='$id'";
$Presult = mysqli_query($conn, $Psql);

while ($Prow = mysqli_fetch_assoc($Presult)) {
    $ca=$Prow['cat_img'];
}

if(empty($_FILES['pic1']['name'])){
    $catimg=$ca;
}else{
    $catimg=rname($_FILES['pic1']['name']);
}




$sql="UPDATE `categories` SET `name`='$cat_name',`cat_img`='$catimg' WHERE productid='$id'";
if (mysqli_query($conn, $sql)) {  
  move_uploaded_file($_FILES["pic1"]["tmp_name"],'./cat_img/'.$catimg);

echo "<script>
alert(' Category Update Successfully !')
window.location.href='../admin.php';
</script>";

}
else{
echo "<script>
alert('Failed to Update Category !')
window.location.href='../admin.php';
</script>";
}








function rname($name){
    global $conn,$id;
    $bname = substr($name, strrpos($name, "."));
 
   
    $fname = $id.$bname;
    return $fname;
    }



?>