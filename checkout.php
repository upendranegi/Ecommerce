<?php
include "./include/header.php";
require "./admin/conn/conn.php";

$username6=$_SESSION["Adobeuserdata12"];

if($username6== true){
?>
<?php

if($_GET['type']=='Buy'){

$id=$_GET['id'];
?>
<section>
    <div class="container-fluid container-md my-5 py-5">
        <div class="d-flex flex-wrap my-5">

            <div class="col-md-6">
                <center>
                    <h4>
                        <b>


                            <u>
                                Billing Details
                            </u>

                        </b>
                    </h4>
                </center>

                <div class="col-12 ">




                </div>
                <form action="./payment.php" method="post" id="buydata" class="d-flex flex-wrap my-3">

                    <div class="col-md-6 col-12 my-3">
                        <input type="text" name="Name" placeholder="Name" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>
                    </div>

                    <div class="col-md-6 my-3">
                        <input type="tel" name="mnumber" placeholder="Mobile Number" id="" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>

                    </div>


                    <div class="col-md-6 my-3">
                        <input type="email" name="email" class="px-2" value="<?php  echo  $username6;  ?>" readonly
                            id="" style="width:100%; border-radius:10px; height:40px">

                    </div>

                    <div class="col-md-6 my-3">
                        <input type="text" name="Address" placeholder="Addrees" id="" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>

                    </div>

                    <div class="col-md-6 my-3">
                        <input type="text" name="Area" placeholder="Area" id="" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>

                    </div>

                    <div class="col-md-6 my-3">
                        <input type="text" name="City" placeholder="City" id="" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>

                    </div>


                    <div class="col-md-6 my-3">
                        <input type="text" name="State" placeholder="State" id="" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>

                    </div>


                    <div class="col-md-6 my-3">
                        <input type="text" name="CouponCode" placeholder="CouponCode" id="coupons" class="px-2"
                            style="width:100%; border-radius:10px; height:40px;display:none;">

                    </div>




                    <div class="col-md-6 my-3">
                        <input type="text" name="couponAmount" placeholder="Amount" id="couponamount" class="px-2"
                            style="width:100%; border-radius:10px; height:40px;display:none;">

                    </div>



                    <div class="col-md-6 my-3">
                        <input type="text" name="pid" value="<?php  echo  $id  ?>" placeholder="Amount" id="couponamount" class="px-2"
                            style="width:100%; border-radius:10px; height:40px;display:none;">

                    </div>










                    <div class="col-12 py-4 ">
                        <center>
                            <button name="buy" class="btn btn-dark px-5 me-5"><b>

                                    Buy Now </b></button>
                        </center>

                    </div>


                </form>

            </div>

            <div class="col-md-6 my-2">
                <center>
                    <h4 class="my-3">
                        <b>

                            <u>
                                Products Details
                            </u>

                        </b>
                    </h4>
                </center>
                <div class="col-12">
                    <form class="d-flex flex-wrap " action="" method="post" class="">
                        <div class="col-6 px-0">
                            <h6 class="my-2">
                                <b>
                                    Coupon Code :
                                </b>
                            </h6>
                            <input type="text" name="Coupon Code" class="form-control" placehoder="Coupon Code"
                                id="cuponcode" style="    border-radius: 12px;">
                            <center>
                                <p id="cupondata" style="display:none; color:red;    font-weight: 400;">
                                    <b>

                                        Coupon code is Empty
                                    </b>
                                </p>

                                <p id="couponinvaild" style="display:none; color:red;    font-weight: 400;">
                                    <b>

                                        Coupon code is invalid
                                    </b>
                                </p>
                            </center>
                        </div>
                        <div class="col-md-6">
                            <center>
                                <button type="button" name="" placeholder="Coupon Code" id=""
                                    class="btn btn-dark my-4 px-5" onclick="showdata()" stule="border-radius:10px;"><b>
                                        Apply </b> </button>

                            </center>
                        </div>
                    </form>
                </div>


                <table class="table">
                    <thead class="col-12 ">
                        <tr>

                            <th scope="col" class="col-md-4 py-3" style="border-top: none;">Product Name</th>
                            <th scope="col" class=" py-3" style="border-top: none;">Price</th>
                            <th scope="col" class=" py-3" style="border-top: none;">Quantity</th>
                            <th scope="col" class=" py-3" style="border-top: none;">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$sql="SELECT * FROM `cart` WHERE email='$username6' and productname='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $numrow=mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)) {
     
        

                                 ?>



                        <tr>

                            <td class=" py-3">
                                <p style="  font-weight: 500;"> <?php echo  mans($row['productname'])   ?> </p>
                                <p style="display:none;">
                                   
                                </p>
                            </td>
                            <td class=" py-3">
                                <p class="" style="  font-weight: 500;"> <?php   echo  $row['price'];  ?> </p>
                            </td>
                            <td class=" py-3">
                                <p class="" style="  font-weight: 500;"> <?php   echo  $row['f_quntity'];  ?> </p>
                            </td>
                            <td class=" py-3">
                                <p class="pricsed" style="  font-weight: 500;">
                                    <?php   echo  $row['price']* $row['f_quntity'];  ?> </p>


                                <?php   $row['price']* $row['f_quntity'];  ?>
                            </td>
                        </tr>
                        <?php
}
}

                                ?>
                        <tr class="my-3">
                            <th colspan="3">
                                <p> <b style="    font-weight: 500;">
                                        Sub Total :
                                    </b> </p>
                            </th>
                            <th colspan="2">
                                <h6>

                                    <span id="prised">

                                    </span>
                                </h6>
                            </th>
                        </tr>

                        <tr class="my-3">
                            <th colspan="3">
                                <p> <b style="    font-weight: 500;">
                                        Coupon Code : :
                                    </b> </p>
                            </th>
                            <th colspan="2">
                                <h6>

                                    <span id="coupon">
                                        0
                                    </span>
                                </h6>
                            </th>
                        </tr>

                        <tr class="my-3">
                            <th colspan="3">
                                <p> <b style="    font-weight: 500;">
                                        Shipping :
                                    </b> </p>
                            </th>
                            <th colspan="2">
                                <p>


                                    <span style="font-weight: 500;">
                                        Free
                                    </span>



                                </p>
                            </th>
                        </tr>




                        <tr class="my-3">
                            <th colspan="3">
                                <p> <b style="    font-weight: 500;">
                                        Grand Total :
                                    </b> </p>
                            </th>
                            <th colspan="2">
                                <p>
                                    <b id="grandtotal">
                                        0
                                    </b>
                                </p>
                            </th>
                        </tr>
                    </tbody>
                </table>




            </div>
        </div>
