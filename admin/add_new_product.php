<?php
session_start();


$adminusers2 = $_SESSION["adminusers"];

if ($adminusers2 == true) {
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

  <div class=" card mx-auto my-5 addproduct_card" style="background: linear-gradient(90deg, rgba(123,159,190,1) 0%, rgba(90,112,133,1) 100%);">
    <div class="card-body "><br>

      <form class="row g-3" action="./api/product_data_add.php" method="POST" enctype="multipart/form-data">

        <center>

          <h2 style="color: rgb(23, 63, 98);"><b>Add Product</b></h2>
        </center>






        <div class="col-md-12" style="margin-top: 10px;">
          <center>

            <p class="" style=" font-size:16px; color: rgb(23, 63, 98);"><b> Product Images </b></p>
          </center>

          <div class="wrapper">

            <div class="box mx-2">
              <div class="js--image-preview"></div>
              <div class="upload-options px-2">

                <label class="btn text-light w-100" style=" background-color: rgb(23, 63, 98) !important;border-color: rgb(23, 63, 98);">Upload<input type="file" class="image-upload" name="pic1" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" accept="image/*" require></label>

                </label>
              </div>
            </div>

            <div class="box mx-2">
              <div class="js--image-preview"></div>
              <div class="upload-options px-2">

                <label class="btn text-light w-100" style=" background-color: rgb(23, 63, 98) !important; border-color: rgb(23, 63, 98);">Upload<input type="file" class="image-upload" name="pic2" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" accept="image/*" require></label>

                </label>
              </div>
            </div>

            <div class="box mx-2">
              <div class="js--image-preview"></div>
              <div class="upload-options px-2">

                <label class="btn text-light w-100" style=" background-color: rgb(23, 63, 98) !important; border-color: rgb(23, 63, 98);">Upload<input type="file" class="image-upload" name="pic3" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" accept="image/*" require></label>

                </label>
              </div>
            </div>

            <div class="box mx-2">
              <div class="js--image-preview"></div>
              <div class="upload-options px-2">

                <label class="btn text-light w-100" style=" background-color: rgb(23, 63, 98) !important; border-color: rgb(23, 63, 98);">Upload<input type="file" class="image-upload" name="pic4" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" accept="image/*" require></label>

                </label>
              </div>
            </div>

            <div class="box mx-2">
              <div class="js--image-preview"></div>
              <div class="upload-options px-2">

                <label class="btn text-light w-100" style=" background-color: rgb(23, 63, 98) !important; border-color: rgb(23, 63, 98);">Upload<input type="file" class="image-upload" name="pic5" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" accept="image/*" require></label>

                </label>
              </div>
            </div>

            <div class="box mx-2">
              <div class="js--image-preview"></div>
              <div class="upload-options px-2">

                <label class="btn text-light w-100" style=" background-color: rgb(23, 63, 98) !important;border-color: rgb(23, 63, 98);">Upload<input type="file" class="image-upload" name="pic6" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" accept="image/*" require></label>

                </label>
              </div>
            </div>

            <div class="box mx-2">
              <div class="js--image-preview"></div>
              <div class="upload-options px-2">

                <label class="btn text-light w-100" style=" background-color: rgb(23, 63, 98) !important;border-color: rgb(23, 63, 98);">Upload<input type="file" class="image-upload" name="pic7" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" accept="image/*" require></label>

                </label>
              </div>
            </div>


            <div class="box mx-2">
              <div class="js--image-preview"></div>
              <div class="upload-options px-2">

                <label class="btn text-light w-100" style=" background-color: rgb(23, 63, 98) !important;border-color: rgb(23, 63, 98);">Upload<input type="file" class="image-upload" name="pic8" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" accept="image/*" require></label>

                </label>
              </div>
            </div>
          </div>



          
     
        </div>






       

        <div class="col-md-6 col-12 ">


          <label class="form-label"><b>Choose Categories: </b></label>
          <br>
          <?php
$sql="SELECT * FROM `categories` WHERE 1";
$r=mysqli_query($conn,$sql);
if($r){
          ?>
          <select name="category" class="form-control" style="border-color: rgb(23, 63, 98);" require>

            <option>Choose Categories</option>
            <?php
while($row=mysqli_fetch_assoc($r)){
?>
 <option><?php echo $row['name']  ?></option>
<?php
}}
            ?>


          </select>

        </div>

        <div class="col-md-6 col-12  ">
          <label class="form-label"><b>Product Name: </b></label>
          <br>
          <input type="text" name="Productname" class="form-control" placeholder="Product Name" style="border-color: rgb(23, 63, 98);">
        </div>

        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b> Price : </b></label>
          <br>
          <input type="text" name="price" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>


        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b>Color : </b></label>
          <br>
          <input type="text" name="color" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>


        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b>MRP : </b></label>
          <br>
          <input type="text" name="SKU" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>

        <div class="col-md-6 col-12 my-2">
          <label class="form-label"><b>Quantity: </b></label>
          <br>
          <input type="text" name="Quantity" class="form-control" placeholder=" " style="border-color: rgb(23, 63, 98);">
        </div>



        <div class="col-12">
          <center>
            <h4 style="color: rgb(23, 63, 98);">
          <b>    Product Description </b> 
            </h4> 
          </center>
        </div>
        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b>Product Dimensions : </b></label>
          <br>
          <input type="text" name="Dimensions" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>

        <div class="col-md-6 col-12 my-2">
          <label class="form-label"><b>Overall Dimension :</b></label>
          <br>
          <input type="text" name="Overall" class="form-control" placeholder=" " style="border-color: rgb(23, 63, 98);">
        </div>




        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b>No. of Bulb Holders : </b></label>
          <br>
          <input type="text" name="Holders" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>


        <div class="col-md-6 col-12 my-2">
          <label class="form-label"><b>Holder & Plug Type :</b></label>
          <br>
          <input type="text" name="Plug" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>

        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b> Package Contents : </b></label>
          <br>
          <input type="text" name="Contents" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>

        <div class="col-md-6 col-12">
          <label class="form-label"><b>Bulb Provided :</b></label>
          <br>
          <input type="text" name="Provided" class="form-control" placeholder=" " style="border-color: rgb(23, 63, 98);">
        </div>


        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b>Product Material : </b></label>
          <br>
          <input type="text" name="Material" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>

        <div class="col-md-6 col-12 my-2">
          <label class="form-label"><b> Product Weight (KG) :</b></label>
          <br>
          <input type="text" name="Weight" class="form-control" placeholder=" " style="border-color: rgb(23, 63, 98);">
        </div>

        <div class="col-md-6 col-12  my-2">
          <label class="form-label"><b> Country Of Origin : </b></label>
          <br>
          <input type="text" name="Origin" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">
        </div>


        <div class=" col-12  my-2">
          <label class="form-label"><b> Product Description : </b></label>
          <br>
          <textarea type="text" name="Description" class="form-control" placeholder="" style="border-color: rgb(23, 63, 98);">

          </textarea>
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

<?php include "include/footer.php"; ?>