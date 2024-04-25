<?php
require "./conn/conn.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];

echo $id;

    $sql = "SELECT * FROM `productname` WHERE  id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $img1 = $row["pic1"];
            $img2 = $row["pic2"];
            $img3 = $row["pic3"];
        }
    }
}


$path = "./product_img";
if (empty($_FILES["pic1"]["name"])) {
    $pic1 = $img1;
} else {
    $pic1 = $_FILES["pic1"]["name"];
    $temp1 = $_FILES["pic1"]["tmp_name"];
    $path1 = "./product_img/" . $pic1;
}



if (empty($_FILES["pic2"]["name"])) {
    $pic2 = $img2;
} else {
    $pic2 = $_FILES["pic2"]["name"];
    $temp2 = $_FILES["pic2"]["tmp_name"];
    $path2 = "./product_img/" . $pic2;
}




if (empty($_FILES["pic3"]["name"])) {
    $pic3 = $img3;
} else {
    $pic3 = $_FILES["pic3"]["name"];
    $temp3 = $_FILES["pic3"]["tmp_name"];
    $path3 = "./product_img/" . $pic3;
}



// $imgview = $_POST['img_view'];    


$categories = mysqli_real_escape_string($conn,$_POST['category']);
$Productname = mysqli_real_escape_string($conn,$_POST['Productname']);
$Layout = mysqli_real_escape_string($conn,$_POST['Layout']);
$Dimension = mysqli_real_escape_string($conn,$_POST['Dimension']);
$Style = mysqli_real_escape_string($conn,$_POST['Style']);
$Basecolour = mysqli_real_escape_string($conn,$_POST['Basecolour']);
$Wallcolour = mysqli_real_escape_string($conn,$_POST['Wallcolour']);
$Shutterbase = mysqli_real_escape_string($conn,$_POST['Shutterbase']);
$shutterWall = mysqli_real_escape_string($conn,$_POST['shutterWall']);
$Material = mysqli_real_escape_string($conn,$_POST['Material']);
$Storagefeatures = mysqli_real_escape_string($conn,$_POST['Storagefeatures']);
$Specialfeatures = mysqli_real_escape_string($conn,$_POST['Specialfeatures']);
$Size = mysqli_real_escape_string($conn,$_POST['Size']);


$h1 = $_POST['h1'];
$h2 = $_POST['h2'];
$h3 = $_POST['h3'];
$h4 = $_POST['h4'];
$h5 = $_POST['h5'];
$h6= $_POST['h6'];
$h7 = $_POST['h7'];
$h8 = $_POST['h8'];
$h9 = $_POST['h9'];



$sql1 = "UPDATE `productname` SET `Categoriesname`='$categories',`Productname`='$Productname',`pic1`='$pic1',`pic2`='$pic2',`pic3`='$pic3',`h1`='$h1',`c1`='$Layout',`h2`='$h2',`c2`='$Dimension',`h3`='$h3',`c3`='$Style',`h4`='$h4',`c4`='$Basecolour',`c42`='$Wallcolour',`h5`='$h5',`c5`='$Shutterbase',`c52`='$shutterWall',`h6`='$h6',`c6`='$Material',`h7`='$h7',`c7`='$Storagefeatures',`h8`='$h8',`c8`='$Specialfeatures',`h9`='$h9',`c9`='$Size' WHERE id=$id";

if (mysqli_query($conn, $sql1)) {
    if (!empty($_FILES["pic1"]["name"])) {
        move_uploaded_file($temp1, $path1);
    }
    if (!empty($_FILES["pic2"]["name"])) {
        move_uploaded_file($temp2, $path2);
    }

    if (!empty($_FILES["pic3"]["name"])) {
        move_uploaded_file($temp3, $path3);
    }
    echo "<script>
alert('product update suucecsfully');
window.location.href='product_list.php';
</script>";
}
