<?php
include "./include/header.php";
require "./admin/conn/conn.php";
$orderlis=$_SESSION["Adobeuserdata12"];
?>


<style>
    #orderstatus{
        display:none;
    }
.process-wrap {
    width: 100%;
    margin: 1px;

}

.process-main {
    width: 100%;
    min-width: 320px;
    display: flex;
}

.col-3 {
    width: 25%;
    position: relative;
}

.col-3:first-child .process-step:before {
    content: '1';
}

.col-3:nth-child(2) .process-step:before {
    content: '2';
}

.col-3:nth-child(3) .process-step:before {
    content: '3';
}

.col-3:last-child .process-step:before {
    content: '4';
}

.process-main .col-3:not(:first-child):before {
    content: "";
    display: block;
    position: absolute;
    width: 100%;
    height: 4px;
    top: 17.5px;
    left: calc(-50% + 20px);
    right: 0;
    background: #ebebeb;
    border: 2px #ebebeb solid;
    -o-transition: .4s;
    -ms-transition: .4s;
    -moz-transition: .4s;
    -webkit-transition: .4s;
    transition: .4s;
}

.process-step-cont {
    font-family: sans-serif;
    font-size: 16px;
    text-transform: uppercase;
    text-decoration: none;
    white-space: nowrap;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    align-content: space-between;
}

.process-step {
    border: 5px #ebebeb solid;
    border-radius: 100%;
    line-height: 0;
    background: #959595;
    text-align: center;
    align-items: center;
    justify-content: center;
    align-self: center;
    display: flex;
    color: #fff;
    width: 35px;
    height: 35px;
    font-weight: 700;
    margin-bottom: 7px;
    z-index: 4;
    cursor: pointer;
}

.process-label {
    color: #959595;
    font-weight: 600;
    width: 100%;
    text-align: center;
}

.process-dots {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #ebebeb;
    cursor: pointer;
}

.process-dot-cont {
    display: flex;
    justify-content: space-around;
    align-items: stretch;
    width: 60%;
    padding-top: 5px;
}

.active-step1 .col-3:first-child .process-step,
.active-step1 .col-3:first-child .process-dots:first-child,
.active-step1-mini2 .col-3:first-child .process-step,
.active-step1-mini2 .col-3:first-child .process-dots:nth-child(-n+2),
.active-step1-mini3 .col-3:first-child .process-step,
.active-step1-mini3 .col-3:first-child .process-dots:nth-child(-n+3),
.active-step1-mini4 .col-3:first-child .process-step,
.active-step1-mini4 .col-3:first-child .process-dots:nth-child(-n+4) {
    background-color: #f89828;
}

.active-step1-mini2 .col-3:first-child .process-dots:first-child,
.active-step1-mini3 .col-3:first-child .process-dots:nth-child(-n+2),
.active-step1-mini4 .col-3:first-child .process-dots:nth-child(-n+3) {
    background-color: #fbcb93;
}

.active-step1 .col-3:first-child .process-label,
.active-step1-mini3 .col-3:first-child .process-label,
.active-step1-mini2 .col-3:first-child .process-label,
.active-step1-mini4 .col-3:first-child .process-label {
    color: #f89828;
}

.active-step2 .col-3:first-child,
.active-step3 .col-3:nth-child(-n+2),
.active-step4 .col-3:nth-child(-n+3) {
    opacity: 0.5;
    /*pointer-events: none;*/
}

.active-step2 .col-3:first-child .process-step:before,
.active-step3 .col-3:nth-child(-n+2) .process-step:before,
.active-step4 .col-3:nth-child(-n+3) .process-step:before {
    content: '\2713';
    padding: 7px;
}

.active-step2 .col-3:nth-child(-n+2) .process-step,
.active-step2 .col-3:nth-child(-n+2) .process-dots,
.active-step3 .col-3:nth-child(-n+3) .process-step,
.active-step3 .col-3:nth-child(-n+3) .process-dots,
.active-step4 .col-3:nth-child(-n+4) .process-step,
.active-step4 .col-3:nth-child(-n+4) .process-dots {
    background-color: #f89828;
}

