<?php

require "../conn/conn.php";

if (isset($_POST['submit'])) {
  $name = htmlspecialchars_decode($_POST['Productname']);
  $category = htmlspecialchars_decode($_POST['category']);
  $price = $_POST['price'];
  $color = $_POST['color'];
  $SKU = $_POST['SKU'];
  $Quantity = htmlspecialchars_decode($_POST['Quantity']);
  $Dimensions = htmlspecialchars_decode($_POST['Dimensions']);
  $Overall = htmlspecialchars_decode($_POST['Overall']);
  $Holders = htmlspecialchars_decode($_POST['Holders']);
  $Plug = htmlspecialchars_decode($_POST['Plug']);
  $Contents = htmlspecialchars_decode($_POST['Contents']);
  $Provided = htmlspecialchars_decode($_POST['Provided']);
  $Material = htmlspecialchars_decode($_POST['Material']);
  $Weight = htmlspecialchars_decode($_POST['Weight']);
  $Origin = htmlspecialchars_decode($_POST['Origin']);
  $Description = htmlspecialchars_decode($_POST['Description']);
 $id=$_POST['id'];

$psql="SELECT * FROM `product_table` where id='$id'";
$r=mysqli_query($conn,$psql);
if($r)
while($row=mysqli_fetch_assoc($r)){
 $img1=$row['product_img1'];
 $img2=$row['product_img2'];
 $img3=$row['product_img3'];
 $img4=$row['product_img4'];
 $img5=$row['product_img5'];
 $img6=$row['product_img6'];
 $img7=$row['product_img7'];
 $img8=$row['product_img8'];
 

}


  if (empty($_FILES['pic1']['name'])) {
    $pic1=$img1;
  } else {
    $pic1 =randomname($_FILES['pic1']['name']);
  }


  if (empty($_FILES['pic2']['name'])) {
    $pic2=$img2;
  } else {
    $pic2 =randomname($_FILES['pic2']['name']);
  }


  if (empty($_FILES['pic3']['name'])) {
    $pic3=$img3;
  } else {
    $pic3 =randomname($_FILES['pic3']['name']);
  }



  if (empty($_FILES['pic4']['name'])) {
    $pic4=$img4;
  } else {
    $pic4 =randomname($_FILES['pic4']['name']);
  }



  if (empty($_FILES['pic5']['name'])) {
    $pic5=$img5;
  } else {
    $pic5 =randomname($_FILES['pic5']['name']);
  }



  if (empty($_FILES['pic6']['name'])) {
    $pic6=$img6;
  } else {
    $pic6 =randomname($_FILES['pic6']['name']);
  }


  if (empty($_FILES['pic7']['name'])) {
    $pic7=$img7;
  } else {
    $pic7 =randomname($_FILES['pic7']['name']);
  }


  if (empty($_FILES['pic8']['name'])) {
    $pic8=$img8;
  } else {
    $pic8 =randomname($_FILES['pic8']['name']);
  }






  $sql = "UPDATE `product_table` SET `product_name`=' $name',`category`='$category',`product_img1`='$pic1',`product_img2`='$pic2',`product_img3`='$pic3',`product_img4`='$pic4',`product_img5`='$pic5',`product_img6`='$pic6',`product_img7`='$pic7',`product_img8`='$pic8',`Prices`='$price',`Color`='$color',`SKU`='$SKU',`Quantity`='$Quantity',`Dimensions`='$Dimensions',`Overall_Dimension`='$Overall',`bulbHolder`='$Holders',`Holder&Plug_Type`='$Plug',`Package_Contents`='$Contents',`Bulb_Provided`='$Provided',`Material`='$Material',`weight`='$Weight',`CountryOf_Origin`='$Origin',`Description`='$Description' WHERE id='$id'";
}

if (mysqli_query($conn, $sql)) {
  if (empty($_FILES['pic1']['name'])) {
 
  } else {
  move_uploaded_file($_FILES["pic1"]["tmp_name"],'./product_img/'.$pic1);
  }

  if (empty($_FILES['pic2']['name'])) {
 
  } else {
  move_uploaded_file($_FILES["pic2"]["tmp_name"],'./product_img/'.$pic2);
  }
  if (empty($_FILES['pic3']['name'])) {
 
  } else {
  move_uploaded_file($_FILES["pic3"]["tmp_name"],'./product_img/'.$pic3);
  }
  if (empty($_FILES['pic4']['name'])) {
 
  } else {
  move_uploaded_file($_FILES["pic4"]["tmp_name"],'./product_img/'.$pic4);
  }
  if (empty($_FILES['pic5']['name'])) {
 
  } else {
  move_uploaded_file($_FILES["pic5"]["tmp_name"],'./product_img/'.$pic5);
  }
  if (empty($_FILES['pic6']['name'])) {
 
  } else {
  move_uploaded_file($_FILES["pic6"]["tmp_name"],'./product_img/'.$pic6);
  }
  if (empty($_FILES['pic7']['name'])) {
 
  } else {
  move_uploaded_file($_FILES["pic7"]["tmp_name"],'./product_img/'.$pic7);
  }
  if (empty($_FILES['pic8']['name'])) {
 
  } else {
  move_uploaded_file($_FILES["pic8"]["tmp_name"],'./product_img/'.$pic8);
  }




echo "<script>
alert(' product Updated Successfully !')
window.location.href='../admin.php';
</script>";

}
else{
  echo "<script>
  alert('Failed to Updated  Product  !')
  window.location.href='../admin.php';
  </script>";
}


function randomname($filename)
{
  global $conn, $prodn, $id;
  $bname = substr($filename, strrpos($filename, "."));
  
  $fname = $id.rand().$bname;
  return $fname;
}
