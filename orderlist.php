<?php
include "./include/header.php";
require "./admin/conn/conn.php";

$ueseorder=$_SESSION["Adobeuserdata12"];


if ($ueseorder == true) {
?>


<section class="my-5 ">
    <center>
        <h4 class="my-4">
            <b>
                <u>

                    Order List </u>
            </b>
        </h4>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-12"
            >
                <style>
                .imgs {
                    width: 86%;
                    height: 110px;
                }

                @media (max-width:540px) {
                    .imgs {
                        width: 86%;
                        height: 250px;
                    }
                }
                </style>


                <?php
$sql = "SELECT * FROM `orderlist` WHERE userid='$ueseorder'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    $pid=$row['product_name'];

    $psql = "SELECT * FROM `product_table` WHERE product_id='$pid' ";
    $res1 = mysqli_query($conn,$psql);

if (mysqli_num_rows($res1) > 0) {
  // output data of each row
  while($pdata = mysqli_fetch_assoc($res1)) {
?>
                <div class="d-flex flex-wrap my-4">

                    <div style="border:none;" class="col-md-2 my-2">
                        <a
                            href="./orderdetails.php? id=<?php echo $pdata['product_id'] ?> && tr=<?php echo $row['trasctionid'] ?>">

                            <img src="./admin/api/product_img/<?php echo $pdata['product_img1']   ?>" class="imgs"
                                alt="">
                        </a>
                    </div>
                    <div style="border:none;" class="py-1 col-md-4 my-2">
                        <h6>
                            <b>
                                <?php echo $pdata['product_name']   ?>
                            </b>
                        </h6>




                    </div>

                    <div class="col-md-2 my-2" style="border:none;">
                        <p class="">
                            <span style="  font-size: 16px; font-weight:600; ">
                                Price :
                            </span>
                            <b style="  font-size: 16px;  ">

                                $ <?php echo  $pdata['Prices']   ?> </b>

                        </p>

                        <p>
                            <span style="  font-size: 16px; font-weight:600; ">
                                Quntity :
                            </span>
                            <b>
                                <?php echo $row['quntity']  ?>
                            </b>
                        </p>

                        <p class="">
                            <span style="  font-size: 16px; font-weight:600; ">
                                Total price :
                            </span>
                            <b>
                                <?php echo (int)$row['quntity']*(int) $row['price'] ?>
                            </b>

                        </p>
                    </div>

                    <div class="col-md-4 my-2" style="border:none;">
                        <center>
                            <?php  
if($row['orderstatus']=='Deliverd'){
                            ?>
                            <button class="btn btn-success">
                                <b>
                                    Order <?php echo $row['orderstatus']   ?>
                                </b>
                            </button>


                            <?php

$tdate=date("Y-m-d");
 $orderdate= $row['order_staus_date'];

$date1=date_create($tdate);
$date2=date_create($orderdate);
 $diff=date_diff($date1,$date2);
 $daycal= $diff->format("%a ");

 if($daycal<15 and $daycal>=0){


?>
                            <a href="./api/return_product.php? user_id=<?php echo $ueseorder  ?> && id=<?php echo $row['id']  ?>"
                                class="btn btn-info mx-2">
                                <b>
                                    Return
                                </b>
                            </a>
                            <?php
 }



// $diff=date_diff($orderdate,$tdate);
// echo  $diff->format("%R%a days");




?>



                            <?php
}
elseif($row['orderstatus']=='Awaiting Shipment'){
?>


                            <a class="btn btn-warning">
                                <b>
                                    <?php echo $row['orderstatus']   ?>
                                </b>
                            </a>

                            <?php
}
elseif($row['orderstatus']=='Reutrn'){
?>
                            <a class="btn btn-secondary px-3 text-light">
                                <b>
                                    <?php echo $row['orderstatus']   ?>
                                </b>
                            </a>

                            <?php
}elseif($row['orderstatus']=='Cancel'){


?>


                            <a class="btn btn-danger">
                                <b>
                                    Cancel
                                </b>
                            </a>
                            <?php

}else{
?>
                            <a href="./api/Cancel_product.php? user_id=<?php echo $ueseorder  ?> && id=<?php echo $row['id']  ?>"
                                class="btn btn-info">
                                <b>
                                    Cancel
                                </b>
                            </a>

                            <?php
}

?>
                        </center>
                    </div>
                </div>

                <?php
  }
}

$vsql = "SELECT * FROM `variation` WHERE  variationid='$pid' ";
$resv = mysqli_query($conn,$vsql);
if (mysqli_num_rows($resv) > 0) {
  while($vdata = mysqli_fetch_assoc($resv)) {
    ?>
                <div class="d-flex flex-wrap my-4">
                    <?php

   $pvid = $vdata['product_name'];
                    $sa = "SELECT * FROM `product_table` WHERE product_id='$pvid'";
                    $ss = mysqli_query($conn, $sa);
                    while ($sq1 = mysqli_fetch_assoc($ss)) {
    ?>

                    <div style="border:none;" class="col-md-2 my-2">
                        <a href="./orderdetails.php? id=<?php echo $pid; ?> && tr=<?php echo $row['trasctionid'] ?>">
                            <img src="./admin/api/product_img/<?php echo $sq1['product_img1']   ?>" class="imgs" alt="">
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                    <div style="border:none;" class="py-1 col-md-4 my-2">
                        <h6>
                            <b>
                                <?php echo $vdata['name']   ?>
                            </b>
                        </h6>
                        <h6>
                            <b>
                                <?php echo $vdata['variation_name']   ?>
                            </b>
                        </h6>



                    </div>

                    <div class="col-md-2 my-2" style="border:none;">
                        <p class="">
                            <span style="  font-size: 16px; font-weight:600; ">
                                Price :
                            </span>
                            <b style="  font-size: 16px;  ">

                                $ <?php echo  $vdata['price']   ?> </b>

                        </p>

                        <p>
                            <span style="  font-size: 16px; font-weight:600; ">
                                Quntity :
                            </span>
                            <b>
                                <?php echo $row['quntity']  ?>
                            </b>
                        </p>

                        <p class="">
                            <span style="  font-size: 16px; font-weight:600; ">
                                Total price :
                            </span>
                            <b>
                                <?php echo (int)$row['quntity']*(int) $row['price'] ?>
                            </b>

                        </p>
                    </div>


                    <div class="col-md-4 my-2" style="border:none;">
                        <center>
                            <?php  
if($row['orderstatus']=='Deliverd'){
                            ?>
                            <button class="btn btn-success">
                                <b>
                                    Order <?php echo $row['orderstatus']   ?>
                                </b>
                            </button>




                            <?php

$tdate=date("Y-m-d");
 $orderdate= $row['order_staus_date'];

$date1=date_create($tdate);
$date2=date_create($orderdate);
 $diff=date_diff($date1,$date2);
 $daycal= $diff->format("%a ");

 if($daycal<15 and $daycal>=0){


?>
                            <a href="./api/return_product.php? user_id=<?php echo $ueseorder  ?> && id=<?php echo $row['id']  ?>"
                                class="btn btn-info mx-2">
                                <b>
                                    Return
                                </b>
                            </a>

                            <?php

}
}
elseif($row['orderstatus']=='Awaiting Shipment'){
?>


                            <a class="btn btn-warning">
                                <b>
                                    <?php echo $row['orderstatus']   ?>
                                </b>
                            </a>

                            <?php
}elseif($row['orderstatus']=='Cancel'){


?>


                            <a class="btn btn-danger">
                                <b>
                                    Cancel
                                </b>
                            </a>

                            <?php
}
elseif($row['orderstatus']=='Reutrn'){
?>
                            <a class="btn btn-secondary px-3 text-light">
                                <b>
                                    <?php echo $row['orderstatus']   ?>
                                </b>
                            </a>
                            <?php

}else{
?>
                            <a href="./api/Cancel_product.php? user_id=<?php echo $ueseorder  ?> && id=<?php echo $row['id']  ?>"
                                class="btn btn-info">
                                <b>
                                    Cancel
                                </b>
                            </a>

                            <?php
}

?>
                        </center>
                    </div>
                </div>

                <?php
  }
}
?>

                <hr>
                <?php

}
}
else{
    ?><div class="col-12">
 

                <img src="./img/order.svg" width="100%" alt="">

                       
    </div>
                <?php
}


?>

            </div>
        </div>
    </div>
</section>




<?php
}else{

    echo "<script>  window.location.href='./index.php';
    </script>";
}


include "./include/footer.php";
?>