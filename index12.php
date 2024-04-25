<?php

include "./include/header.php";
require "./admin/conn/conn.php";

$username1 =$_SESSION["Adobeuserdata12"];

?>
<style>
p {
    margin-bottom: 0px;
    font-size: 15px;
    font-weight: 400;
    color: #000000;
    line-height: 24px;
}

.sliderimage {
    height: 550px;
    object-fit: fill;
    width: 95%;
}

@media (max-width:750px) {
    .sliderimage {
        height: 200px;
        object-fit: inherit;
    }
}
</style>




<style>
.imagecover {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin: 20px;

    object-fit: cover;
    object-position: center right;
    transition: all 200ms ease-in;

}

.textline {
    transition: all 200ms ease-in;
}

@media (max-width:540px) {
    .imagecover {
        margin: 15px 1px;
    }

}
</style>
<!-- Banner Ends Here -->
<?php

if ($username1 == true) {

?>
<Section class="my-0 py-0">
    <div class="container-fluid px-lg-5 px-0 d-flex justify-content-center">
        <div id="carouselExampleIndicators" class="carousel slide col-12" data-ride="carousel">
            <?php 
 
 $ps1 = "SELECT * FROM `banerr` WHERE id=1";
 $resultps1 = mysqli_query($conn, $ps1);
 
 if (mysqli_num_rows($resultps1) > 0) {
     while($rowp = mysqli_fetch_assoc($resultps1)) {


?>

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 sliderimage" src="./admin/api/banners/<?php echo $rowp['banner1']   ?>"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 sliderimage" src="./admin/api/banners/<?php echo $rowp['banner2']   ?>"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 sliderimage" src="./admin/api/banners/<?php echo $rowp['banner3']   ?>"
                        alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>


            <?php
     }
    }
?>
        </div>
    </div>
    <section class="py-5 my-lg-5 my-3" style="    background: burlywood;">
        <div class="container my-2">
            <center>
                <h1 class="animate__animated animate__fadeInLeft  animate__delay-2s">
                    Welcome the new year with incredible finds.
                </h1>
            </center>
            <div class="d-flex flex-wrap">

                <?php
        $sql = "SELECT * FROM `categories` WHERE 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while ($row = mysqli_fetch_assoc($result)) {


        ?>
                <div class="col-md-3 col-6 circleimg  px-md-2">
                    <a href="./productlist.php? catname=<?php echo $row['name'] ?>">
                        <div class="d-flex flex-wrap  flex-column justify-content-center align-items-center"
                            onmouseover="bigImg(this)" onmouseout="normalImg(this)">
                            <img src="./admin/api/cat_img/<?php echo $row['cat_img'] ?>" class="imagecover"
                                style="    border: 1px solid;">

                            <p class="textline">
                                <b>
                                    <?php echo $row['name'] ?>
                                </b>
                            </p>


                        </div>
                    </a>
                </div>
                <?php
          }
        }


          ?>



            </div>
        </div>

    </Section>
    <style>
    .ratesty {
        position: absolute;
        margin-bottom: 0px;
        padding: 1px 4px 1px 20px;
        background: #e7dbdb;
        width: 154px;
        margin-left: 35px;
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
            margin-top: -0px;
            bottom: 23px;
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

    <div class="my-4">



       
    <div class="container ">
                <center>
                    <h5 class="animate__animated animate__bounce  animate__delay-2s">
                        <b>

                            Our Product
                        </b>
                    </h5>
                </center>
                <div class="row">


                    <?php




                         $sd = "SELECT * FROM `product_table` WHERE category='Pendent lights' LIMIT 20;";
                                    $r12 = mysqli_query($conn, $sd);

                             if (mysqli_num_rows($r12) > 0) {
       
                              while ($rowdata = mysqli_fetch_assoc($r12)) {
                                ?>
                    <div class="col-md-3 my-3 prodsview my-lg-4  my-2 col-6 "
                        style="border-radius:3px; overflow:hidden; ">
                        <a href="./service.php? productname=<?php echo $rowdata['product_id'];   ?>">
                            <div class="hover-switch" style="height:100%; width:100%;  ">
                                <img src="./admin/api/product_img/<?php echo $rowdata['product_img2'];   ?>"
                                    style="height:100%; width:100%;  " alt="">
                                <img src="./admin/api/product_img/<?php echo $rowdata['product_img1'];   ?>"
                                    style="height:100%; width:100%;  " alt="">

                                <p class="ratesty">
                                    <span style="font-size: 12px;">
                                        <b> $ <?php echo $rowdata['Prices'];   ?> </b> <del>$
                                            <?php echo $rowdata['SKU'];   ?></del>
                                    </span>
                                </p>
                            </div>


                        </a>
                    </div>
                    <?php
                    }
                     }
    
 
        
                        ?>





                </div>
            </div>
        </div>



        <div class="col-12 my-lg-5 w-100">
            <img src="./img/lightingimage/1.gif" class="img-fluid" style="width:100%"  alt="">
        </div>

        <div class="container my-4">

            <div class="row">


                <?php




                         $sd = "SELECT * FROM `product_table` WHERE category='Wall sconces' LIMIT 20";
                                    $r12 = mysqli_query($conn, $sd);

                             if (mysqli_num_rows($r12) > 0) {
       
                              while ($rowdata = mysqli_fetch_assoc($r12)) {
                                ?>
                <div class="col-md-3 my-3 prodsview my-lg-4  my-2 col-6 " style="border-radius:3px; overflow:hidden; ">
                    <a href="./service.php? productname=<?php echo $rowdata['product_id'];   ?>">
                        <div class="hover-switch" style="height:100%; width:100%;  ">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img2'];   ?>"
                                style="height:100%; width:100%;  " alt="">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img1'];   ?>"
                                style="height:100%; width:100%;  " alt="">

                            <p class="ratesty">
                                <span style="font-size: 12px;">
                                    <b> $ <?php echo $rowdata['Prices'];   ?> </b> <del>$
                                        <?php echo $rowdata['SKU'];   ?></del>
                                </span>
                            </p>
                        </div>


                    </a>
                </div>
                <?php
                    }
                     }
    
 
        
                        ?>





            </div>
        </div>

        <div class="col-12 my-lg-5 ">
            <center> <img src="./img/lightingimage/2.gif" class="img-fluid w-100" alt="" >
            </center>
        </div>


        <div class="container my-4">

            <div class="row">


                <?php




             $sd = "SELECT * FROM `product_table` WHERE category='Flush Mount Ceiling Lamp' or category='Table Lamap Desk Table' LIMIT 30";
                        $r12 = mysqli_query($conn, $sd);

                 if (mysqli_num_rows($r12) > 0) {

                  while ($rowdata = mysqli_fetch_assoc($r12)) {
                    ?>
                <div class="col-md-3 my-3 prodsview my-lg-4  my-2 col-6 " style="border-radius:3px; overflow:hidden; ">
                    <a href="./service.php? productname=<?php echo $rowdata['product_id'];   ?>">
                        <div class="hover-switch" style="height:100%; width:100%;  ">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img2'];   ?>"
                                style="height:100%; width:100%;  " alt="">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img1'];   ?>"
                                style="height:100%; width:100%;  " alt="">

                            <p class="ratesty">
                                <span style="font-size: 12px;">
                                    <b> $ <?php echo $rowdata['Prices'];   ?> </b> <del>$
                                        <?php echo $rowdata['SKU'];   ?></del>
                                </span>
                            </p>
                        </div>


                    </a>
                </div>
                <?php
              }
                     }



                     ?>





            </div>
        </div>


    </div>

    <div class="container-fluid px-lg-5 px-0 d-flex justify-content-center">
        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
            <?php 
 
 $ps2 = "SELECT * FROM `banerr` WHERE id=2";
 $resultps2 = mysqli_query($conn, $ps2);
 
 if (mysqli_num_rows($resultps2) > 0) {
     while($rowp2 = mysqli_fetch_assoc($resultps2)) {


?>

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 sliderimage" src="./admin/api/banners/<?php echo $rowp2['banner1']   ?>"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 sliderimage" src="./admin/api/banners/<?php echo $rowp2['banner2']   ?>"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 sliderimage" src="./admin/api/banners/<?php echo $rowp2['banner3']   ?>"
                        alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>


            <?php
     }
    }
?>
        </div>
    </div>


    <div class="container">
        <div class="d-flex justify-content-center my-3 py-3">
            <div class="col-lg-3 mx-2 p-3" style="border-radius: 20px;">
                <center>
                    <a class="text-light btn " onclick="toggleVisibility('Menu1');"
                        style="background:#000000; border-radius: 15px;">
                        <h6>


                            Top Rated Product
                        </h6>
                    </a>
                </center>
            </div>

            <div class="col-lg-3 mx-2 p-3" style="   ">
                <center>
                    <a class="text-light btn" onclick="toggleVisibility('Menu2');"
                        style="background:darkgrey; border-radius: 15px; ">
                        <h6>
                            Latest Product

                        </h6>
                    </a>
                </center>
            </div>
        </div>

        <div id="Menu1">
            <div class="row my-3">
                <div class="col-12">
                    <center>
                        <h3>
                            Top Rated Product
                        </h3>
                    </center>
                </div>
                <?php

    $cat = "SELECT product_id, COUNT(product_id)AS occurrences FROM `review` GROUP BY product_id ORDER BY occurrences DESC
LIMIT 20;";
$resultcat = mysqli_query($conn, $cat);

if (mysqli_num_rows($resultcat) > 0) {
// output data of each row
while ($rowcat = mysqli_fetch_assoc($resultcat)) {

$catname=   $rowcat['product_id'];
$sd = "SELECT * FROM `product_table` WHERE product_id='$catname'";
$r12 = mysqli_query($conn, $sd);

if (mysqli_num_rows($r12) > 0) {
  // output data of each row
  while ($rowdata = mysqli_fetch_assoc($r12)) {
?>
                <div class="col-md-3 prodsview col-6 p-2" style="border-radius:3px; overflow:hidden; ">
                    <a href="./service.php? productname=<?php echo $rowdata['product_id'];   ?>"
                        style="height:100%"><img src="./admin/api/product_img/<?php echo $rowdata['product_img1'];   ?>"
                            width="100%" style="height:100%;  object-fit: scale-down;" alt="">

                        <p class="ratesty">
                            <span style="font-size: 12px;">
                                $ <?php echo $rowdata['Prices'];   ?> <del>$ <?php echo $rowdata['SKU'];   ?></del>
                            </span>
                        </p>
                    </a>

                </div>


                <?php

  }
}
}
}

?>

            </div>
        </div>
        <div id="Menu2" style="display:none;">
            <div class="row my-3">
                <div class="col-12 my-2">
                    <center>
                        <h3>
                            Latest Product
                        </h3>
                    </center>
                </div>
                <?php
$lat="SELECT * FROM `product_table` ORDER BY id DESC limit 20";
$r124 = mysqli_query($conn, $lat);
while ($rowdata1 = mysqli_fetch_assoc($r124)) {
?>

                <div class="col-md-3 my-3 prodsview col-6 p-2" style="border-radius:3px; overflow:hidden; ">
                    <a href="./service.php? productname=<?php echo $rowdata1['product_id'];  ?>" style="height:100%">
                        <img src="./admin/api/product_img/<?php echo $rowdata1['product_img1']   ?>" width="100%"
                            style="height:100%;  object-fit: scale-down;"
                            alt="<?php echo $rowdata1['product_img1']   ?>">

                        <p class="ratesty">
                            <span style="font-size: 12px;">
                                $ <?php echo $rowdata1['Prices'];   ?> <del>$ <?php echo $rowdata1['SKU'];   ?></del>
                            </span>
                        </p>
                    </a>

                </div>


                <?php

}
?>
            </div>
        </div>
    </div>


    <?php
} else {
?>

    <Section class="my-1 py-0">
        <div class="container-fluid px-lg-5 px-0 d-flex justify-content-center">

            <div id="carouselExampleIndicators" class="carousel slide col-12" data-ride="carousel">
                <?php 
 
 $ps1 = "SELECT * FROM `banerr` WHERE id=1";
 $resultps1 = mysqli_query($conn, $ps1);
 
 if (mysqli_num_rows($resultps1) > 0) {
     while($rowp = mysqli_fetch_assoc($resultps1)) {


?>

                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 sliderimage"
                            src="./admin/api/banners/<?php echo $rowp['banner1']   ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sliderimage"
                            src="./admin/api/banners/<?php echo $rowp['banner2']   ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sliderimage"
                            src="./admin/api/banners/<?php echo $rowp['banner3']   ?>" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>


                <?php
     }
    }
?>
            </div>
        </div>
        <section class="py-5 my-lg-5 my-3" style="    background: burlywood;">
            <div class="container py-3 my-2">
                <center>
                    <h1 class="animate__animated animate__fadeInLeft  animate__delay-2s">
                        Welcome the new year with incredible finds.
                    </h1>
                </center>
                <div class="d-flex flex-wrap">

                    <?php
        $sql = "SELECT * FROM `categories` WHERE 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while ($row = mysqli_fetch_assoc($result)) {


        ?>
                    <div class="col-md-3 col-6 circleimg  px-md-2">
                        <a href="./productlist.php? catname=<?php echo $row['name'] ?>">
                            <div class="d-flex flex-wrap  flex-column justify-content-center align-items-center"
                                onmouseover="bigImg(this)" onmouseout="normalImg(this)">
                                <img src="./admin/api/cat_img/<?php echo $row['cat_img'] ?>" class="imagecover"
                                    style="    border: 1px solid;    ">

                                <p class="textline">
                                    <b>
                                        <?php echo $row['name'] ?>
                                    </b>
                                </p>


                            </div>
                        </a>
                    </div>
                    <?php
          }
        }


          ?>



                </div>
            </div>

        </Section>
        <style>
        .ratesty {
            position: absolute;
            margin-bottom: 0px;
            padding: 1px 4px 1px 20px;
            background: #e7dbdb;
            width: 154px;
            margin-left: 38px;
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
                margin-top: 0px;
                bottom: 23px;
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

        <div class="my-5">




            <div class="container ">
                <center>
                    <h5 class="animate__animated animate__bounce  animate__delay-2s">
                        <b>

                            Our Product
                        </b>
                    </h5>
                </center>
                <div class="row">


                    <?php




                         $sd = "SELECT * FROM `product_table` WHERE category='Pendent lights' LIMIT 20;";
                                    $r12 = mysqli_query($conn, $sd);

                             if (mysqli_num_rows($r12) > 0) {
       
                              while ($rowdata = mysqli_fetch_assoc($r12)) {
                                ?>
                    <div class="col-md-3 my-3 prodsview my-lg-4  my-2 col-6 "
                        style="border-radius:3px; overflow:hidden; ">
                        <a href="./service.php? productname=<?php echo $rowdata['product_id'];   ?>">
                            <div class="hover-switch" style="height:100%; width:100%;  ">
                                <img src="./admin/api/product_img/<?php echo $rowdata['product_img2'];   ?>"
                                    style="height:100%; width:100%;  " alt="">
                                <img src="./admin/api/product_img/<?php echo $rowdata['product_img1'];   ?>"
                                    style="height:100%; width:100%;  " alt="">

                                <p class="ratesty">
                                    <span style="font-size: 12px;">
                                        <b> $ <?php echo $rowdata['Prices'];   ?> </b> <del>$
                                            <?php echo $rowdata['SKU'];   ?></del>
                                    </span>
                                </p>
                            </div>


                        </a>
                    </div>
                    <?php
                    }
                     }
    
 
        
                        ?>





                </div>
            </div>
        </div>



        <div class="col-12 my-lg-5 w-100">
            <img src="./img/lightingimage/1.gif" class="img-fluid" style="width:100%"  alt="">
        </div>

        <div class="container my-4">

            <div class="row">


                <?php




                         $sd = "SELECT * FROM `product_table` WHERE category='Wall sconces' LIMIT 20";
                                    $r12 = mysqli_query($conn, $sd);

                             if (mysqli_num_rows($r12) > 0) {
       
                              while ($rowdata = mysqli_fetch_assoc($r12)) {
                                ?>
                <div class="col-md-3 my-3 prodsview my-lg-4  my-2 col-6 " style="border-radius:3px; overflow:hidden; ">
                    <a href="./service.php? productname=<?php echo $rowdata['product_id'];   ?>">
                        <div class="hover-switch" style="height:100%; width:100%;  ">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img2'];   ?>"
                                style="height:100%; width:100%;  " alt="">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img1'];   ?>"
                                style="height:100%; width:100%;  " alt="">

                            <p class="ratesty">
                                <span style="font-size: 12px;">
                                    <b> $ <?php echo $rowdata['Prices'];   ?> </b> <del>$
                                        <?php echo $rowdata['SKU'];   ?></del>
                                </span>
                            </p>
                        </div>


                    </a>
                </div>
                <?php
                    }
                     }
    
 
        
                        ?>





            </div>
        </div>

        <div class="col-12 my-lg-5 ">
            <center> <img src="./img/lightingimage/2.gif" class="img-fluid w-100" alt="" >
            </center>
        </div>


        <div class="container my-4">

            <div class="row">


                <?php




             $sd = "SELECT * FROM `product_table` WHERE category='Flush Mount Ceiling Lamp' or category='Table Lamap Desk Table' LIMIT 30";
                        $r12 = mysqli_query($conn, $sd);

                 if (mysqli_num_rows($r12) > 0) {

                  while ($rowdata = mysqli_fetch_assoc($r12)) {
                    ?>
                <div class="col-md-3 my-3 prodsview my-lg-4  my-2 col-6 " style="border-radius:3px; overflow:hidden; ">
                    <a href="./service.php? productname=<?php echo $rowdata['product_id'];   ?>">
                        <div class="hover-switch" style="height:100%; width:100%;  ">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img2'];   ?>"
                                style="height:100%; width:100%;  " alt="">
                            <img src="./admin/api/product_img/<?php echo $rowdata['product_img1'];   ?>"
                                style="height:100%; width:100%;  " alt="">

                            <p class="ratesty">
                                <span style="font-size: 12px;">
                                    <b> $ <?php echo $rowdata['Prices'];   ?> </b> <del>$
                                        <?php echo $rowdata['SKU'];   ?></del>
                                </span>
                            </p>
                        </div>


                    </a>
                </div>
                <?php
              }
                     }



                     ?>





            </div>
        </div>





        <div class="container-fluid px-lg-5 px-0 d-flex justify-content-center">

            <div id="carouselExampleIndicators1" class="carousel slide col-12" data-ride="carousel">
                <?php 
 
 $ps2 = "SELECT * FROM `banerr` WHERE id=2";
 $resultps2 = mysqli_query($conn, $ps2);
 
 if (mysqli_num_rows($resultps2) > 0) {
     while($rowp2 = mysqli_fetch_assoc($resultps2)) {


?>

                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 sliderimage"
                            src="./admin/api/banners/<?php echo $rowp2['banner1']   ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sliderimage"
                            src="./admin/api/banners/<?php echo $rowp2['banner2']   ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sliderimage"
                            src="./admin/api/banners/<?php echo $rowp2['banner3']   ?>" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>


                <?php
     }
    }
?>
            </div>
        </div>

        <div class="container">
            <div class="d-flex justify-content-center my-3 py-3">
                <div class="col-lg-2  p-1" style="border-radius: 10px;">
                    <center>
                        <a class="text-light btn py-2" onclick="toggleVisibility('Menu1');"
                            style="background:#000000; border-radius: 10px;">
                            <h6>


                                Top Rated Product
                            </h6>
                        </a>
                    </center>
                </div>

                <div class="col-lg-2  p-1" style="   ">
                    <center>
                        <a class="text-light btn py-2" onclick="toggleVisibility('Menu2');"
                            style="background:darkgrey; border-radius: 10px; ">
                            <h6>
                                Latest Product

                            </h6>
                        </a>
                    </center>
                </div>
            </div>

            <div id="Menu1">
                <div class="row my-3">
                    <div class="col-12">
                        <center>
                            <h3>
                                Top Rated Product
                            </h3>
                        </center>
                    </div>
                    <?php

    $cat = "SELECT product_id, COUNT(product_id)AS occurrences FROM `review` GROUP BY product_id ORDER BY occurrences DESC
LIMIT 20;";
$resultcat = mysqli_query($conn, $cat);

if (mysqli_num_rows($resultcat) > 0) {
// output data of each row
while ($rowcat = mysqli_fetch_assoc($resultcat)) {

$catname=   $rowcat['product_id'];
$sd = "SELECT * FROM `product_table` WHERE product_id='$catname'";
$r12 = mysqli_query($conn, $sd);

if (mysqli_num_rows($r12) > 0) {
  // output data of each row
  while ($rowdata = mysqli_fetch_assoc($r12)) {
?>
                    <div class="col-md-3  col-6 p-2 prodsview" style="border-radius:3px; overflow:hidden;   ">
                        <a href="./service.php? productname=<?php echo $rowdata['product_id'];   ?>"
                            style="height:100%">
                            <div style="height:100%; width:100%;  ">
                                <img src="./admin/api/product_img/<?php echo $rowdata['product_img1'];   ?>"
                                    width="100%" style="height:100%;  width:100%;" alt="">

                                <p class="ratesty">
                                    <span style="font-size: 12px;">
                                        <b> $ <?php echo $rowdata['Prices']   ?> </b> <del>$
                                            <?php echo $rowdata['SKU'];   ?></del>
                                    </span>
                                </p>
                            </div>
                        </a>

                    </div>


                    <?php

  }
}
}
}

?>

                </div>
            </div>
            <div id="Menu2" style="display:none;">
                <div class="row my-3">
                    <div class="col-12 my-2">
                        <center>
                            <h3>
                                Latest Product
                            </h3>
                        </center>
                    </div>
                    <?php
$lat="SELECT * FROM `product_table` ORDER BY id DESC limit 20";
$r124 = mysqli_query($conn, $lat);
while ($rowdata1 = mysqli_fetch_assoc($r124)) {
?>

                    <div class="col-md-3 my-3  col-6 p-2 prodsview" style="border-radius:3px; overflow:hidden;">
                        <a href="./service.php? productname=<?php echo $rowdata1['product_id'];  ?>">
                            <div style="height:100%; width:100%;  ">
                                <img src="./admin/api/product_img/<?php echo $rowdata1['product_img1']   ?>"
                                    width="100%" style="height:100%; width:100%"
                                    alt="<?php echo $rowdata1['product_img1']   ?>">

                                <p class="ratesty">
                                    <span style="font-size: 12px;">
                                        $ <?php echo $rowdata1['Prices'];   ?> <del>$
                                            <?php echo $rowdata1['SKU'];   ?></del>
                                    </span>
                                </p>
                            </div>
                        </a>

                    </div>


                    <?php

}
?>
                </div>
            </div>
        </div>

        <?php
}

?>





        <?php
include "./include/footer.php"

?>
        <script>
        function bigImg(x) {

            x.firstElementChild.style.transform = "scale(1.1)";
            x.lastElementChild.style.borderBottom = "1px solid";

        }

        function normalImg(x) {

            x.firstElementChild.style.transform = "scale(1)";
            x.lastElementChild.style.borderBottom = "none";
        }



        var divs = ["Menu1", "Menu2", "Menu3", "Menu4"];
        var visibleDivId = null;

        function toggleVisibility(divId) {
            if (visibleDivId === divId) {
                //visibleDivId = null;
            } else {
                visibleDivId = divId;
            }
            hideNonVisibleDivs();
        }

        function hideNonVisibleDivs() {
            var i, divId, div;
            for (i = 0; i < divs.length; i++) {
                divId = divs[i];
                div = document.getElementById(divId);
                if (visibleDivId === divId) {
                    div.style.display = "block";
                } else {
                    div.style.display = "none";
                }
            }
        }
        </script>