.active-step2 .col-3:nth-child(-n+2) .process-label,
.active-step3 .col-3:nth-child(-n+3) .process-label,
.active-step4 .col-3:nth-child(-n+4) .process-label {
    color: #f89828;
}

.active-step2 .col-3:nth-child(-n+2):before,
.active-step3 .col-3:nth-child(-n+3):before,
.active-step4 .col-3:nth-child(-n+4):before {
    background: #f89828 !important;
}

@media screen and (max-width: 640px) {
    .process-main {
        flex-wrap: wrap;
    }

    .col-3 {
        width: 50%;
    }

    .process-main .col-3:nth-of-type(3):not(:first-child):before {
        top: -19.5px;
        left: calc(-50% + 145px);
        transform: rotate(150deg);
    }
}
</style>
<section>
    <div class="container">
        <div class="d-flex flex-wrap py-4 my-2">


            <?php
if ($orderlis == true) {
$pid=$_GET['id'];
    $psql = "SELECT * FROM `orderlist` WHERE product_name='$pid' and userid='$orderlis'";
    $res1 = mysqli_query($conn,$psql);
    if (mysqli_num_rows($res1) > 0) {
        // output data of each row
        while($pdata = mysqli_fetch_assoc($res1)) {

?>
            <?php
     $psql1 = "SELECT * FROM `product_table` WHERE product_id='$pid'";
     $res2 = mysqli_query($conn,$psql1);
     if (mysqli_num_rows($res2) > 0) {
        // output data of each row
        while($pdata1 = mysqli_fetch_assoc($res2)) {

    ?>
            <div class="col-md-6">

                <img src="./admin/api/product_img/<?php echo $pdata1['product_img1']  ?>" height="500px" width="100%"
                    alt="">

            </div>
            <div class="col-md-6">
                <h4>
                    <b>
                        <?php  echo $pdata1['product_name']  ?>
                    </b>
                </h4>
                <hr class="mt-1">
                <h6>

                    <span style="    font-weight: 500;    font-size: 18px;"><b> Price : </b></span>

                    <span style="font-size: 17px;"> <?php  echo $pdata['price']  ?> </span>
                </h6>

                <h6 class="my-2">

                    <span style="font-weight: 500;font-size: 18px;"> <b> Quntity : </b></span>

                    <span style="font-size: 17px;"> <?php  echo $pdata['quntity']  ?> </span>
                </h6>


                <h6 class="my-2">

                    <span style="font-weight: 500;font-size: 18px;"> <b> Total : </b></span>

                    <span style="font-size: 17px;"> <?php  echo $pdata['quntity']*$pdata['price']  ?> </span>
                </h6>
                <div class="col-12 py-2 my-3"
                    style="     box-shadow: 0 0px 1px rgba(0,0,0,0.3), 0 15px 1px rgba(0,0,0,-1.78);">
                    <a href="./invioce.php? pid=<?php echo $_GET['id']  ?> &&  tr=<?php echo $_GET['tr']  ?>"
                        class="col-12 d-flex">
                        <div class="col-10">
                            <h6 class="text-dark">
                                Invioce
                            </h6>
                        </div>
                        <div class="col-2">
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-caret-right text-dark" viewBox="0 0 16 16">
                                    <path
                                        d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753" />
                                </svg>
                            </center>
                        </div>

                    </a>
                </div>
                <p id="orderstatus"><?php echo $pdata['orderstatus'] ?>
</p>

                <center>
                    <h5 class="my-3"><b>
                            Traking Status
                        </b></h5>
                </center>
                <div class="process-wrap active-step1 my-4">
                    <div class="process-main">
                        <div class="col-3 ">
                            <div class="process-step-cont">
                                <div class="process-step step-1" id='step2'></div>
                                <p class="process-label">Order Confirmed</p>

                            </div>
                        </div>
                        <div class="col-3 ">
                            <div class="process-step-cont" id='step2'>
                                <div class="process-step step-2"></div>
                                <p class="process-label">Shipped</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="process-step-cont" id='step2'>
                                <div class="process-step step-3"></div>
                                <p class="process-label"> Delivery</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="process-step-cont" id='step2'>
                                <div class="process-step step-4"></div>
                                <p class="process-label">Return</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script>
            var status = '<?php  echo $pdata['orderstatus']     ?>'


            statuschange(status)

            function statuschange(bute) {


                switch (bute) {
                    //      case "Confirmed": 
                    //    $(".process-wrap").addClass("active-step1")
                    //     break;
                    //   case 'Shipped': 
                    //      $(".process-wrap").attr('class', 'process-wrap');
                    // $(this).parents(".process-wrap").addClass("active-step2")
                    //     break;
                    //   case 'Delivery': 
                    //      $(".process-wrap").attr('class', 'process-wrap');
                    //     $(this).parents(".process-wrap").addClass("active-step3")
                    //     break;
                    //   case 'Return': 
                    //      $(".process-wrap").attr('class', 'process-wrap');
                    //     $(this).parents(".process-wrap").addClass("active-step4 ")
                    //     break;		
                    //   default:
                    //     $(".process-wrap").attr('class', 'process-wrap');
                }
            }

            // }


            /**This is just a demo to add the process classes**/
            // $(document).ready(function($) {
            //     $(".process-step").click(function() {
            //         var theClass = $(this).attr("class").match(/(^|\s)step-\S+/g);
            //         var bute = $.trim(theClass);
            //         switch (bute) {
            //             case "step-1":
            //                 $(".process-wrap").addClass("active-step1")
            //                 break;
            //             case 'step-2':
            //                 $(".process-wrap").attr('class', 'process-wrap');
            //                 $(this).parents(".process-wrap").addClass("active-step2")
            //                 break;
            //             case 'step-3':
            //                 $(".process-wrap").attr('class', 'process-wrap');
            //                 $(this).parents(".process-wrap").addClass("active-step3")
            //                 break;
            //             case 'step-4':
            //                 $(".process-wrap").attr('class', 'process-wrap');
            //                 $(this).parents(".process-wrap").addClass("active-step4 ")
            //                 break;
            //             default:
            //                 $(".process-wrap").attr('class', 'process-wrap');
            //         }
            //     })

            //     $(".process-dots").click(function() {
            //         if ($(this).hasClass("ship-process-dot-1")) {
            //             $(".process-wrap").attr('class', 'process-wrap active-step1')
            //             $(this).parents().find(".process-wrap").addClass("active-step1")

            //         }
            //         if ($(this).hasClass("ship-process-dot-2")) {
            //             $(".process-wrap").attr('class', 'process-wrap active-step1')
            //             $(this).parents().find(".process-wrap").addClass("active-step1-mini2")

            //         }
            //         if ($(this).hasClass("ship-process-dot-3")) {
            //             $(".process-wrap").attr('class', 'process-wrap active-step1')
            //             $(this).parents().find(".process-wrap").addClass("active-step1-mini3")

            //         }
            //         if ($(this).hasClass("ship-process-dot-4")) {
            //             $(".process-wrap").attr('class', 'process-wrap active-step1')
            //             $(this).parents().find(".process-wrap").addClass("active-step1-mini4")
            //         }
            //     });

            // });
            </script>

            <?php
        }




    }
    
    else{
$vsql="SELECT * FROM `variation` WHERE variationid='$pid'";
$vresult = mysqli_query($conn, $vsql);
if (mysqli_num_rows($vresult) > 0) {
    while($vrow = mysqli_fetch_assoc($vresult)) {


?>


<div class="col-md-6">

<img src="./admin/api/product_img/<?php  echo proimg($vrow['product_name'])  ?>" height="500px" width="100%"
    alt="">

</div>
<div class="col-md-6">
<h4>
    <b>
        <?php  echo $vrow['name']  ?>
    </b>
</h4>
<hr class="mt-1">
<h6>

    <span style="    font-weight: 500;    font-size: 18px;"><b> Price : </b></span>

    <span style="font-size: 17px;"> <?php  echo $pdata['price']  ?> </span>
</h6>

<h6 class="my-2">

    <span style="font-weight: 500;font-size: 18px;"> <b> Quntity : </b></span>

    <span style="font-size: 17px;"> <?php  echo $pdata['quntity']  ?> </span>
</h6>


<h6 class="my-2">

    <span style="font-weight: 500;font-size: 18px;"> <b> Total : </b></span>

    <span style="font-size: 17px;"> <?php  echo $pdata['quntity']*$pdata['price']  ?> </span>
</h6>
<div class="col-12 py-2 my-3"
    style="     box-shadow: 0 0px 1px rgba(0,0,0,0.3), 0 15px 1px rgba(0,0,0,-1.78);">
    <a href="./invioce.php? pid=<?php echo $_GET['id']  ?> &&  tr=<?php echo $_GET['tr']  ?>"
        class="col-12 d-flex">
        <div class="col-10">
            <h6 class="text-dark">
                Invioce
            </h6>
        </div>
        <div class="col-2">
            <center>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-caret-right text-dark" viewBox="0 0 16 16">
                    <path
                        d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753" />
                </svg>
            </center>
        </div>

    </a>
</div>
<p id="orderstatus">
<?php echo $pdata['orderstatus'] ?>
</p>
<center>
    <h5 class="my-3"><b>
            Traking Status
        </b></h5>
</center>
<div class="process-wrap active-step1 my-4">
    <div class="process-main">
        <div class="col-3 ">
            <div class="process-step-cont">
                <div class="process-step step-1" id='step2'></div>
                <p class="process-label">
                Awaiting Shipment
                </p>

            </div>
        </div>
        <div class="col-3 ">
            <div class="process-step-cont" id='step2'>
                <div class="process-step step-2"></div>
                <p class="process-label">Shipped</p>
            </div>
        </div>
        <div class="col-3">
            <div class="process-step-cont" id='step2'>
                <div class="process-step step-3"></div>
                <p class="process-label"> Out for Delivery</p>
            </div>
        </div>
        <div class="col-3">
            <div class="process-step-cont" id='step2'>
                <div class="process-step step-4"></div>
                <p class="process-label">Deliverd</p>
            </div>
        </div>
    </div>
</div>

</div>




            <?php
    }
}
    }

}
}
?>

        </div>
    </div>
</section>

<?php

}
else{
    header('Location:index.php');
}
include "./include/footer.php";

