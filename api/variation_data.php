<?php
require "../admin/conn/conn.php";
$v_name=$_GET['vname'];

$sql="SELECT * FROM `variation` WHERE variationid='$v_name'";
 $data=mysqli_query($conn,$sql);
 
if (mysqli_num_rows($data) > 0) {

    while ($vardata = mysqli_fetch_assoc($data)) {
   echo     $car = json_encode(array("variationname"=>$vardata['name'], "price"=>$vardata['price'],  "varid"=>$vardata['variationid']));

    }
}
mysqli_close($conn);


?>