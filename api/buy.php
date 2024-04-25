<?php
require "../admin/conn/conn.php";

if(isset($_POST['buy'])){
$name=$_POST['Name'];
$mnumber=$_POST['mnumber'];
$email=$_POST['email'];
$Address=$_POST['Address'];
$Area=$_POST['Area'];
$City=$_POST['City'];
$State=$_POST['State'];
$CouponCode=$_POST['CouponCode'];
$couponAmount=$_POST['couponAmount'];
$pid=$_POST['pid'];
$date=date("D M Y");
    $sql="SELECT * FROM `cart` WHERE productname='$pid' and email='$email'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
   $quntity=$row['f_quntity'];
   $Personalisation=$row['Personalisation'];
   $price=$row['price'];
  
  }
}


$add="INSERT INTO `orderlist`( `userid`, `Name`, `product_name`, `quntity`, `price`, `pyament`, `Adrees`, `Area`, `city`, `State`, `orderstatus`, `timestamp`, `trasctionid`, `coupon_code`, `coupon_amount`, `Personalisation`) VALUES ('$email','$name','$pid','$quntity','$price','panding','$Address','$Area','$City','$State','complete','$date','ghgfhf','$CouponCode','$couponAmount','$Personalisation')";

if(mysqli_query($conn, $add)){
    echo "<script>  alert('Your Order  is  confirm')
     window.location.href='../index.php';
    </script>"; 
}else{
    echo "<script>  alert('Your Order  is not confirm')
     window.location.href='../addtocart.php';
    </script>"; 
}

}
else{

    if(isset($_POST['bycart'])){
        $name=$_POST['Name'];
        $mnumber=$_POST['mnumber'];
        $email=$_POST['email'];
        $Address=$_POST['Address'];
        $Area=$_POST['Area'];
        $City=$_POST['City'];
        $State=$_POST['State'];
      
        if(empty($_POST['CouponCode'])){
$CouponCode="";
        }else{
            $CouponCode=$_POST['CouponCode'];
        }
        if(empty($_POST['couponAmount'])){
$couponAmount="";
        }else{
            $couponAmount=$_POST['couponAmount'];
        }

      

        $date=date("D M Y");


        $sql="SELECT * FROM `cart` WHERE  email='$email'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
            $pid= $row['productname'];
            $quntity= $row['f_quntity'];
            $Personalisation= $row['Personalisation'];
            $price= $row['price'];

            $add="INSERT INTO `orderlist`( `userid`, `Name`, `product_name`, `quntity`, `price`, `pyament`, `Adrees`, `Area`, `city`, `State`, `orderstatus`, `timestamp`, `trasctionid`, `coupon_code`, `coupon_amount`, `Personalisation`) VALUES ('$email','$name','$pid','$quntity','$price','panding','$Address','$Area','$City','$State','complete','$date','ghgfhf','$CouponCode','$couponAmount','$Personalisation')";
            
            if(mysqli_query($conn, $add)){
                echo "<script>  alert('Your Order  is  confirm')
                 window.location.href='../index.php';
                </script>"; 
            }else{
                echo "<script>  alert('Your Order  is not confirm')
                 window.location.href='../addtocart.php';
                </script>"; 
            }
          
            }
        }







    }
}


?>