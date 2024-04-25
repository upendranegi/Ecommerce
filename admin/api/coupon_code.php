<?php
require "../conn/conn.php";

if(isset($_POST['submit'])){
    $coupon=$_POST['couponcode'];
    $Amount=$_POST['Amount'];

$check="SELECT * FROM `cupon_code` WHERE coupencode='$coupon'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
    echo "<script>
    alert(' Coupon Code  Already Exist !')
    window.location.href='../cupon.php';
    </script>";
}
else{
    

    $sql = "INSERT INTO `cupon_code`(`coupencode`, `amount`,`coupon_status`) VALUES ('$coupon','$Amount','NotUsed')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>
    alert('Coupon Code Create successfully !')
    window.location.href='../admin.php';
    </script>";
    } else {
        echo "<script>
        alert('Failed to Create Coupon Code   !')
        window.location.href='../admin.php';
        </script>";
    }
    
    mysqli_close($conn);


}

}


?>