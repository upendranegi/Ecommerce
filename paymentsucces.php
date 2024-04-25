<?php

function quntioty(){
    
}

require "./admin/conn/conn.php";
if(!empty($_GET)){
    $ordesql="SELECT * FROM `orderlist` ORDER BY id DESC LIMIT 1";
$r=mysqli_query($conn,$ordesql);
if($r)
while($row=mysqli_fetch_assoc($r)){
 $orderid='ord01101'.$row['id']+1;

}

$day=date("Y-m-d ");
    if(!empty($_GET['item_name'])){



	$product = $_GET['item_name'];  
    $trastion = $_GET['tx']; 
    $amount = $_GET['amt']; 
    $currency = $_GET['cc']; 
   $status = $_GET['st']; 
	$name = $_GET['name']; 
	$email = $_GET['email']; 
    $mobilenumber = $_GET['mobilenumber']; 
	$Address = $_GET['Address']; 
	$City = $_GET['City']; 
    $State = $_GET['State']; 
	$CouponCode = $_GET['CouponCode']; 
    $Area = $_GET['Area']; 
    $couponAmount = $_GET['couponAmount']; 


   

    $couponsql="SELECT * FROM `cupon_code` WHERE coupencode='$CouponCode'";
    $couponresult = mysqli_query($conn, $couponsql);

    if (mysqli_num_rows($couponresult) > 0) {
    $cartsql="SELECT * FROM `cart` WHERE productname='$product' and email='$email'";

    $result = mysqli_query($conn, $cartsql);

    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $quntity=$row['f_quntity'];
    $Personalisation=$row['Personalisation'];
    }
    }

    $sql = "INSERT INTO `orderlist`(`orderid`, `userid`, `Name`, `product_name`, `quntity`, `price`, `pyament`, `Adrees`, `Area`, `city`, `State`, `orderstatus`,`timestamp`,`coupon_code`, `coupon_amount`, `Personalisation`) VALUES ('$orderid','$email','$name','$product','$quntity','$amount','$status','$Address','$Area','$City','$State','Awaiting Shipment','$day','$CouponCode','$couponAmount','$Personalisation')";
    
    if (mysqli_query($conn, $sql)) {
       
   $cartde="DELETE FROM `cart` WHERE productname='$product' and email='$email'";
   if (mysqli_query($conn, $cartde)) {
    $couponupdat="UPDATE `cupon_code` SET `coupon_status`='used' WHERE coupencode='$CouponCode'";
    if (mysqli_query($conn, $couponupdat)) {
     echo "<script> window.location.href='./succes.php' </script>";
        
    }
   }
    } 
}
else{
    $sql ="INSERT INTO `orderlist`( `orderid`,`userid`, `Name`,`product_name`, `quntity`, `price`, `pyament`, `Adrees`, `Area`, `city`, `State`, `orderstatus`,`timestamp`,`coupon_code`, `coupon_amount`, `Personalisation`) VALUES ('$orderid','$email','$name','$product','$quntity','$amount','$status','$Address','$Area','$City','$State','Awaiting Shipment','$day','','','$Personalisation')";
    
    if (mysqli_query($conn, $sql)) {
        $cartde="DELETE FROM `cart` WHERE productname='$product' and email='$email'";
   if (mysqli_query($conn, $cartde)) {
      echo "New record created successfully";
   }
    } else {
        echo "<script> window.location.href='./succes.php' </script>";
    }
}
 
    }
else{

    $trastion = $_GET['tx']; 
    $amount = $_GET['amt']; 
    $currency = $_GET['cc']; 
   $status = $_GET['st']; 
	$name = $_GET['name']; 
	$email = $_GET['email']; 
    $mobilenumber = $_GET['mobilenumber']; 
	$Address = $_GET['Address']; 
	$City = $_GET['City']; 
    $State = $_GET['State']; 
	$CouponCode = $_GET['CouponCode']; 
    $Area = $_GET['Area']; 
    $couponAmount = $_GET['couponAmount']; 

 



    $couponsql="SELECT * FROM `cupon_code` WHERE coupencode='$CouponCode'";
    $couponresult = mysqli_query($conn, $couponsql);

    if (mysqli_num_rows($couponresult) > 0) {
    $cartsql="SELECT * FROM `cart` WHERE email='$email'";

    $result = mysqli_query($conn, $cartsql);

    if (mysqli_num_rows($result) > 0) {



    while($row = mysqli_fetch_assoc($result)) {
        $product=$row['productname'];
        $quntity=$row['f_quntity'];
        $Personalisation=$row['Personalisation'];

        $sql = "INSERT INTO `orderlist`( `orderid`, `userid`, `Name`, `product_name`, `quntity`, `price`, `pyament`, `Adrees`, `Area`, `city`, `State`, `orderstatus`, `timestamp`,`coupon_code`, `coupon_amount`, `Personalisation`) VALUES ('$orderid','$email','$name','$product','$quntity','$amount','$status','$Address','$Area','$City','$State','Awaiting Shipment','$day','$CouponCode','$couponAmount','$Personalisation')";
        if (mysqli_query($conn, $sql)) {
       
            $cartde="DELETE FROM `cart` WHERE productname='$product' and email='$email'";
            if (mysqli_query($conn, $cartde)) {
             $couponupdat="UPDATE `cupon_code` SET `coupon_status`='used' WHERE coupencode='$CouponCode'";
             if (mysqli_query($conn, $couponupdat)) {
                echo "<script> window.location.href='./succes.php' </script>";
                 
             }
            }
             } 
    }
    }


}else{

    $cartsql="SELECT * FROM `cart` WHERE email='$email'";

    $result = mysqli_query($conn, $cartsql);

    if (mysqli_num_rows($result) > 0) {



    while($row = mysqli_fetch_assoc($result)) {
        $product=$row['productname'];
        $quntity=$row['f_quntity'];
        $Personalisation=$row['Personalisation'];

        $sql = "INSERT INTO `orderlist`( `orderid`, `userid`, `Name`, `product_name`, `quntity`, `price`, `pyament`, `Adrees`, `Area`, `city`, `State`, `orderstatus`, `timestamp`,`coupon_code`, `coupon_amount`, `Personalisation`) VALUES ('$orderid','$email','$name','$product','$quntity','$amount','$status','$Address','$Area','$City','$State','Awaiting Shipment','$day','','','$Personalisation')";
        if (mysqli_query($conn, $sql)) {
       
            $cartde="DELETE FROM `cart` WHERE productname='$product' and email='$email'";
            if (mysqli_query($conn, $cartde)) {
                echo "<script> window.location.href='./succes.php' </script>";
            }
             } 
    }
    }

}
    
}

}     ?>