</section>

<?php


}else{

  ?>





<section>
    <div class="container-fluid container-md my-5 py-5">
        <div class="d-flex flex-wrap my-5">

            <div class="col-md-6">
                <center>
                    <h4>
                        <b>


                            <u>
                                Billing Details
                            </u>

                        </b>
                    </h4>
                </center>

                <div class="col-12 ">




                </div>
                <form action="./payment.php" method="post" class="d-flex flex-wrap my-3">

                    <div class="col-md-6 col-12 my-3">
                        <input type="text" name="Name" placeholder="Name" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>
                    </div>

                    <div class="col-md-6 my-3">
                        <input type="tel" name="mnumber" placeholder="Mobile Number" id="" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>

                    </div>


                    <div class="col-md-6 my-3">
                        <input type="email" name="email" class="px-2" value="<?php  echo  $username6;  ?>" readonly
                            id="" style="width:100%; border-radius:10px; height:40px">

                    </div>

                    <div class="col-md-6 my-3">
                        <input type="text" name="Address" placeholder="Addrees" id="" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>

                    </div>

                    <div class="col-md-6 my-3">
                        <input type="text" name="Area" placeholder="Area" id="" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>

                    </div>

                    <div class="col-md-6 my-3">
                        <input type="text" name="City" placeholder="City" id="" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>

                    </div>


                    <div class="col-md-6 my-3">
                        <input type="text" name="State" placeholder="State" id="" class="px-2"
                            style="width:100%; border-radius:10px; height:40px" required>

                    </div>


                    <div class="col-md-6 my-3">
                        <input type="text" name="CouponCode" placeholder="CouponCode" id="coupons" class="px-2"
                            style="width:100%; border-radius:10px; height:40px;display:none;">

                    </div>




                    <div class="col-md-6 my-3">
                        <input type="text" name="couponamount" placeholder="couponamount" id="couponamount" class="px-2"
                            style="width:100%; border-radius:10px; height:40px;display:NONE;">

                    </div>

















                    <div class="col-12 ">
                        <center>
                            <button name="bycart" class="btn btn-dark px-5 me-5"><b>

                                    Buy Now </b></button>
                        </center>

                    </div>


                </form>

            </div>

            <div class="col-md-6 my-2">
                <center>
                    <h4 class="my-3">
                        <b>

                            <u>
                                Products Details
                            </u>

                        </b>
                    </h4>
                </center>
                <div class="col-12">
                    <form class="d-flex flex-wrap " action="" method="post" class="">
                        <div class="col-6 px-0">
                            <h6 class="my-2">
                                <b>
                                    Coupon Code :
                                </b>
                            </h6>
                            <input type="text" name="Coupon Code" class="form-control" placehoder="Coupon Code"
                                id="cuponcode" style="    border-radius: 12px;">
                            <center>
                                <p id="cupondata" style="display:none; color:red;    font-weight: 400;">
                                    <b>

                                        Coupon code is Empty
                                    </b>
                                </p>

                                <p id="couponinvaild" style="display:none; color:red;    font-weight: 400;">
                                    <b>

                                        Coupon code is invalid
                                    </b>
                                </p>
                            </center>
                        </div>
                        <div class="col-md-6">
                            <center>
                                <button type="button" name="" placeholder="Coupon Code" id=""
                                    class="btn btn-dark my-4 px-5" onclick="showdata()" stule="border-radius:10px;"><b>
                                        Apply </b> </button>

                            </center>
                        </div>
                    </form>
                </div>


                <table class="table">
                    <thead class="col-12 ">
                        <tr>

                            <th scope="col" class="col-md-4 py-3" style="border-top: none;">Product Name</th>
                            <th scope="col" class=" py-3" style="border-top: none;">Price</th>
                            <th scope="col" class=" py-3" style="border-top: none;">Quantity</th>
                            <th scope="col" class=" py-3" style="border-top: none;">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$sql="SELECT * FROM `cart` WHERE email='$username6'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $numrow=mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)) {
     
        

                                 ?>



                        <tr>

                            <td class=" py-3">
                                <p style="  font-weight: 500;"> <?php echo  mans($row['productname'])   ?> </p>
                                <p style="display:none;">
                                    <?php   echo  $_POST['pdid'];  ?>
                                </p>
                            </td>
                            <td class=" py-3">
                                <p class="" style="  font-weight: 500;"> <?php   echo  $row['price'];  ?> </p>
                            </td>
                            <td class=" py-3">
                                <p class="" style="  font-weight: 500;"> <?php   echo  $row['f_quntity'];  ?> </p>
                            </td>
                            <td class=" py-3">
                                <p class="pricsed" style="  font-weight: 500;">
                                    <?php   echo  $row['price']* $row['f_quntity'];  ?> </p>


                                <?php   $row['price']* $row['f_quntity'];  ?>
                            </td>
                        </tr>
                        <?php
}
}

                                ?>
                        <tr class="my-3">
                            <th colspan="3">
                                <p> <b style="    font-weight: 500;">
                                        Sub Total :
                                    </b> </p>
                            </th>
                            <th colspan="2">
                                <h6>

                                    <span id="prised">

                                    </span>
                                </h6>
                            </th>
                        </tr>

                        <tr class="my-3">
                            <th colspan="3">
                                <p> <b style="    font-weight: 500;">
                                        Coupon Code : :
                                    </b> </p>
                            </th>
                            <th colspan="2">
                                <h6>

                                    <span id="coupon">
                                        0
                                    </span>
                                </h6>
                            </th>
                        </tr>

                        <tr class="my-3">
                            <th colspan="3">
                                <p> <b style="    font-weight: 500;">
                                        Shipping :
                                    </b> </p>
                            </th>
                            <th colspan="2">
                                <p>


                                    <span style="font-weight: 500;">
                                        Free
                                    </span>



                                </p>
                            </th>
                        </tr>




                        <tr class="my-3">
                            <th colspan="3">
                                <p> <b style="    font-weight: 500;">
                                        Grand Total :
                                    </b> </p>
                            </th>
                            <th colspan="2">
                                <p>
                                    <b id="grandtotal">
                                        0
                                    </b>
                                </p>
                            </th>
                        </tr>
                    </tbody>
                </table>




            </div>
        </div>
