<?php
require "../conn/conn.php";

if(isset($_POST['submit'])){

 
$ps1 = "SELECT * FROM `banerr` WHERE id=1";
$resultps1 = mysqli_query($conn, $ps1);

if (mysqli_num_rows($resultps1) > 0) {
    while($rowp = mysqli_fetch_assoc($resultps1)) {
$img1=$rowp['banner1'];
$img2=$rowp['banner2'];
$img3=$rowp['banner3'];
    }
}


$ps2 = "SELECT * FROM `banerr` WHERE id=2";
$resultps2 = mysqli_query($conn, $ps2);

if (mysqli_num_rows($resultps2) > 0) {
    while($rowp2 = mysqli_fetch_assoc($resultps2)) {
$img5=$rowp2['banner1'];
$img6=$rowp2['banner2'];
$img7=$rowp2['banner3'];
    }
}

 if(empty($_FILES['Banner1']['name'])){
  $Banner1=$img1;
 }else{
    $Banner1=rname($_FILES['Banner1']['name'],1);
 }
 
 if(empty($_FILES['Banner2']['name'])){
    $Banner2=$img2;
 }else{
  

    $Banner2=rname($_FILES['Banner2']['name'],2);
 }



 if(empty($_FILES['Banner3']['name'])){
    $Banner3=$img3;
 }else{
    $Banner3=rname($_FILES['Banner3']['name'],3);
 }


 
 if(empty($_FILES['Banner4']['name'])){
    $Banner4=$img4;
 }else{
    $Banner4=rname($_FILES['Banner4']['name'],4);
 }


 
 if(empty($_FILES['Banner5']['name'])){
    $Banner5=$img5;
 }else{
    $Banner5=rname($_FILES['Banner5']['name'],5);
 }



 
 if(empty($_FILES['Banner6']['name'])){
    $Banner6=$img6;
 }else{
    $Banner6=rname($_FILES['Banner6']['name'],6);
 }


  
 



    $sql="UPDATE `banerr` SET `banner1`='$Banner1',`banner2`='$Banner2',`banner3`='$Banner3' WHERE id=1";
    $sql2="UPDATE `banerr` SET `banner1`='$Banner4',`banner2`='$Banner5',`banner3`='$Banner6' WHERE id=2";
    if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {  
      move_uploaded_file($_FILES["Banner1"]["tmp_name"],'./banners/'.$Banner1);
      move_uploaded_file($_FILES["Banner2"]["tmp_name"],'./banners/'.$Banner2);
      move_uploaded_file($_FILES["Banner3"]["tmp_name"],'./banners/'.$Banner3);
      move_uploaded_file($_FILES["Banner4"]["tmp_name"],'./banners/'.$Banner4);
      move_uploaded_file($_FILES["Banner5"]["tmp_name"],'./banners/'.$Banner5);
      move_uploaded_file($_FILES["Banner6"]["tmp_name"],'./banners/'.$Banner6);
  
    
echo "<script>
alert('New Banner Added Successfully !')
window.location.href='../admin.php';
</script>";

}
else{
  echo "<script>
  alert('Failed to Add New Banner Added !')
  window.location.href='../admin.php';
  </script>";
}
   
mysqli_close($conn);  
   
}



function rname($name,$ids){
global $conn,$id;
$bname = substr($name, strrpos($name, "."));

$fname = $id.rand().$bname;
return $fname;
}
?>