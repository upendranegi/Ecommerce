<?php  
require "../admin/conn/conn.php";
$couponcode =$_GET['coponcode'];

$sql="SELECT * FROM `cupon_code` WHERE coupencode='$couponcode'";
$data=mysqli_query($conn,$sql);
if (mysqli_num_rows($data) > 0) {

    while ($copdata = mysqli_fetch_assoc($data)) {
   echo $coupondata = json_encode(array("Amount"=>$copdata['amount']));

    }
}
mysqli_close($conn);

?>