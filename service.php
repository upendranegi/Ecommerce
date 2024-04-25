<?php

include "./include/header.php";
require "./admin/conn/conn.php";
$username3=$_SESSION["Adobeuserdata12"];
function datesale(){
    $currentDate = new DateTime();

// Print dates for the next 15 days
for ($i = 0; $i < 16; $i++) {
    // Clone current date and add $i days to it
    $date = clone $currentDate;
    $date->modify("+$i day");

    // Format date as "Month Name Day, Year"
    $formattedDate = $date->format('j F');

    // Print the formatted date
  
}
  return $formattedDate ;
}




?>
<style>
p {
    margin-bottom: 0px;
    font-size: 15px;
    font-weight: 400;
    color: #000000;
    line-height: 24px;
}
</style>

<?php

if ($username3 == true) {
?>

<?php
     $pname = $_GET['productname'];
    $sd = "SELECT * FROM `product_table` WHERE product_id='$pname'";
    $r12 = mysqli_query($conn, $sd);

    if (mysqli_num_rows($r12) > 0) {
    
        while ($rowdata = mysqli_fetch_assoc($r12)) {

    ?>
<section>
    <div class="container my-md-2 py-md-2">
        <div class="d-flex flex-wrap ">

            <div class="col-lg-7">
<div class="col-12">
                <div id="carousel" class="carousel slide gallery" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-slide-number="0" data-toggle="lightbox"
                            data-gallery="gallery" data-remote="https://source.unsplash.com/vbNTwfO9we0/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img1']  ?>"
                                class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php
                                    if (empty($rowdata['product_img2'])) {
                                    } else {


                                    ?>
                        <div class="carousel-item" data-slide-number="1" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/DEhwkPYevhE/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img2']  ?>"
                                class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                    if (empty($rowdata['product_img3'])) {
                                    } else {
                                    ?>

                        <div class="carousel-item" data-slide-number="2" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/-RV5PjUDq9U/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img3']  ?>"
                                class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                    if (empty($rowdata['product_img4'])) {
                                    } else {
                                    ?>
                        <div class="carousel-item" data-slide-number="3" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/sd0rPap7Uus/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img4']  ?>"
                                class="d-block w-100" class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                    if (empty($rowdata['product_img5'])) {
                                    } else {
                                    ?>
                        <div class="carousel-item" data-slide-number="4" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/kmRZFcZEMY8/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img5']  ?>"
                                class="d-block w-100" class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                    if (empty($rowdata['product_img6'])) {
                                    } else {
                                    ?>
                        <div class="carousel-item" data-slide-number="5" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/HJDdrWtlkIY/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img6']  ?>"
                                class="d-block w-100" class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                    if (empty($rowdata['product_img7'])) {
                                    } else {
                                    ?>
                        <div class="carousel-item" data-slide-number="6" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/VfuJpt81JZo/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img7']  ?>"
                                class="d-block w-100" class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                    if (empty($rowdata['product_img8'])) {
                                    } else {
                                    ?>
                        <div class="carousel-item" data-slide-number="7" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/NLkXZQ7kHzI/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img8']  ?>"
                                class="d-block w-100" class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }

                                    ?>

                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-fullscreen" href="#carousel" role="button">
                        <span class="carousel-fullscreen-icon" aria-hidden="true"></span>
                        <span class="sr-only">Fullscreen</span>
                    </a>
                    <a class="carousel-pause pause" href="#carousel" role="button">
                        <span class="carousel-pause-icon" aria-hidden="true"></span>
                        <span class="sr-only">Pause</span>
                    </a>
                </div>


                <div id="carousel-thumbs" class="carousel slide" data-ride="carousel" style="    position: static;     display: flex;
    justify-content: center;
">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-slide-number="0">
                            <div class="d-flex mx-0 ">
                                <div id="carousel-selector-0" class="thumb col-3 px-1 py-2 selected"
                                    data-target="#carousel" data-slide-to="0">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img1']  ?>" alt="..."
                                        style="width:87% ;     height: 120px; object-fit: contain; ">
                                </div>
                                <?php
                                            if (empty($rowdata['product_img2'])) {
                                            } else {
                                            ?>
                                <div id="carousel-selector-1" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="1">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img2']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px; object-fit: contain; ">
                                </div>
                                <?php   }
                                            if (empty($rowdata['product_img3'])) {
                                            } else {
                                            ?>
                                <div id="carousel-selector-2" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="2">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img3']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;   height: 120px; object-fit: contain; ">
                                </div>
                                <?php   }
                                            if (empty($rowdata['product_img4'])) {
                                            } else {
                                            ?>
                                <div id="carousel-selector-3" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="3">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img4']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px; object-fit: contain; ">
                                </div>
                                <?php   }

                                            ?>
                            </div>
                        </div>
                        <?php
                                    if (empty($rowdata['product_img5']) and empty($rowdata['product_img6']) and empty($rowdata['product_img7']) and empty($rowdata['product_img8'])) {
                                    } else {
                                    ?>

                        <div class="carousel-item " data-slide-number="1">
                            <div class="row mx-0">
                                <?php
                                                if (empty($rowdata['product_img5'])) {
                                                } else {
                                                ?>
                                <div id="carousel-selector-4" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="4">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img5']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px; object-fit: contain;  ">
                                </div>
                                <?php   }
                                                if (empty($rowdata['product_img6'])) {
                                                } else {
                                                ?>
                                <div id="carousel-selector-5" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="5">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img6']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px; object-fit: contain; ">
                                </div>
                                <?php   }
                                                if (empty($rowdata['product_img7'])) {
                                                } else {
                                                ?>
                                <div id="carousel-selector-6" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="6">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img7']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px; object-fit: contain;">
                                </div>
                                <?php   }
                                                if (empty($rowdata['product_img8'])) {
                                                } else {
                                                ?>
                                <div id="carousel-selector-7" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="7">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img8']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px;  object-fit: contain;">
                                </div>
                                <?php   }

                                                ?>
                            </div>
                        </div>

                        <?php

                                    }
                                    ?>

                    </div>



                    <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
            </div>

            <div class="col-lg-5 my-3 my-md-0">


                <h2 style="    font-size: 22px;    font-weight: 600;" id="pdname"><?PHP echo $rowdata['product_name']   ?></h2>
                <p style="font-size: 22px;    font-weight: 600; display:none ;" id="pdidc"><?PHP echo $rowdata['product_id'] ?></p>
                <hr style="background-color: #a19a9a;" class="my-1">



                <?php
                            if (!empty($rowdata['Color'])) {
                            ?>
                <p class="my-2">
                    <b> COLOUR : </b>
                    <?PHP echo $rowdata['Color']   ?>
                </p>
                <?php
                            }
                            ?>

<?php                              $pid = $rowdata['product_id'];
                                $vardata = "SELECT * FROM `variation` WHERE product_name='$pid'";
                                $vrid = mysqli_query($conn, $vardata);

                                if (mysqli_num_rows($vrid) > 0) {
                                ?>
                <div class="col-12 d-flex my-2 px-2 py-1 " style="   border: 1px solid; overflow:hidden;   border-radius: 23px;">

                   
                    <select id="cars" class="col-12" style="     background: transparent;   width: 98%; height:100%;    padding: 5px 12px;   outline: none !important;  border: none !important;"
                        onchange="showUser(this)">
                      
                        <?php
                                        // output data of each row
                                        while ($variationame = mysqli_fetch_assoc($vrid)) {


                                        ?>


                        <option style="width:100%" value="<?php echo  $variationame['variationid']   ?>">
                            <?php echo  $variationame['variation_name']   ?></option>

                        <?php
                                        }
                                        ?>
                    </select>
                    



                </div>
                <?php
                                }
                                ?>

                <?php if($rowdata['Quantity']<=5){  ?>
                <p class="my-0" style="color:red;">
                    <b>
                        Only <?php echo $rowdata['Quantity']  ?> left
                    </b>
                </p>
                <?php } ?>
                <h6 class="my-2">
                    <b>
                        Rs. : $ <span id="prices"> <?php echo $rowdata['Prices']  ?></span>
                    </b>

                </h6>

                <ul>
                    <li class="my-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path
                                d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                            <path
                                d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                        </svg> Incl. Of All Taxes
                    </li>
                    <li class="my-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path
                                d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                            <path
                                d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                        </svg> In stock (Free Delivery)
                    </li>
                </ul>







                <div class="col-12 my-3 px-0">
                    <div class="d-flex flex-wrap my-2" style="  ">
                        <div class="col-10 py-2 px-3">
                            <p class="my-2"> <b> Delivery and return policies
                                </b>
                            </p>
                        </div>
                        <div class="col-2 d-flex flex-wrap flex-column align-items-end  py-2"> <span
                                onclick="showfun(this)" class="px-2"
                                style="cursor:pointer ; transition: height ease-in-out;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg></span>


                            <span onclick="showfun(this)" class="px-2"
                                style="display: none;  cursor:pointer ; transition: height ease-in-out;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-dash" viewBox="0 0 16 16">
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                </svg>
                            </span>


                        </div>

                        <div class="col-12 ">
                            <div class="mt-1 mb-2"
                                style="display: none; color: #6d7e8e; transition: display ease-in-out;">
                                <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5" />
                                    </svg>
                                    Order today to get by <?php echo datesale()  ?>
                                </p>

                                <p class="my-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z" />
                                    </svg>
                                    Returns & exchanges accepted

                                    within 30 days
                                </p>

                                <p class="my-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-truck" viewBox="0 0 16 16">
                                        <path
                                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                                    </svg> Free delivery
                                </p>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-12 my-3 px-0">
                    <div class="d-flex flex-wrap my-2" style="  ">
                        <div class="col-10 py-2 px-3">
                            <p>
                                <b>
                                    Personalisation :
                                </b>
                            </p>
                            <h5 class="my-2">
                            </h5>
                        </div>
                        <div class="col-2 d-flex flex-wrap flex-column align-items-end  py-2"> <span
                                onclick="showfun(this)" class="px-2"
                                style="cursor:pointer ; display: none; transition: height ease-in-out;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg></span>


                            <span onclick="showfun(this)" class="px-2"
                                style="display: ;  cursor:pointer ; transition: height ease-in-out;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-dash" viewBox="0 0 16 16">
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                </svg>
                            </span>


                        </div>

                        <div class="col-12 ">
                            <div class="mt-1 mb-2" style="display: ; color: #6d7e8e; transition: height ease-in-out;">

                                <input type="text" class="py-2 px-1" onkeyup="addvalues(this)" id="personlisation"
                                    placeholder="Personalisation"
                                    style="width: 95%; border-radius:14px; border-color:#000000;">
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                .qty-container {
                    display: flex;

                }

                .qty-container .input-qty {
                    text-align: center;
                    padding: 6px 10px;
                    border: 1px solid #d4d4d4;
                    max-width: 80px;
                }

                .qty-container .qty-btn-minus,
                .qty-container .qty-btn-plus {
                    border: 1px solid #d4d4d4;
                    padding: 10px 13px;
                    font-size: 10px;
                    height: 38px;
                    width: 38px;
                    transition: 0.3s;
                }

                .qty-container .qty-btn-plus {
                    margin-left: -1px;
                    background-color: #a19a9a;
                    border-color: #a19a9a;
                }

                .qty-btn-plus:focus-visible {
                    border-color: #a19a9a;
                }

                .qty-container .qty-btn-minus {
                    margin-right: -1px;
                }
                </style>
                <div class="my-2">
                    <p class="my-2">
                        <b>
                            Quantity:
                        </b>

                    </p>
                    <p id="quantity" style="display: none;"><?php echo $rowdata['Quantity']  ?>
                    </p>

                    <div class="qty-container my-3">
                        <button class="qty-btn-minus btn-light" onclick="decrincrement(this)" type="button"><i
                                class="fa fa-minus"></i></button>
                        <input type="number" name="qty" value="1" class="input-qty" id="quntyes142" readonly />
                        <button class="qty-btn-plus btn-light" onclick="increment(this)"><i
                                class="fa fa-plus text-light"></i></button>
                    </div>
                </div>

                <div class="d-flex flex-wrap">
                    <div class="col-md-6 col-12">
                        <Button onclick="cartdata()" class="btn px-4 px-md-5 mx-2  my-2 w-100"
                            style="border-radius: 15px; background-color:#a19a9a; color:white;"> Add to cart</Button>

                    </div>
                    <div class="col-md-6 col-12">

                        <a onclick="addtodata()" class="btn btn-success px-5 mx-2 my-2 text-light w-100"
                            style="border-radius: 15px;"> <b>
                                Buy Now </a>

                    </div>




                </div>



                <form action="./api/addtocart.php" method="post" id="cartform" style="display:none;">
                    <input type="text" value="<?PHP echo $username3  ?>" name="userid" id="userid">
                    <input type="text" value="" name="productname" id="productdatana">
                    <input type="text" name="quty" id="adqunty145">
                    <input type="text" name="price" id="prised145">

                    <input type="text" name="personli" id="personlised">



                </form>





                <form id="buyform" action="./api/addtobuy.php" method="post" style="Display:none;">
                    <input type="text" name="user" value="<?PHP echo $username3  ?>" id="user">
                    <input type="text" name="name" id="productname">
                    <input type="text" name="qunty" value="<?PHP  echo $rowdata['Quantity']  ?>">
                    <input type="text" name="fquty" id="qunty145">
                    <input type="text" name="Priseds" id="prrs">
                    <input type="text" name="personli" id="personlia">
                    <input type="text" name="pdid" id="psdis">
                </form>



                <div>

                </div>

            </div>


        </div>

        <section>
            <div class="container">

                <div class=" my-4">




                    <div id="Menu3" class="my-4" style="display: block;">
                        <table class="table   my-3">
                            <tr>
                                <th>
                                    Product Dimensions
                                </th>
                                <td>
                                    <?php echo  $rowdata['Dimensions'] ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    Colour
                                </th>
                                <td>
                                    <?php echo  $rowdata['Color'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Overall Dimension
                                </th>
                                <td>
                                    <?php echo  $rowdata['Overall_Dimension'] ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    No. of Bulb Holders
                                </th>
                                <td>
                                    <?php echo  $rowdata['bulbHolder'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Holder & Plug Type
                                </th>
                                <td>
                                    <?php echo  $rowdata['Holder&Plug_Type'] ?>

                                </td>
                            </tr>

                            <tr>
                                <th>
                                    Package Contents
                                </th>
                                <td>

                                    <?php echo  $rowdata['Package_Contents'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Bulb Provided
                                </th>
                                <td>

                                    <?php echo  $rowdata['Bulb_Provided'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Product Material
                                </th>
                                <td>
                                    <?php echo  $rowdata['Material'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Product Weight (KG)
                                </th>
                                <td>
                                    <?php echo  $rowdata['weight'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Country Of Origin
                                </th>
                                <td>
                                    <?php echo  $rowdata['CountryOf_Origin'] ?>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>
        </section>
        <section>
            <div class="container py-3">
                <div class="row">

                    <div class="col-6">

                        <center>
                            <h5>
                                <b>
                                    Ratings & Reviews
                                </b>
                            </h5>
                        </center>
                    </div>
                    <div class="col-6">
                        <center> <a href="#reviewform" class="btn  btn-dark"> <b> Rate Product </b> </a>
                        </center>
                    </div>
                </div>

                <div class="col-12">

                    <?php  
                $rvireid=$rowdata['product_id'];

                    $reviewsql="SELECT * FROM `review` WHERE  product_id='$rvireid' And  pstatus='1'";
                    $reviwes = mysqli_query($conn, $reviewsql);

                if (mysqli_num_rows($reviwes) > 0) {
                 // output data of each row
                     while($reviewdata = mysqli_fetch_assoc($reviwes)) {
  

                ?>
                    <hr>
                    <div class="col-12">
                        <p class="my-1" style="    font-weight: 600; font-size: 16px;">
                            <?php echo $reviewdata['name']    ?>
                        </p>
                        <?php
                
                    switch ($reviewdata['rating']) {
                     case 5:
                    ?>
                        <p class="my-1" style="    font-size: 23px;    color: #ffc107;">
                            &bigstar;
                            &bigstar;
                            &bigstar;
                            &bigstar;
                            &bigstar;
                        </p>

                        <?php
                         break;
                     case 4:
                     ?>
                        <p class="my-1" style="    font-size: 23px;    color: #ffc107;">
                            &bigstar;
                            &bigstar;
                            &bigstar;
                            &bigstar;

                        </p>

                        <?php
                    break;
                    case 3:
                         ?>
                        <p class="my-1" style="    font-size: 23px;    color: #ffc107;">
                            &bigstar;
                            &bigstar;
                            &bigstar;

                        </p>

                        <?php


                     break;
                    case 3:
                         ?>
                        <p class="my-1" style="    font-size: 23px;    color: #ffc107;">
                            &bigstar;


                        </p>

                        <?php
                     break;
                      default:
                        ?>
                        <p class="my-1" style="    font-size: 23px;    color: #ffc107;">
                            &bigstar;


                        </p>

                        <?php
    
                        }




                        ?>

                        <p class="my-1">


                            <?php echo $reviewdata['product_rview']    ?>

                        </p>
                    </div>
                    <?php

                        }
                    } 
                    ?>
                    <hr>
                </div>
                <form class="col-12 d-flex flex-wrap" id="reviewform" action="./api/produt_review.php" method="post">
                    <div class="col-12 my-3">
                        <center>
                            <h3>
                                Rate our Product
                            </h3>
                        </center>
                    </div>


                    <style>
                    .rating-group {
                        display: inline-flex;
                    }

                    /* make hover effect work properly in IE */
                    .rating__icon {
                        pointer-events: none;
                    }

                    /* hide radio inputs */
                    .rating__input {
                        position: absolute !important;
                        left: -9999px !important;
                    }

                    /* set icon padding and size */
                    .rating__label {
                        cursor: pointer;
                        padding: 0 0.1em;
                        font-size: 2rem;
                        margin: 0px 0px;
                    }

                    /* set default star color */
                    .rating__icon--star {
                        color: orange;
                    }

                    /* set color of none icon when unchecked */
                    .rating__icon--none {
                        color: #eee;
                    }

                    /* if none icon is checked, make it red */
                    .rating__input--none:checked+.rating__label .rating__icon--none {
                        color: red;
                    }

                    /* if any input is checked, make its following siblings grey */
                    .rating__input:checked~.rating__label .rating__icon--star {
                        color: #ddd;
                    }

                    /* make all stars orange on rating group hover */
                    .rating-group:hover .rating__label .rating__icon--star {
                        color: orange;
                    }

                    /* make hovered input's following siblings grey on hover */
                    .rating__input:hover~.rating__label .rating__icon--star {
                        color: #ddd;
                    }

                    /* make none icon grey on rating group hover */
                    .rating-group:hover .rating__input--none:not(:hover)+.rating__label .rating__icon--none {
                        color: #eee;
                    }

                    /* make none icon red on hover */
                    .rating__input--none:hover+.rating__label .rating__icon--none {
                        color: red;
                    }
                    }

                    #half-stars-example {

                        /* use display:inline-flex to prevent whitespace issues. alternatively, you can put all the children of .rating-group on a single line */
                        .rating-group {
                            display: inline-flex;
                        }

                        /* make hover effect work properly in IE */
                        .rating__icon {
                            pointer-events: none;
                        }

                        /* hide radio inputs */
                        .rating__input {
                            position: absolute !important;
                            left: -9999px !important;
                        }

                        /* set icon padding and size */
                        .rating__label {

                            cursor: pointer;
                            /* if you change the left/right padding, update the margin-right property of .rating__label--half as well. */
                            padding: 0 0.1em;
                            font-size: 2rem;
                        }

                        /* add padding and positioning to half star labels */
                        .rating__label--half {
                            padding-right: 0;
                            margin-right: -0.6em;
                            z-index: 2;
                        }

                        /* set default star color */
                        .rating__icon--star {
                            color: orange;
                        }

                        /* set color of none icon when unchecked */
                        .rating__icon--none {
                            color: #eee;
                        }

                        /* if none icon is checked, make it red */
                        .rating__input--none:checked+.rating__label .rating__icon--none {
                            color: red;
                        }

                        /* if any input is checked, make its following siblings grey */
                        .rating__input:checked~.rating__label .rating__icon--star {
                            color: #ddd;
                        }

                        /* make all stars orange on rating group hover */
                        .rating-group:hover .rating__label .rating__icon--star,
                        .rating-group:hover .rating__label--half .rating__icon--star {
                            color: orange;
                        }

                        /* make hovered input's following siblings grey on hover */
                        .rating__input:hover~.rating__label .rating__icon--star,
                        .rating__input:hover~.rating__label--half .rating__icon--star {
                            color: #ddd;
                        }

                        /* make none icon grey on rating group hover */
                        .rating-group:hover .rating__input--none:not(:hover)+.rating__label .rating__icon--none {
                            color: #eee;
                        }

                        /* make none icon red on hover */
                        .rating__input--none:hover+.rating__label .rating__icon--none {
                            color: red;
                        }
                    }

                    #full-stars-example-two {

                        /* use display:inline-flex to prevent whitespace issues. alternatively, you can put all the children of .rating-group on a single line */
                        .rating-group {
                            display: inline-flex;
                        }

                        /* make hover effect work properly in IE */
                        .rating__icon {
                            pointer-events: none;
                        }

                        /* hide radio inputs */
                        .rating__input {
                            position: absolute !important;
                            left: -9999px !important;
                        }

                        /* hide 'none' input from screenreaders */
                        .rating__input--none {
                            display: none
                        }

                        /* set icon padding and size */
                        .rating__label {
                            cursor: pointer;
                            padding: 0 0.1em;
                            font-size: 2rem;
                        }

                        /* set default star color */
                        .rating__icon--star {
                            color: orange;
                        }

                        /* if any input is checked, make its following siblings grey */
                        .rating__input:checked~.rating__label .rating__icon--star {
                            color: #ddd;
                        }

                        /* make all stars orange on rating group hover */
                        .rating-group:hover .rating__label .rating__icon--star {
                            color: orange;
                        }

                        /* make hovered input's following siblings grey on hover */
                        .rating__input:hover~.rating__label .rating__icon--star {
                            color: #ddd;
                        }
                    }
                    </style>

                    <div class="col-12">
                        <label for="" class="m-0 my-1 text-dark" style="    justify-content: start;"> <span
                                style="font-size:18px; "> Product Rating </span> <span
                                style="font-size:18px;      font-weight: 500;">
                                :</span></label>
                        <div id="full-stars-example-two my-3">
                            <div class="rating-group">
                                <input disabled checked class="rating__input rating__input--none" name="rating3"
                                    id="rating3-none" value="0" type="radio" required>
                                <label aria-label="1 star" class="rating__label" for="rating3-1"><i
                                        class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio"
                                    required>
                                <label aria-label="2 stars" class="rating__label" for="rating3-2"><i
                                        class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio"
                                    required>
                                <label aria-label="3 stars" class="rating__label" for="rating3-3"><i
                                        class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio"
                                    required>
                                <label aria-label="4 stars" class="rating__label" for="rating3-4"><i
                                        class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio"
                                    required>
                                <label aria-label="5 stars" class="rating__label" for="rating3-5"><i
                                        class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio"
                                    required>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 my-1">
                        <label for="" class="m-0 my-1 text-dark" style="font-size:18px;     justify-content: start;">
                            Product Review :</label>
                        <textarea type="text" class="form-control" name="comment" id="" placeholder=""
                            aria-describedby="fileHelpId" required>  </textarea>
                    </div>

                    <div class="col-md-6 d-none">

                        <input type="text" class="form-control" name="proname"
                            value="<?php echo $rowdata['product_id']  ?>" id="" placeholder="Name"
                            aria-describedby="fileHelpId" required />
                    </div>



                    <div class="col-md-6 ">
                        <label for="" class="m-0 my-1 text-dark" style="font-size:18px;     justify-content: start;">
                            Name :</label>
                        <input type="text" class="form-control" name="name" id="" placeholder="Name"
                            aria-describedby="fileHelpId" required />
                    </div>
                    <div class="col-md-6 ">
                        <label for="" class="m-0 my-1 text-dark" style="font-size:18px;     justify-content: start;">
                            Email :</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $username3  ?>" id=""
                            placeholder="Email" aria-describedby="fileHelpId" />
                    </div>
                    <div class="col-12 my-3">
                        <center>
                            <button name="submit" class="btn btn-primary btn-lg px-4"> Submit </button>

                        </center>
                    </div>

                </form>
            </div>
        </section>



        </script>

        <?php
        }
    }

            ?>







    </div>
</section>


<?php
    } else {
        ?>

<?php
            $pname = $_GET['productname'];
            $sd = "SELECT * FROM `product_table` WHERE product_id='$pname'";
            $r12 = mysqli_query($conn, $sd);

            if (mysqli_num_rows($r12) > 0) {


                while ($rowdata = mysqli_fetch_assoc($r12)) {

            ?>
<section>
    <div class="container my-md-2 py-md-2">
        <div class="d-flex flex-wrap ">

            <div class="col-lg-7">

                <div id="carousel" class="carousel slide gallery" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-slide-number="0" data-toggle="lightbox"
                            data-gallery="gallery" data-remote="https://source.unsplash.com/vbNTwfO9we0/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img1']  ?>"
                                class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php
                                            if (empty($rowdata['product_img2'])) {
                                            } else {


                                            ?>
                        <div class="carousel-item" data-slide-number="1" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/DEhwkPYevhE/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img2']  ?>"
                                class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                            if (empty($rowdata['product_img3'])) {
                                            } else {
                                            ?>

                        <div class="carousel-item" data-slide-number="2" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/-RV5PjUDq9U/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img3']  ?>"
                                class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                            if (empty($rowdata['product_img4'])) {
                                            } else {
                                            ?>
                        <div class="carousel-item" data-slide-number="3" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/sd0rPap7Uus/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img4']  ?>"
                                class="d-block w-100" class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                            if (empty($rowdata['product_img5'])) {
                                            } else {
                                            ?>
                        <div class="carousel-item" data-slide-number="4" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/kmRZFcZEMY8/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img5']  ?>"
                                class="d-block w-100" class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                            if (empty($rowdata['product_img6'])) {
                                            } else {
                                            ?>
                        <div class="carousel-item" data-slide-number="5" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/HJDdrWtlkIY/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img6']  ?>"
                                class="d-block w-100" class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                            if (empty($rowdata['product_img7'])) {
                                            } else {
                                            ?>
                        <div class="carousel-item" data-slide-number="6" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/VfuJpt81JZo/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img7']  ?>"
                                class="d-block w-100" class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }
                                            if (empty($rowdata['product_img8'])) {
                                            } else {
                                            ?>
                        <div class="carousel-item" data-slide-number="7" data-toggle="lightbox" data-gallery="gallery"
                            data-remote="https://source.unsplash.com/NLkXZQ7kHzI/1600x900.jpg">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img8']  ?>"
                                class="d-block w-100" class="d-block w-100" alt="..."
                                style="width: 460px; height: 470px; object-fit: contain; background-color: #fff;">
                        </div>
                        <?php   }

                                            ?>

                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-fullscreen" href="#carousel" role="button">
                        <span class="carousel-fullscreen-icon" aria-hidden="true"></span>
                        <span class="sr-only">Fullscreen</span>
                    </a>
                    <a class="carousel-pause pause" href="#carousel" role="button">
                        <span class="carousel-pause-icon" aria-hidden="true"></span>
                        <span class="sr-only">Pause</span>
                    </a>
                </div>


                <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-slide-number="0">
                            <div class="d-flex mx-0 ">
                                <div id="carousel-selector-0" class="thumb col-3 px-1 py-2 selected"
                                    data-target="#carousel" data-slide-to="0">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img1']  ?>" alt="..."
                                        style="width:87% ;   height: 120px; object-fit: contain;">
                                </div>
                                <?php
                                                    if (empty($rowdata['product_img2'])) {
                                                    } else {
                                                    ?>
                                <div id="carousel-selector-1" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="1">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img2']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;   height: 120px; object-fit: contain;">
                                </div>
                                <?php   }
                                                    if (empty($rowdata['product_img3'])) {
                                                    } else {
                                                    ?>
                                <div id="carousel-selector-2" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="2">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img3']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;   height: 120px; object-fit: contain;">
                                </div>
                                <?php   }
                                                    if (empty($rowdata['product_img4'])) {
                                                    } else {
                                                    ?>
                                <div id="carousel-selector-3" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="3">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img4']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px; object-fit: contain;">
                                </div>
                                <?php   }

                                                    ?>
                            </div>
                        </div>
                        <?php
                                            if (empty($rowdata['product_img5']) and empty($rowdata['product_img6']) and empty($rowdata['product_img7']) and empty($rowdata['product_img8'])) {
                                            } else {
                                            ?>

                        <div class="carousel-item " data-slide-number="1">
                            <div class="row mx-0">
                                <?php
                                                        if (empty($rowdata['product_img5'])) {
                                                        } else {
                                                        ?>
                                <div id="carousel-selector-4" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="4">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img5']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px; object-fit: contain; ">
                                </div>
                                <?php   }
                                                        if (empty($rowdata['product_img6'])) {
                                                        } else {
                                                        ?>
                                <div id="carousel-selector-5" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="5">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img6']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px; object-fit: contain;">
                                </div>
                                <?php   }
                                                        if (empty($rowdata['product_img7'])) {
                                                        } else {
                                                        ?>
                                <div id="carousel-selector-6" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="6">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img7']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px; object-fit: contain; ">
                                </div>
                                <?php   }
                                                        if (empty($rowdata['product_img8'])) {
                                                        } else {
                                                        ?>
                                <div id="carousel-selector-7" class="thumb col-3 px-1 py-2" data-target="#carousel"
                                    data-slide-to="7">
                                    <img src="./admin/api/product_img/<?php echo $rowdata['product_img8']  ?>"
                                        class="img-fluid" alt="..." style="width:87% ;  height: 120px; object-fit: contain;">
                                </div>
                                <?php   }

                                                        ?>
                            </div>
                        </div>

                        <?php

                                            }
                                            ?>

                    </div>



                    <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>

            <div class="col-lg-5  my-3 my-md-0">


                <h2 style="    font-size: 22px;    font-weight: 600;" id="pdname">
                    <?PHP echo $rowdata['product_name']   ?>
                </h2>
                <p style="    font-size: 22px;    font-weight: 600; display:none ; " id="pdidc"><?PHP echo $rowdata['product_id']   ?></p>
                <hr style="background-color: #a19a9a;" class="my-1">
                <?php if (!empty($rowdata['Color'])) { ?>
                <p class="my-2">
                    <b> COLOUR : </b>
                    <?PHP echo $rowdata['Color']   ?>
                </p>

                <?php }  ?>
                <?php
                                        $pid = $rowdata['product_id'];
                                        $vardata = "SELECT * FROM `variation` WHERE product_name='$pid'";
                                        $vrid = mysqli_query($conn, $vardata);

                                        if (mysqli_num_rows($vrid) > 0) {
                                        ?>

                <div class="col-12 d-flex my-2 px-2 py-1 " style="   border: 1px solid; overflow:hidden;   border-radius: 23px;">

                  
                    <select id="cars" style="     background: transparent;    width: 98%; height:100%;    padding: 5px 12px;   outline: none !important;  border: none !important;"
                        onchange="showUser(this)">
                        <option value=""
                            style="width: 100px;overflow: hidden;white-space: nowrap;  text-overflow: ellipsis; ">
                        </option>
                        <?php

                                                while ($variationame = mysqli_fetch_assoc($vrid)) {


                                                ?>


                        <option value="<?php echo  $variationame['variationid']   ?>"
                            style=" width: 100px;   overflow: hidden;white-space: nowrap; text-overflow: ellipsis; ">
                            <p> <?php echo  $variationame['variation_name']   ?> </p>
                        </option>


                        <?php
                                                }
                                                ?>
                    </select>
              



                </div>

                <?php
                                        }
                                        ?>

                <?php if($rowdata['Quantity']<=5){  ?>
                <p class="my-0" style="color:red;">
                    <b>
                        Only <?php echo $rowdata['Quantity']  ?> left
                    </b>
                </p>
                <?php } ?>

                <h6 class="my-2">
                    <b>
                        Rs. : $ <span id="prices"> <?php echo $rowdata['Prices']  ?></span>
                    </b>

                </h6>

                <ul>
                    <li class="my-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path
                                d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                            <path
                                d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                        </svg> Incl. Of All Taxes
                    </li>
                    <li class="my-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path
                                d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                            <path
                                d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                        </svg> In stock (Free Delivery)
                    </li>
                </ul>





                <div class="col-12 my-3 px-0">
                    <div class="d-flex flex-wrap my-2" style="  ">
                        <div class="col-10 py-2 px-3">
                            <p class="my-2"> <b> Delivery and return policies
                                </b>
                            </p>
                        </div>
                        <div class="col-2 d-flex flex-wrap flex-column align-items-end  py-2"> 

                        <span onclick="showfun(this)" class="px-2"
                                style=  cursor:pointer ; transition: display ease-in-out;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-dash" viewBox="0 0 16 16">
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                </svg>
                            </span>
                            
                        <span onclick="showfun(this)" class="px-2" style="display: none;cursor:pointer ;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg></span>


                            


                        </div>

                        <div class="col-12 ">
                            <div class="mt-1 mb-2"
                                style="display: ; color: #6d7e8e; height:100px;     transition:  height 4s ease-in-out;">
                                <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5" />
                                    </svg>
                                    Order today to get by <?php echo datesale()  ?>
                                </p>

                                <p class="my-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z" />
                                    </svg>
                                    Returns & exchanges accepted

                                    within 30 days
                                </p>

                                <p class="my-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-truck" viewBox="0 0 16 16">
                                        <path
                                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                                    </svg> Free delivery
                                </p>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-12 my-3 px-0">





                    <div class="d-flex flex-wrap my-2" style="  ">
                        <div class="col-10 py-2 px-3">
                            <p>
                                <b>
                                    Personalisation :
                                </b>
                            </p>
                            <h5 class="my-2">
                            </h5>
                        </div>
                        <div class="col-2 d-flex flex-wrap flex-column align-items-end  py-2"> 
                        <span onclick="showfun(this)" class="px-2"
                                style=  "cursor:pointer ; transition: display ease-in-out;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-dash" viewBox="0 0 16 16">
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                </svg>
                            </span>
                            
                        <span onclick="showfun(this)" class="px-2" style="display: none;  cursor:pointer ; "><svg
                                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg></span>


                        </div>

                        <div class="col-12 ">
                            <div class="mt-1 mb-2"
                                style="display: ; color: #6d7e8e; height:70px;     transition:  height 4s ease-in-out;">

                                <input type="text" class="py-2 px-1" onkeyup="addvalues(this)" id="personlisation"
                                    placeholder="Personalisation"
                                    style="width: 95%; border-radius:14px; border-color:#000000;">
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                .qty-container {
                    display: flex;

                }

                .qty-container .input-qty {
                    text-align: center;
                    padding: 6px 10px;
                    border: 1px solid #d4d4d4;
                    max-width: 80px;
                }

                .qty-container .qty-btn-minus,
                .qty-container .qty-btn-plus {
                    border: 1px solid #d4d4d4;
                    padding: 10px 13px;
                    font-size: 10px;
                    height: 38px;
                    width: 38px;
                    transition: 0.3s;
                }

                .qty-container .qty-btn-plus {
                    margin-left: -1px;
                    background-color: #a19a9a;
                    border-color: #a19a9a;
                }

                .qty-btn-plus:focus-visible {
                    border-color: #a19a9a;
                }

                .qty-container .qty-btn-minus {
                    margin-right: -1px;
                }
                </style>
                <div class="my-2">
                    <p class="my-2">
                        <b>
                            Quantity:
                        </b>

                    </p>
                    <p id="quantity" style="display: none;">
                        <?php echo $rowdata['Quantity']  ?>
                    </p>

                    <div class="qty-container my-3">
                        <button class="qty-btn-minus btn-light" onclick="decrincrement(this)" type="button"><i
                                class="fa fa-minus"></i></button>
                        <input type="text" name="qty" value="1" class="input-qty" readonly />
                        <button class="qty-btn-plus btn-light" onclick="increment(this)"><i
                                class="fa fa-plus text-light"></i></button>
                    </div>
                </div>

                <div class="d-flex flex-wrap">
                    <div class="col-md-6 col-12">
                        <button class="btn px-4 px-md-5 mx-2  my-2 w-100 " onclick="logdata(this)"
                            style="border-radius: 15px; background-color:#a19a9a; color:white;"> Add to cart</button>

                    </div>
                    <div class="col-md-6 col-12">


                        <button class="btn btn-success px-5 mx-2 my-2 text-light w-100" onclick="logdata(this)"
                            style="border-radius: 15px;"><b> Buy Now </b></button>
                    </div>



                </div>







                <div>

                </div>

            </div>


        </div>

        <section>
            <div class="container">

                <div class=" my-4">




                    <div id="Menu3" class="my-4" style="display: block;">
                        <table class="table  my-3">
                            <tr>
                                <th>
                                    Product Dimensions
                                </th>
                                <td>
                                    <?php echo  $rowdata['Dimensions'] ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    Colour
                                </th>
                                <td>
                                    <?php echo  $rowdata['Color'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Overall Dimension
                                </th>
                                <td>
                                    <?php echo  $rowdata['Overall_Dimension'] ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    No. of Bulb Holders
                                </th>
                                <td>
                                    <?php echo  $rowdata['bulbHolder'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Holder & Plug Type
                                </th>
                                <td>
                                    <?php echo  $rowdata['Holder&Plug_Type'] ?>

                                </td>
                            </tr>

                            <tr>
                                <th>
                                    Package Contents
                                </th>
                                <td>

                                    <?php echo  $rowdata['Package_Contents'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Bulb Provided
                                </th>
                                <td>

                                    <?php echo  $rowdata['Bulb_Provided'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Product Material
                                </th>
                                <td>
                                    <?php echo  $rowdata['Material'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Product Weight (KG)
                                </th>
                                <td>
                                    <?php echo  $rowdata['weight'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Country Of Origin
                                </th>
                                <td>
                                    <?php echo  $rowdata['CountryOf_Origin'] ?>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>
        </section>


        <hr>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-6">

                        <center>
                            <h6>
                                <b>
                                    Ratings & Reviews
                                </b>
                            </h6>
                        </center>
                    </div>
                    <div class="col-6">
                        <center> <button onclick="logdata(this)" class="btn  btn-dark"> <b> Rate Product </b> </button>
                        </center>
                    </div>
                </div>






                <?php  
$rvireid=$rowdata['product_id'];

    $reviewsql="SELECT * FROM `review` WHERE   pstatus='1' AND  product_id='$rvireid'";
    $reviwes = mysqli_query($conn, $reviewsql);

if (mysqli_num_rows($reviwes) > 0) {
 // output data of each row
     while($reviewdata = mysqli_fetch_assoc($reviwes)) {


?>
                <hr>
                <div class="col-12">
                    <p class="my-1" style="    font-weight: 600; font-size: 16px;">
                        <?php echo $reviewdata['name']    ?>
                    </p>
                    <?php

    switch ($reviewdata['rating']) {
     case 5:
    ?>
                    <p class="my-1" style="    font-size: 23px;    color: #ffc107;">
                        &bigstar;
                        &bigstar;
                        &bigstar;
                        &bigstar;
                        &bigstar;
                    </p>

                    <?php
         break;
     case 4:
     ?>
                    <p class="my-1" style="    font-size: 23px;    color: #ffc107;">
                        &bigstar;
                        &bigstar;
                        &bigstar;
                        &bigstar;

                    </p>

                    <?php
    break;
    case 3:
         ?>
                    <p class="my-1" style="    font-size: 23px;    color: #ffc107;">
                        &bigstar;
                        &bigstar;
                        &bigstar;

                    </p>

                    <?php


     break;
    case 3:
         ?>
                    <p class="my-1" style="    font-size: 23px;    color: #ffc107;">
                        &bigstar;


                    </p>

                    <?php
     break;
      default:
        ?>
                    <p class="my-1" style="    font-size: 23px;    color: #ffc107;">
                        &bigstar;


                    </p>

                    <?php

        }




        ?>

                    <p class="my-1">


                        <?php echo $reviewdata['product_rview']    ?>

                    </p>
                </div>
                <?php

        }
    } 
    ?>
                <hr>
            </div>

            <?php
                }
            }

                    ?>







    </div>
</section>



<?php
            }

                ?>

<!-- Button trigger modal -->



<?php
                include "include/footer.php";

                ?>


<script src="./js/product.js">
</script>


<script>
function showUser(datastr) {

var str=datastr.value;

    if (str == "") {
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var variondata = this.responseText;
                vaDATA(variondata)
            }
        };
        xmlhttp.open("GET", "./api/variation_data.php?vname=" + str, true);
        xmlhttp.send();
    }
}



function vaDATA(vardata) {
    const obj = JSON.parse(vardata)

    for (let x in obj) {
        if (x == 'variationname') {
            document.getElementById('pdname').innerHTML = obj[x];
        }
        if (x == 'price') {
            document.getElementById('prices').innerHTML = obj[x];
        }
        if (x == 'varid') {
            document.getElementById('pdidc').innerHTML = obj[x];
        }

    };

}



function showfun(y) {
    var plus = y.previousElementSibling;
    var x = y.parentElement;
    var z = x.nextElementSibling;
    var a = z.firstElementChild;

    if (a.style.display === 'none') {
      a.style.display = 'block';
      a.style.height = '100px';
      plus.style.display = 'block';
      y.style.display = 'none';
    } else {
      a.style.display = 'none';
      a.style.height = '0px ';
      y.style.display = 'none';

      y.nextElementSibling.style.display = 'block';;


    }
  }







// function addtodata() {
//     var data = document.getElementById('pdname').innerText;
//     document.getElementById('productname').value = data;
// }
</script>