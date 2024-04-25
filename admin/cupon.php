<?php
session_start();


$adminusers1 = $_SESSION["adminusers"];

if ($adminusers1 == true) {
} else {
  header('Location: index.php');
}


include "conn/conn.php"; ?>
<?php include "include/header.php"; ?>




<style type="text/css">
  .wrapper {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
  }

  .box {
    display: block;
    border: 1px solid rgb(23, 63, 98);
    height: 100px;
    width: 100px;
    margin: 5px;
    background-color: white;
    border-radius: 5px;
    box-shadow: 7px 9px 9px rgba(0, 0, 0, 0.12), 2px 8px 2px rgba(0, 0, 0, 0.24);
    transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    overflow: hidden;
  }

  .js--image-preview {
    height: 70px;
    width: 100%;
    position: relative;
    overflow: hidden;
    background-image: url('');
    background-color: white;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  i.material-icons {
    transition: color 100ms ease-in-out;
    font-size: 2.25em;
    line-height: 55px;
    color: white;
    display: block;
  }

  .drop {
    display: block;
    position: absolute;
    background: transparentize(base-color, .8);
    border-radius: 100%;
    transform: scale(0);
  }

  .animate {
    animation: ripple 0.4s linear;
  }

  @keyframes ripple {
    100% {
      opacity: 0;
      transform: scale(2.5);
    }
  }

  .addproduct_card {
    width: 70%;
  }

  @media (max-width:540px) {
    .addproduct_card {
      width: 100%;
    }
  }
</style>



<main id="main" class="main">


  <!-- <center>
    <h3><b></b></h1>
  </center> -->

  <div class="card mx-auto my-5 addproduct_card" style="background: rgb(146,161,193);
background: linear-gradient(169deg, rgba(146,161,193,1) 0%, rgba(54,78,107,1) 100%);
">
    <div class="card-body "><br>

      <form class="row g-3 py-5" action="./api/coupon_code.php" method="POST" enctype="multipart/form-data">

        <center>

          <h2 class="text-light"><b>Create Coupon</b></h2>
        </center>






        <div class="col-md-12 MY-4" style="margin-top: 10px;">

     
        </div>






     

        <div class="col-md-6 col-12  my-4">
          <label class="form-label"><b>Coupon Code  : </b></label>
          <br>
          <input type="text" name="couponcode" class="form-control" placeholder="Coupon Code" onkeyup="specialchar(this.value)" style="border-color: rgb(23, 63, 98);" required>
        </div>
        <div class="col-md-6 col-12  my-4">
          <label class="form-label"><b> Amount : </b></label>
          <br>
          <input type="text" name="Amount" class="form-control" placeholder="Amount" style="border-color: rgb(23, 63, 98);" required>
        </div>
    
      

    




    </div>
    <br>
    <center><input type="submit" style="    box-shadow: 0 6px 30px -10px #4a74c9;     font-weight: 700;" name="submit" class="btn  bg-light text-dark px-5"></input></center><br><br><br>
    </form>

  </div>
  </div>
</main><!-- End #main -->



<script type="text/javascript">
  function initImageUpload(box) {
    let uploadField = box.querySelector('.image-upload');

    uploadField.addEventListener('change', getFile);

    function getFile(e) {
      let file = e.currentTarget.files[0];
      checkType(file);
    }

    function previewImage(file) {
      let thumb = box.querySelector('.js--image-preview'),
        reader = new FileReader();

      reader.onload = function() {
        thumb.style.backgroundImage = 'url(' + reader.result + ')';
      }
      reader.readAsDataURL(file);
      thumb.className += ' js--no-default';
    }

    function checkType(file) {
      let imageType = /image.*/;
      if (!file.type.match(imageType)) {
        throw 'Datei ist kein Bild';
      } else if (!file) {
        throw 'Kein Bild gewählt';
      } else {
        previewImage(file);
      }
    }

  }

  // initialize box-scope
  var boxes = document.querySelectorAll('.box');

  for (let i = 0; i < boxes.length; i++) {
    let box = boxes[i];
    initDropEffect(box);
    initImageUpload(box);
  }



  /// drop-effect
  function initDropEffect(box) {
    let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;

    // get clickable area for drop effect
    area = box.querySelector('.js--image-preview');
    area.addEventListener('click', fireRipple);

    function fireRipple(e) {
      area = e.currentTarget
      // create drop
      if (!drop) {
        drop = document.createElement('span');
        drop.className = 'drop';
        this.appendChild(drop);
      }
      // reset animate class
      drop.className = 'drop';

      // calculate dimensions of area (longest side)
      areaWidth = getComputedStyle(this, null).getPropertyValue("width");
      areaHeight = getComputedStyle(this, null).getPropertyValue("height");
      maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

      // set drop dimensions to fill area
      drop.style.width = maxDistance + 'px';
      drop.style.height = maxDistance + 'px';

      // calculate dimensions of drop
      dropWidth = getComputedStyle(this, null).getPropertyValue("width");
      dropHeight = getComputedStyle(this, null).getPropertyValue("height");

      // calculate relative coordinates of click
      // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
      x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10) / 2);
      y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10) / 2) - 30;

      // position drop and animate
      drop.style.top = y + 'px';
      drop.style.left = x + 'px';
      drop.className += ' animate';
      e.stopPropagation();

    }
  }



  function specialchar(data){
    const regex = /[#%^&*\-+={}[\]:;"'<>,.?\/|\\]/; 

    if(regex.test(data)) {

      alert(' Do Not use , &, { , } , |, \ , ^ , ~ , , and `, Space, <, >, ", #, % {, }, |, \, ^, ~')
    }

  }
</script>

<?php include "include/footer.php"; ?>