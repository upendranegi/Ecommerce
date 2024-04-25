<?php
include "./include/header.php";

?>





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

  <div class=" card mx-auto my-5 addproduct_card" style="background: linear-gradient(90deg, rgba(123,159,190,1) 0%, rgba(90,112,133,1) 100%);">
    <div class="card-body "><br>

      <form class="row g-3" action="./api/banner.php" method="POST" enctype="multipart/form-data">

        <center>

          <h2 style="color: rgb(23, 63, 98);"><b>Add Product</b></h2>
        </center>






        <div class="col-md-12" style="margin-top: 10px;">
          <center>

            <p class="" style=" font-size:16px; color: rgb(23, 63, 98);"><b> Banner </b></p>
          </center>

         



          
     
        </div>





<center>
  <h6>
    Banner size of 1900*550
  </h6>
</center>
       


        <div class="col-md-6 col-12  my-2 ">
          <label class="form-label"><b> Banner 1: </b></label>
          <br>
          <input type="file" name="Banner1" class="form-control" placeholder="Product Name" style="border-color: rgb(23, 63, 98);">
        </div>

        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b>  Banner 2: </b></label>
          <br>
          <input type="file" name="Banner2" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>


        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b>Banner 3: </b></label>
          <br>
          <input type="file" name="Banner3" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>

        <div class="col-md-6 col-12  my-2 ">
          <label class="form-label"><b> Banner 4: </b></label>
          <br>
          <input type="file" name="Banner4" class="form-control" placeholder="Product Name" style="border-color: rgb(23, 63, 98);">
        </div>

        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b>  Banner 5: </b></label>
          <br>
          <input type="file" name="Banner5" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>


        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b>Banner 6: </b></label>
          <br>
          <input type="file" name="Banner6" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>


     
        
    </div>
    <br>
    <center><input type="submit" name="submit" class="btn  btn-success w-50"></input></center><br><br><br>
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
</script>






<?php
include "./include/footer.php";

?>