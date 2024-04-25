<?php

include "./include/header.php";
require "./admin/conn/conn.php";


$username4 = $_SESSION["Adobeuserdata12"];

?>
<style>
  p {
    margin-bottom: 0px;
    font-size: 15px;
    font-weight: 400;
    color: #000000;
    line-height: 24px;
  }

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

  .deletebtn{
    position: absolute;
    top: 1px;
  }

  @media(max-width:540px){
    .deletebtn{
  
    right:1px;
  }
  }
</style>

<?php

if ($username4 == true) {

?>
  <section class="my-5 py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-9 d-flex flex-wrap P-3" style="  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); border-radius:14px;">
          <?php
          $sql = "SELECT * FROM `cart` WHERE  email='$username4'";
          if ($data = mysqli_query($conn, $sql)) {
            while ($row = mysqli_fetch_assoc($data)) {
              $prodname = $row['productname'];
              $psql = "SELECT * FROM `product_table` WHERE product_id='$prodname'";
              $dataname = mysqli_query($conn, $psql);
              if (mysqli_num_rows($dataname) > 0) {
                while ($dname = mysqli_fetch_assoc($dataname)) {


          ?>
                  <div class="col-md-5 my-3">
                    <img src="./admin/api/product_img/<?php echo $dname['product_img1'];  ?>" width="100%" height="214px;" alt="">
                  </div>
                  <div class="col-md-5 my-3">
                    <p>
                      <b class="pname"><?php echo  $dname['product_name'];  ?></b>
                    </p>
                    <p class="productid" style="display:none"><?php echo  $dname['product_id'];  ?></p>
                    <p class="my-3">
                      <b> Personalisation : </b> <span class="personalisation"><?php if (empty($row['Personalisation'])) { echo "Not requested on this item.";} else {echo  $row['Personalisation']; }

                        ?>
                      </span>
                    </p>


                    <p>
                      <b>
                        Rs :
                      </b>
                      <span class="rates"><?php echo  $dname['Prices']; ?> </span>
                    </p>


                    <div class="qty-container my-3">
                    <form  action="./api/add.php" method="post">

<input type="text" name="username" value="<?php echo $username4  ?>" id="" style="display:none;">
<input type="text" name="productname" value="<?php echo $prodname  ?>" id="" style="display:none;">
<input type="text" name="fquntity" value="<?php echo $row['f_quntity'] ?>" id="" style="display:none;">

                        <button class="qty-btn-minus btn-light" name="subtrack"  ><i class="fa fa-minus"></i></button>
                        </form>
                      <input type="text" name="qty" value="<?php echo $row['f_quntity'] ?>" class="input-qty" />
                      <form action="./api/add.php" method="post">

<input type="text" name="username" value="<?php echo $username4  ?>" id="" style="display:none;">
<input type="text" name="productname" value="<?php echo $prodname  ?>" id="" style="display:none;">
<input type="text" name="fquntity" value="<?php echo $row['f_quntity'] ?>" id="" style="display:none;">

<button class="qty-btn-plus btn-light" name="add" ><i class="fa fa-plus text-light"></i></button>
                        </form>
                   
                    </div>
                  </div>
                  <div class="col-md-2 my-3 d-flex align-items-center">
<a href="./api/addtocartdelete.php?id=<?php echo $prodname   ?> && user=<?php echo $username4  ?>" class="btn btn-danger" style="    position: absolute;
    top: 1px;">Delete</a>
                    <p>
                      <b>
                        Rs :
                      </b>
                      <span class="prises"><?php echo  $dname['Prices']*$row['f_quntity'] ;?> </span>

                    </p>
                  </div>

                <?php
                }
              } else {
                $sqlvar = "SELECT * FROM `variation` WHERE  variationid='$prodname'";
                $datanamevar = mysqli_query($conn, $sqlvar);
                while ($dnamevar = mysqli_fetch_assoc($datanamevar)) {
                ?>
                  <div class="col-md-5 my-3">
                    <?php
                    $pid = $dnamevar['product_name'];
                    $sa = "SELECT * FROM `product_table` WHERE product_id ='$pid'";
                    $ss = mysqli_query($conn, $sa);
                    while ($sq1 = mysqli_fetch_assoc($ss)) {
                    ?>
                      <img src="./admin/api/product_img/<?php echo $sq1['product_img1'];  ?>" width="100%" height="214px;" alt="">
                    <?php
                    }
                    ?>
                  </div>
                  <div class="col-md-5 my-3">
                    <p class="pname"><b><?php echo  $dnamevar['name'];  ?></b></p>
                    <p class="productid" style="display:none"><?php echo  $dnamevar['variationid'];  ?></p>

                    <p >
                      <b>
                        Type :</b>
                     <span class="ptype">   <?php echo  $dnamevar['variation_name'];  ?>
                     </span>
                     
                    </p>
                    <p class="my-3">
                      <b> Personalisation : </b> <span class="personalisation"><?php if (empty($row['Personalisation'])) { echo "Not requested on this item.";} else { echo  $row['Personalisation'];}

                        ?>
                      </span>
                    </p>


                    <p>
                      <b>
                        Rs :
                      </b>
                      <span class="rates"><?php echo  $dnamevar['price'];?></span></p>
                    <?php

                    $sa = "SELECT * FROM `product_table` WHERE product_id ='$pid'";
                    $ss = mysqli_query($conn, $sa);
                    while ($sq1 = mysqli_fetch_assoc($ss)) {
                    ?>
                      <p style="display: none;">
                      <?php
                      echo  $sq1['Quantity'];
                    } ?>
                      </p>
                      <div class="qty-container my-3">
                      <form  action="./api/add.php" method="post">

<input type="text" name="username" value="<?php echo $username4  ?>" id="" style="display:none;">
<input type="text" name="productname" value="<?php echo $prodname  ?>" id="" style="display:none;">
<input type="text" name="fquntity" value="<?php echo $row['f_quntity'] ?>" id="" style="display:none;">

                        <button class="qty-btn-minus btn-light" name="subtrack"  ><i class="fa fa-minus"></i></button>
                        </form>
                       
                        <input type="text" name="qty" value="<?php echo $row['f_quntity'] ?>" readonly class="input-qty" />
                        <form action="./api/add.php" method="post">

<input type="text" name="username" value="<?php echo $username4  ?>" id="" style="display:none;">
<input type="text" name="productname" value="<?php echo $prodname  ?>" id="" style="display:none;">
<input type="text" name="fquntity" value="<?php echo $row['f_quntity'] ?>" id="" style="display:none;">

<button class="qty-btn-plus btn-light" name="add" ><i class="fa fa-plus text-light"></i></button>
                        </form>
                      </div>
                  </div>
                  <div class="col-md-2 my-3 d-flex align-items-center">
                  <a href="./api/addtocartdelete.php?id=<?php echo $prodname   ?>  && user=<?php echo $username4  ?>" class="btn btn-danger deletebtn" style="   ">Delete</a>
                    <p>
                      <b>
                        Rs :
                      </b>
                      <span class="prises">

                        <?php
                        echo  $dnamevar['price']*$row['f_quntity'] ;
                        ?>
                      </span>

                    </p>
                  </div>
          <?php

                }
              }
            }
          }
          ?>
        </div>
        <div class="col-md-3 py-5">
          <center>
            <h4>
              <b>
                How you'll pay

              </b>
            </h4>

          </center>

          <div class="col-12 d-flex flex-wrap my-3 py-2">
            <div class="col-7 my-2">
              <p>

                <b>
                  Items total
                </b>
              </p>

            </div>
            <div class="col-5 my-2 px-0">

              <p>
                <b>
                  Rs :
                </b>
                <span id="prised">

                </span>
              </p>
            </div>
            <div class="col-6 my-2">
              <p>

                <b>
                  delivery
                </b>
              </p>

            </div>
            <div class="col-6 my-2">
              <center>
                <p>
                  free
                </p>
              </center>
            </div>



          </div>

          <hr>

          <div class="d-flex">
            <div class="col-6">
              <p>
                <b>
                  Total :

                </b>
              </p>
            </div>

            <div class="col-6">
              <p>
                <b>
                  ₹
                  <span id="total">

                  </span>
                </b>
              </p>
            </div>

          </div>
          <div class="py-4">

  
          <center>


            <a  href="./checkout.php"class="btn-sm btn-dark text-uppercase my-5 py-2 px-3"> Proceed to checkout </a>
            <!-- </a> -->
            <form action="" id="divSelections" method="post">
            </form>

          </center>
          </div>


        </div>
      </div>
    </div>
  </section>

<?php

}
else{
 echo " <script> window.location.href='./index.php'; </script>";
}
?>

