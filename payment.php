<?php
session_start();
include "./vendor/autoload.php";
require "./admin/conn/conn.php";
include "./src/payment.php";

$payuser =$_SESSION["Adobeuserdata12"];

use Payment\Payment;
$payment = new Payment;

// ?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pay with PayPal</title>

    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">


    <!-- Optional theme -->
    <!-- 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

</head>

<style>
.card {

    background-color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    border-radius: 20px;

    box-shadow: 1px 5px 9px rgba(211, 211, 211, .7);
}
</style>

<body>

    <?php 
  
if(isset($_POST['buy'])){

    $product_name=$_POST['pid'];
    $couponAmount=$_POST['couponAmount'];

?>
    <div class="container ">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-4 card">

                <form class="form-horizontal" method="POST" action="https://www.sandbox.PayPal.com/cgi-bin/webscr "
                    style="width:100%">
                    <fieldset>

                        <!-- Form Name -->
                        <center>
                            <legend> <b> Pay Know </b></legend>
                        </center>
                        <!-- Text input-->
                        <?php  
$sql = "SELECT * FROM `cart` WHERE productname='$product_name' AND email='$payuser'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $pricesed=(int) $row['price']-(int)$couponAmount;
?>
                        <div id="payform" class="form-group">
                            <label class="col-12 control-label" for="amount"> <b> Payment Amount : </b></label>
                            <div class="col-12 my-4">
                                <input id="amount" name="amount" type="text" value="<?php echo $pricesed    ?>"
                                    placeholder="amount to pay" class="form-control input-md" required="" style="    padding: 10px;
    border-radius: 5px;
    border: 1px solid #DDDDDD;

  ">

                            </div>
                        </div>

                        <input type='hidden' name='business' value='sb-clojz29090550@personal.example.com'>
                        <input type='hidden' name='item_name' value='<?php echo $product_name ?>'>
                        <input type='hidden' name='item_number' value='<?php echo $_POST['email']  ?>'>

                        <?php
    }
}
                       ?>
                        <!--<input type='hidden' name='amount' value='10'>-->
                        <input type='hidden' name='no_shipping' value='1'>
                        <input type='hidden' name='currency_code' value='USD'>
                        <!-- <input type='hidden' name='notify_url' value='<?php echo $payment->route("notify", "") ?>'> -->
                        <input type='hidden' name='cancel_return'
                            value="http://localhost/php-practical-work/payment-gateway/paypal/cancel.php">
                        <input type='hidden' name='return'
                            value="http://localhost/php-practical-work/payment-gateway/paypal/paymentsucces.php? name=<?php echo $_POST['Name']  ?> && mobilenumber=<?php echo $_POST['mnumber']  ?> && email=<?php echo $_POST['email']  ?> && Address=<?php echo $_POST['Address']  ?>  && Area=<?php echo $_POST['Area']  ?> && City=<?php echo $_POST['City']  ?> && State=<?php echo $_POST['State']  ?> && CouponCode=<?php echo $_POST['CouponCode']  ?> && couponAmount=<?php echo $couponAmount  ?>">
                        <input type="hidden" name="cmd" value="_xclick">

                        <!-- Button -->

                        <div class="form-group">
                            <label class="col-12 control-label" for="submit"></label>
                            <div class="col-12">
                                <center> <button id="submit" name="pay_now" class="btn btn-success px-5"><b> Pay Now
                                        </b></button> </center>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script>
        function formsubmit(){
            document.getElementById("payform").submit(); 
        }
 formsubmit()
</script>
    <?php   
}
elseif(isset($_POST['bycart'])){

?>


<div class="container ">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-4 card">

                <form class="form-horizontal" method="POST" action="https://www.sandbox.PayPal.com/cgi-bin/webscr "
                    style="width:100%">
                    <fieldset>

                        <!-- Form Name -->
                        <center>
                            <legend> <b> Pay Know </b></legend>
                        </center>
                        <!-- Text input-->
                        <?php  
                        $prised=0;
$sql = "SELECT * FROM `cart` WHERE  email='$payuser'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$prised+=$row['price']*$row['f_quntity'];
    }
}
$coupon=(int)$_POST['couponamount'];
$total=$prised-$coupon;
?>
                        <div id="cart_form" class="form-group">
                            <label class="col-12 control-label" for="amount"> <b> Payment Amount : </b></label>
                            <div class="col-12 my-4">
                                <input id="amount" name="amount" type="text" value="<?php  echo $total  ?>" readonly  placeholder="amount to pay" class="form-control input-md" required="" style="padding: 10px; border-radius: 5px; border: 1px solid #DDDDDD;">

                            </div>
                        </div>

                        <input type='hidden' name='business' value='sb-clojz29090550@personal.example.com'>
                        <input type='hidden' name='item_name' value=''>
                        <input type='hidden' name='item_number' value='<?php echo $_POST['email']  ?>'>

                        <?php

                       ?>
                        <!--<input type='hidden' name='amount' value='10'>-->
                        <input type='hidden' name='no_shipping' value='1'>
                        <input type='hidden' name='currency_code' value='USD'>
                        <!-- <input type='hidden' name='notify_url' value='<?php echo $payment->route("notify", "") ?>'> -->
                        <input type='hidden' name='cancel_return'
                            value="http://localhost/php-practical-work/payment-gateway/paypal/cancel.php">
                        <input type='hidden' name='return'
                            value="http://localhost/php-practical-work/payment-gateway/paypal/paymentsucces.php? name=<?php echo $_POST['Name']  ?> && mobilenumber=<?php echo $_POST['mnumber']  ?> && email=<?php echo $_POST['email']  ?> && Address=<?php echo $_POST['Address']  ?>  && Area=<?php echo $_POST['Area']  ?> && City=<?php echo $_POST['City']  ?> && State=<?php echo $_POST['State']  ?> && CouponCode=<?php echo $_POST['CouponCode']  ?> && couponAmount=<?php echo $couponAmount  ?>">
                        <input type="hidden" name="cmd" value="_xclick">

                        <!-- Button -->

                        <div class="form-group">
                            <label class="col-12 control-label" for="submit"></label>
                            <div class="col-12">
                                <center> <button id="submit" name="pay_now" class="btn btn-success px-5"><b> Pay Now
                                        </b></button> </center>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>







<script>
    cartformsubmit();
      function cartformsubmit(){
   document.getElementById("cart_form").submit(); 
      }
</script>


<?php


}
   ?>
</body>


</html>