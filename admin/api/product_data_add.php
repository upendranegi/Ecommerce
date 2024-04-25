<?php

require "../conn/conn.php";

if (isset($_POST['submit'])) {
  $name = htmlspecialchars_decode($_POST['Productname']);
  $category = htmlspecialchars_decode($_POST['category']);
  $price = $_POST['price'];
  $color = htmlspecialchars_decode($_POST['color']);
  $SKU = htmlspecialchars_decode($_POST['SKU']);
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


$psql="SELECT * FROM `product_table` ORDER BY id DESC LIMIT 1";
$r=mysqli_query($conn,$psql);
if($r)
while($row=mysqli_fetch_assoc($r)){
 $pnum=$row['id']+1;

}

$poduct_id="product_id".$pnum;

  if (empty($_FILES['pic1']['name'])) {
    $pic1="";
  } else {
    $pic1 =randomname($_FILES['pic1']['name']);
  }


  if (empty($_FILES['pic2']['name'])) {
    $pic2="";
  } else {
    $pic2 =randomname($_FILES['pic2']['name']);
  }


  if (empty($_FILES['pic3']['name'])) {
    $pic3="";
  } else {
    $pic3 =randomname($_FILES['pic3']['name']);
  }



  if (empty($_FILES['pic4']['name'])) {
    $pic4="";
  } else {
    $pic4 =randomname($_FILES['pic4']['name']);
  }



  if (empty($_FILES['pic5']['name'])) {
    $pic5="";
  } else {
    $pic5 =randomname($_FILES['pic5']['name']);
  }



  if (empty($_FILES['pic6']['name'])) {
    $pic6="";
  } else {
    $pic6 =randomname($_FILES['pic6']['name']);
  }


  if (empty($_FILES['pic7']['name'])) {
    $pic7="";
  } else {
    $pic7 =randomname($_FILES['pic7']['name']);
  }


  if (empty($_FILES['pic8']['name'])) {
    $pic8="";
  } else {
    $pic8 =randomname($_FILES['pic8']['name']);
  }






  $sql = "INSERT INTO `product_table`(`product_name`, `product_id`,`category`,`product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `product_img7`, `product_img8`, `Prices`, `Color`, `SKU`, `Quantity`, `Dimensions`, `Overall_Dimension`, `bulbHolder`, `Holder&Plug_Type`, `Package_Contents`, `Bulb_Provided`, `Material`, `weight`, `CountryOf_Origin`, `Description`) VALUES ('$name', '$poduct_id', '$category' ,'$pic1','$pic2','$pic3','$pic4','$pic5','$pic6','$pic7','$pic8','$price','$color','$SKU','$Quantity','$Dimensions','$Overall','$Holders','$Plug','$Contents','$Provided','$Material','$Weight','$Origin','$Description')";
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
alert('New product Has Been Added Successfully !')
window.location.href='../admin.php';
</script>";

}
else{
  echo "<script>
  alert('Failed to Add New Product  !')
  window.location.href='../admin.php';
  </script>";
}


function randomname($filename)
{
  global $conn, $prodn, $id;
  $bname = substr($filename, strrpos($filename, "."));
  $result = mysqli_query($conn, "SELECT * FROM `product_table` order BY id DESC LIMIT 1");
  if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id =  $row["id"];
      break;
    }
  }
  $fname = $id.rand().$bname;
  return $fname;
}
