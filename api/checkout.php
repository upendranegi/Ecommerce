<?php
require "../admin/conn/conn.php";

$name=  $_POST['Name'];
$mnumber=  $_POST['mnumber'];
$email=  $_POST['email'];
$Address=  $_POST['Address'];
$Area=  $_POST['Area'];
$City=  $_POST['City'];
$State=  $_POST['State'];
$length= $_POST['length'];
for($i; $i<$length; $i++ ){
echo  $_POST['name'.$i];
}
$time=date("Y-m-d");

// $sql="INSERT INTO `orderlist`(`userid`, `Name`, `product_name`, `quntity`, `price`,  `Adrees`,`timestamp`) VALUES ('$email','$name','$pname','$qunty','$price','$Address','$time')";
// if (mysqli_query($conn, $sql)) {
//     echo  "<script>
//     alert('order Successful')
//     window.location.href='../index.php';
// </script>";
// }
// else{
//     echo  "<script>
//     alert('failed to order')
//     window.location.href='../index.php';
// </script>";
// }

?>