?>

<script>
 var bute=document.getElementById("orderstatus").innerText;
	
    switch (bute) { 
         case "step-1": 
       $(".process-wrap").addClass("active-step1")
        break;
      case 'Shipped': 
         $(".process-wrap").attr('class', 'process-wrap');
        $(this).parents(".process-wrap").addClass("active-step2")
        break;
      case 'Out for Delivery': 
         $(".process-wrap").attr('class', 'process-wrap');
        $(this).parents(".process-wrap").addClass("active-step3")
        break;
      case 'Deliverd': 
         $(".process-wrap").attr('class', 'process-wrap');
        $(this).parents(".process-wrap").addClass("active-step4 ")
        break;		
      default:
        $(".process-wrap").attr('class', 'process-wrap');
    }
 




  $(".process-dots").click(function() {
    if ($(this).hasClass("ship-process-dot-1"))  {
       $(".process-wrap").attr('class', 'process-wrap active-step1')
        $(this).parents().find(".process-wrap").addClass("active-step1")
      
      }
    if ($(this).hasClass("ship-process-dot-2"))  {
      $(".process-wrap").attr('class', 'process-wrap active-step1')
        $(this).parents().find(".process-wrap").addClass("active-step1-mini2")
        
      }
    if ($(this).hasClass("ship-process-dot-3"))  {
      $(".process-wrap").attr('class', 'process-wrap active-step1')
        $(this).parents().find(".process-wrap").addClass("active-step1-mini3")

      }
    if ($(this).hasClass("ship-process-dot-4"))  {
      $(".process-wrap").attr('class', 'process-wrap active-step1')
        $(this).parents().find(".process-wrap").addClass("active-step1-mini4")
      }
   });
  
;







</script>

<?php
function proimg($prid){
global $conn,$proname;
$psql = "SELECT * FROM `product_table` WHERE product_id='$prid'";
$presult = mysqli_query($conn, $psql);

if (mysqli_num_rows($presult) > 0) {

while($prow = mysqli_fetch_assoc($presult)) {
  $proname=$prow['product_img1'];
}
}
return $proname;
}

?>