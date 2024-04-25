<?php
require "./admin/conn/conn.php";
include "./include/header.php";
session_start();
$Productlistuser =$_SESSION["Adobeuserdata12"];
if(empty($_GET['catname'])){
    $catname=$_GET['search'];
}else{
    $catname=$_GET['catname'];
}

?>

<style>
.ratesty {
            position: absolute;
            margin-bottom: 0px;
            padding: 1px 4px 1px 20px;
            background: white;
            width: 154px;
            margin-left: 28px;
            border-radius: 33px;
            color: black;
            font-weight: 400;
            z-index: 1;
            bottom: 0px;
        }


        .prodsview {
            height: 217px !important;
        }

        @media(max-width:540px) {
            .prodsview {
                height: 150px !important;
            }

            .ratesty {
                width: 143px;
                margin-top: -16px;
                bottom: 1px;
                margin-left: 1px;
            }
        }

        .hover-switch>img {
            position: absolute;
            top: calc(50% - 100px);
            left: calc(50% - 100px);
            object-fit: inherit;
            aspect-ratio: 1 / 1;
        }

        /* 
 * Show the last image by default
*/
        .hover-switch>img:last-of-type {
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
            -moz-transition: opacity 0.5s ease-in-out;
            -webkit-transition: opacity 0.5s ease-in-out;
            object-fit: inherit;
            aspect-ratio: 1 / 1;
        }

        /* 
 * Hide the last image on hover
*/
        .hover-switch:hover>img:last-of-type {
            opacity: 0;
        }
</style>
<?php
if ($Productlistuser == true) {

?>

<section>
    <div class="container">
        <div class="row py-2 my-2">
            <div class="col-12 py-2">
                <center>
                    <h2>
                        <?php echo $catname  ?>
                    </h2>
                </center>
            </div>
            <?php
$sd="SELECT * FROM `product_table` WHERE  category='$catname'";
$r12 =mysqli_query($conn, $sd);

if (mysqli_num_rows($r12) > 0) {
  // output data of each row
  while($rowdata = mysqli_fetch_assoc($r12)) {
?>
            <div class="col-md-3 my-3 prodsview col-6 p-2" style="border-radius:3px; overflow:hidden;">
                <a href="./service.php? productname=<?php echo $rowdata['product_name'];   ?>" >
                <div class="hover-switch"  style="height:100%; width:100%;">
                <img src="./admin/api/product_img/<?php echo $rowdata['product_img2']   ?>"  style="height:100%;  width:100%;" alt="">
                        <img src="./admin/api/product_img/<?php echo $rowdata['product_img1']   ?>"  style="height:100%;  width:100%;" alt="">
                    <p class="ratesty">
                        <span style="font-size: 12px;">
                            ₹ <?php echo $rowdata['Prices'];   ?> <del>₹ <?php echo $rowdata['SKU'];   ?></del>
                        </span>
                    </p>
  </div>
                </a>

            </div>
            <?php
 }
 }
//  mysqli_close($conn);    
  ?>
        </div>
    </div>
</section>
<?php
}
else{
  ?>
<section>
    <div class="container">
        <div class="row py-2 my-2">
            <div class="col-12 py-2">
                <center>
                    <h2>
                        <?php echo $catname  ?>
                    </h2>
                </center>
            </div>
            <?php
$sd="SELECT * FROM `product_table` WHERE  category='$catname'";
$r12 =mysqli_query($conn, $sd);

if (mysqli_num_rows($r12) > 0) {
  // output data of each row
  while($rowdata = mysqli_fetch_assoc($r12)) {
?>
            <div class="col-md-3 my-3 prodsview col-6 p-2" style="border-radius:3px; overflow:hidden;">
                <a href="./service.php? productname=<?php echo $rowdata['product_id'];   ?>" >
                <div class="hover-switch"  style="height:100%; width:100%;  ">
                <img  src="./admin/api/product_img/<?php echo $rowdata['product_img2'];   ?>"  style="height:100%; width:100%;" alt="">
                <img  src="./admin/api/product_img/<?php echo $rowdata['product_img1'];   ?>"  style="height:100%; width:100%;" alt="">
                    <p class="ratesty">
                        <span style="font-size: 12px;">
                            ₹ <?php echo $rowdata['Prices'];   ?>  <del>₹ <?php echo $rowdata['SKU'];   ?></del>
                        </span>
                    </p>
  </div>
                </a>

            </div>
            <?php
 }
 }
//  mysqli_close($conn);    
  ?>
        </div>
    </div>
</section>

<?php

}
?>
<?php

include "./include/footer.php";
?>