</section>


<?php
}





}


else{
    header('Location:index.php');
}
?>

<?php
include "./include/footer.php";


 function mans($mas){
    global $pname,$conn;
$sm="SELECT * FROM `product_table` WHERE product_id='$mas'";
$product= mysqli_query($conn, $sm);
if (mysqli_num_rows($product) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($product)) {
        $pname=$row['product_name'];
    }
 }
 else{
    $vsm="SELECT * FROM `variation` WHERE variationid='$mas'";
$productv= mysqli_query($conn, $vsm);
if (mysqli_num_rows($productv) > 0) {
    // output data of each row
    while($rowv = mysqli_fetch_assoc($productv)) {
        $pname=$rowv['variation_name'];
 }
}
}
return $pname;
 }
?>
<script>
function buydata() {
    document.getElementById('buydata').submit();
}




sum();

function sum() {
    var nodeList = document.querySelectorAll(".pricsed");
    var total = 0;

    for (let i = 0; i < nodeList.length; i++) {
        total += parseInt(nodeList[i].textContent);
       
    }
    document.getElementById('prised').innerHTML = total;

}





function showdata() {

    var str = document.getElementById("cuponcode").value;
    document.getElementById("coupons").value =str;

    if (str =='') {
        document.getElementById("cupondata").style.display = "block";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var datas = this.responseText;
console.log(datas);
                coupon(datas);
               
            }else{
                document.getElementById("coupon").innerHTML =0;

document.getElementById("couponamount").value = 0; 
            }
        };
        xmlhttp.open("get", "./api/coupon_code.php?coponcode=" + str, true);
        xmlhttp.send();
        document.getElementById("couponinvaild").style.display = "block";

    }
    
}


function coupon(couponcode) {
    const objs = JSON.parse(couponcode);

    for (let x in objs) {
        document.getElementById("coupon").innerHTML = objs[x];

        document.getElementById("couponamount").value = objs[x];

    }
    grandsum();
  
}
grandsum()

function grandsum() {

    var subtotal = document.getElementById("prised").innerText;

    var coupon = document.getElementById("coupon").textContent;

    document.getElementById('grandtotal').innerHTML = parseInt(subtotal) - parseInt(coupon);

    document.getElementById("couponinvaild").style.display = "none";
}
</script>