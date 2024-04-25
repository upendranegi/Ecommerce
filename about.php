<?php

include "./include/header.php";
require "./admin/conn/conn.php";

$userabout =$_SESSION["Adobeuserdata12"];

if ($userabout == true) {
?>

<style>
@media(max-width:740px){
    .about-features{
        margin-top:40px !important; 
   }
}
</style>

<div class="d-flex justify-content-center my-2">
  <img src="./img/Add a heading.png" class="img-fluid" alt="">
</div>




<div class="best-features about-features my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2> <b> About ADORABLE LIGHTING </b> </h2>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-content-center" style="align-items: center;">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./img/about/about.webp" width="100%" height="500px"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/about/about1.webp" width="100%" height="500px"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/about/about2.webp" width="100%" height="500px"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/about/about3.webp" width="100%" height="500px"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/about/about4.webp" width="100%" height="500px"
                                alt="Third slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content py-5 px-2">

                    <p> <b>
                            Our lead time is 3-5 business days by DHL, Domestic shipping is 3-5 business days,
                            International orders shipping time is 3-7 days.
                            <br>

                            We offer the best handmade modern, contemporary, industrial, rustic, mid-century and custom
                            fixtures available. Offering Sputnik lights, updated classics, as well as unique fixtures
                            designed in-house, built to order here in Palm Springs, California. Our store has a new
                            look, and still offering the same high quality bespoke lights our customers have come to
                            enjoy.
                            <br>
                            Check back often to see our latest designs and contact us if you have a custom design or
                            request we can bring it to life.

                            <br>
                            INTERNATIONAL CUSTOMERS: Please know that we are not responsible for custom and duties
                            taxes.

                            <br>

                            I take great care and pride hand-making each and every fixture. Through the years my skills
                            of fabrication and attention to detail have been honed and applied to every light I make,
                            whether be assembly, polishing, and even design. I enjoy what I do and couldn't ask for a
                            better opportunity supplying my clients with the highest quality fixtures available.
                            <br>
                            Custom orders are always welcome! From a simple drawing on paper to full computer render a
                            light can be tailored exactly to your specification and design. A full fabrication shop is
                            at our disposal to bring that perfect lighting idea to life!
                            <br>
                            Every fixture is assembled strictly with UL Listed components, and thoroughly tested before
                            shipping ensuring a lifetime of flawless operation.
                            <br>
                            Our goal is to continue to push the envelope and resurrect the past in new and exciting
                            ways, to blur the lines between Fine Art and functional objects, and to offer the public
                            unique and original items found nowhere else. So join us today and join our ever-growing
                            legion of satisfied customers!

                            <br>
                            I take great pride in our products and endeavor to exceed your expectations, and achieve
                            your complete satisfaction and have enjoyed excellent feedback from previous customers,
                        </b>
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
else{

?>
<style>
@media(max-width:740px){
    .about-features{
        margin-top:40px !important; 
   }
}
</style>

<div class="d-flex justify-content-center my-2">
    <img src="./img/Add a heading.png" class="img-fluid" alt="">
</div>

<div class="best-features about-features my-lg-4 mt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2 class="d-lg-block d-none"> <b> About ADORABLE LIGHTING </b> </h2>
                    <h6 class="d-lg-none"> <b> About ADORABLE LIGHTING </b> </h6>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-content-center" style="align-items: center;">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./img/about/about.webp" width="100%" height="500px"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/about/about1.webp" width="100%" height="500px"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/about/about2.webp" width="100%" height="500px"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/about/about3.webp" width="100%" height="500px"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/about/about4.webp" width="100%" height="500px"
                                alt="Third slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content py-5 px-2">

                    <p> <b>
                            Our lead time is 3-5 business days by DHL, Domestic shipping is 3-5 business days,
                            International orders shipping time is 3-7 days.
                            <br>

                            We offer the best handmade modern, contemporary, industrial, rustic, mid-century and custom
                            fixtures available. Offering Sputnik lights, updated classics, as well as unique fixtures
                            designed in-house, built to order here in Palm Springs, California. Our store has a new
                            look, and still offering the same high quality bespoke lights our customers have come to
                            enjoy.
                            <br>
                            Check back often to see our latest designs and contact us if you have a custom design or
                            request we can bring it to life.

                            <br>
                            INTERNATIONAL CUSTOMERS: Please know that we are not responsible for custom and duties
                            taxes.

                            <br>

                            I take great care and pride hand-making each and every fixture. Through the years my skills
                            of fabrication and attention to detail have been honed and applied to every light I make,
                            whether be assembly, polishing, and even design. I enjoy what I do and couldn't ask for a
                            better opportunity supplying my clients with the highest quality fixtures available.
                            <br>
                            Custom orders are always welcome! From a simple drawing on paper to full computer render a
                            light can be tailored exactly to your specification and design. A full fabrication shop is
                            at our disposal to bring that perfect lighting idea to life!
                            <br>
                            Every fixture is assembled strictly with UL Listed components, and thoroughly tested before
                            shipping ensuring a lifetime of flawless operation.
                            <br>
                            Our goal is to continue to push the envelope and resurrect the past in new and exciting
                            ways, to blur the lines between Fine Art and functional objects, and to offer the public
                            unique and original items found nowhere else. So join us today and join our ever-growing
                            legion of satisfied customers!

                            <br>
                            I take great pride in our products and endeavor to exceed your expectations, and achieve
                            your complete satisfaction and have enjoyed excellent feedback from previous customers,
                        </b>
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>






<?php

}
include "./include/footer.php";
?>

