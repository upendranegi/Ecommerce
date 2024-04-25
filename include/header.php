<?php 
error_reporting(0);
session_start();
$usernameheader=$_SESSION["Adobeuserdata12"];


?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Poppins:wght@200;400&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title> </title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body p h1 h2 h3 h4 h5 h6 {
        /* font-family: 'Open Sans', sans-serif, 'Poppins', 'Roboto', ; */
        font-family: "Guardian-EgypTT", "Charter", "Charter Bitstream", "Cambria", "Noto Serif Light", "Droid Serif", "Georgia", "serif";

    }
    </style>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <section>
        <div class="container px-0">
            <div class="d-flex  justify-content-md-center pt-2">
                <div class="col-md-2 col-7 px-2 px-md-0">
                    <center>
                        <a class="navbar-brand" href="index.php">
                            <img src="./img/logo.png" width='52' ; alt="">
                        </a>
                    </center>

                </div>
                <div class="col-md-7 d-none d-md-block px-0 px-md-0">
                    <form method="get" action="./productlist.php" class="d-flex  justify-content-center my-2 mx-3 my-md-0"
                        style="width: 100%;">
                        <!-- <input type="text" name="search"  required > -->
                        <input name="search" class="textbox" placeholder="Search " required list="browsers">

                        <button type="submit" name="submit" class="button button12">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-search text-dark" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>

                    </form>
                </div>
                <div class="col-md-3 col-5  px-0 px-md-0">
                    <ul class="d-flex flex-wrap">
                        <li class="nav-item">
                            <?php
if ($usernameheader == true) {
    $count=0;
    require "./admin/conn/conn.php";
    $cartsql="SELECT * FROM `cart` WHERE email='$usernameheader'";
    if ($cartresult = mysqli_query($conn, $cartsql)) {

        // Return the number of rows in result set
        $rowcount = mysqli_num_rows( $cartresult );
        
      
     }
      
   if($rowcount==0){

  
?>
 <span style="position: absolute;margin: 1px 38px;"><?php   echo $rowcount ?></span>
                            <a class="nav-link text-dark feedback-btn" ><svg
                                    xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                                    class="bi bi-cart-check" viewBox="0 0 16 16">
                                    <path
                                        d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                    <path
                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg></a>

                            <?php }else{
                                ?>
                                 <span style="position: absolute;margin: 1px 38px;"><?php   echo $rowcount ?></span>
                            <a class="nav-link text-dark feedback-btn" href="./addtocart.php"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                                    class="bi bi-cart-check" viewBox="0 0 16 16">
                                    <path
                                        d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                    <path
                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg></a>
                                <?php
                            }

}
else{
  ?>
 <span style="position: absolute;margin: 1px 38px;">0</span>
                            <a class="nav-link text-dark " onclick="logdata(this)"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                                    class="bi bi-cart-check" viewBox="0 0 16 16">
                                    <path
                                        d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                    <path
                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg></a>
                            <?php
}
?>

                        </li>
                        <?php
if ($usernameheader == true) {
   
  
?>
                        <li class="nav-item d-flex justify-content-center align-items-center mx-2 ">

                            <a href="./proflie.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color:black;"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                            </a>


                        </li>
                        <?php  } ?>
                        <li class="nav-item">



                            <?php
if ($usernameheader == true) {

?>
                            <a href="./logout.php" class="btn btn-danger"> Logout</a>

                            <?php

}
else{


?>
                            <a class="nav-link text-dark " onclick="logdata(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                            </a>
                            <?php

}
?>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
    <datalist id="browsers">
 <?php  
   require "./admin/conn/conn.php";
 $sqlc = "SELECT * FROM `categories` WHERE 1";
        $resultc = mysqli_query($conn, $sqlc);

        if (mysqli_num_rows($resultc) > 0) {
          // output data of each row
          while ($rowc = mysqli_fetch_assoc($resultc)) {
          ?>
  
  <option value="<?php echo $rowc['name'] ?>">


<?php
          }
        }
?>
 </datalist>
    <style>
    form>.textbox:focus {
        outline: 0;
        background-color: #FFF;

    }

    .textbox {
        border-radius: 20px 0px 0px 20px;
        padding-left: 12px;
        background-color: #FFF !important;
        border-left: 1px solid #000 !important;
        border-bottom: 1px solid #000 !important;
        border-top: 1px solid #000 !important;
        font-weight: 400;
        font-size: 14px;
        width: 80%;
        height: 40px;
        border-right: none;

    }

    form>.button12 {
        border-right: 1px solid #000 !important;
        border-bottom: 1px solid #000 !important;
        border-top: 1px solid #000 !important;
        outline: 0;

        background: #fff;
        float: left;
        height: 40px;

        width: 40px;
        text-align: center;
        line-height: 42px;
        border: 0;
        color: #FFF;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: 16px;
        text-rendering: auto;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        -webkit-transition: background-color .4s ease;
        transition: background-color .4s ease;
        -webkit-border-radius: 0 4px 4px 0;
        border-radius: 0px 20px 20px 0px;


    }

    form>.button12:hover {
        background: #fff;
    }

    @media(max-width:540px) {
        .textbox {
            width: 80%;
        }
    }
    </style>

    <header class="col-12" style="    background-color: #fff!important;     border-bottom: 1px solid; height: 53px;">
        <ul class="d-flex flex-wrap">
            <li></li>
        </ul>
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container">
                <div class="d-flex">
                    <div class="col-12 d-block d-md-none">

                        <form method="get" action="./productlist.php" class="d-flex  justify-content-center my-2  my-md-0"
                            style="width: 100%;">
                            <!-- <input type="text" name="search"  required > -->
                            <input name="search" class="textbox" placeholder="Search " required list="browsers">

                            <button type="submit" name="submit" class="button button12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-search text-dark" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </button>

                        </form>

                    </div>
                    <button class="navbar-toggler text-dark" type="button" data-toggle="collapse"
                        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                        aria-label="Toggle navigation" style="    top: 13px;">
                        <span class="navbar-toggler-icon " style="color: #121212;"></span>
                    </button>
                </div>


                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div>

                    </div>
                    <ul class="navbar-nav ml-auto col-12">
                        <li class="nav-item active">
                            <a class="nav-link text-dark" href="index.php">Home

                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="about.php">About </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="./privacy.php">Privacy Policy </a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>
    </header>