<?php
include "./include/footer.php";
?>



<script>

  sum();

  function sum() {
    var nodeList = document.querySelectorAll(".prises");
    var total = 0;

    for (let i = 0; i < nodeList.length; i++) {
      total += parseInt(nodeList[i].textContent);
      console.log(total);
    }
    document.getElementById('prised').innerHTML = total;
    document.getElementById('total').innerHTML = total;
  }


  function checkouts() {
    let n = document.querySelectorAll(".pname");
    var len = n.length;
    if (len === 0) {

      document.getElementById("button").disabled = true;

    }
  
    textBox(len);

    document.getElementById('divSelections').innerHTML += '<input type="text" id="lengthBox" name="length" value="' + len + '" style="display:none;">';


    function textBox(selections) {
      for (var j = 0; j <= selections - 1; j++) {
        let m = document.querySelectorAll(".pname");
        let pri = document.querySelectorAll(".rates");
        let quntity = document.querySelectorAll(".input-qty");
        let personalisation = document.querySelectorAll(".personalisation");
    let pid =document.querySelectorAll(".productid");

        document.getElementById('divSelections').innerHTML += '<input type="text" id="MytxBox' + j + '" name="name' + j + '" value="' + m[j].textContent + '" style="display:none;">';
        document.getElementById('divSelections').innerHTML += '<input type="text" id="priceBox' + j + '" name="price' + j + '" value="' + pri[j].textContent + '" style="display:none;">';
        document.getElementById('divSelections').innerHTML += '<input type="text" id="priceBox' + j + '" class="newqun" name="qunti' + j + '" value="' + quntity[j].value + '" style="display:none;">';
        document.getElementById('divSelections').innerHTML += '<input type="text" id="priceBox' + j + '" class="newqun" name="type' + j + '" value="' + pid[j].textContent + '" style="display:none;">';
        document.getElementById('divSelections').innerHTML += '<input type="text" id="personalisation' + j + '" class="newqun" name="personalisation' + j + '" value="' + personalisation[j].textContent + '" style="display:none;">';




      }

    }
    document.getElementById('divSelections').submit();
  }
</script>