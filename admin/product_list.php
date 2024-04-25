<?php
session_start();


$adminusers1 = $_SESSION["adminusers"];

if ($adminusers1 == true) {
} else {
  header('Location: index.php');
}

include "include/header.php";
include "conn/conn.php"; ?>
<style>
  .dropbtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 90px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 2px 12px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #ddd;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }
</style>


<style type="text/css">
  .one_ln {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: clip;
  }
</style>



<main id="main" class="main">
  <!-- <center><h3><u><b>All Product Data.</b></u></h1></center> -->

  <div class="container-fluid">

    <div class="row py-2">
      



    </div>
  </div><br>

  <?php



  ?>
  <section class="section">


    <div class="row">

      <style>
        .ggh {
          display: block;
          width: 100%;
          height: calc(1.5em + 0.75rem + 2px);
          padding: 0.375rem 0.75rem;
          font-size: 1rem;
          font-weight: 400;
          line-height: 1.5;
          color: #495057;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid #ced4da;
          border-radius: 0.25rem;
          transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
      </style>
     


   
      <div class="col-12 p-0">
        <div class="card" style="background: linear-gradient(90deg, rgba(123,159,190,1) 0%, rgba(90,112,133,1) 100%);">
          <div class="card-body p-0"><br>
            <div class="d-flex flex-wrap">
              
              <div class=" col-12 my-4">
        <center>
          <h3 class="text-light"><b>Products</b></h3>
        </center>
      </div>
             
              <?php
              $sql = "SELECT * FROM `product_table` WHERE 1";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

              ?>
                  <div class="col-md-2 col-6 px-2 mx-md-0 ">
                    <div class="card border">




                      <img class="img-fluid mx-1 mt-1 mb-1 " src="./api/product_img/<?php echo $row['product_img1'];  ?>" alt="Card image cap" style=" width: 96%; height: 157px; ">



                      <div class="card-body">

                        <center>
                          <p class="one_ln my-0 px-0" style="font-size: 13px;  width: ;  overflow: hidden;   text-overflow: ellipsis;"><b><?php echo $row['product_name'];  ?> </b></p>
                        </center>

                        <p>

                        </p>
                       
                  
                        
                            <div class="row">
                              <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    float: inline-end;" >
                                  <img src="./img/s.png" width="20">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <?php
$vardata=$row['product_id'];
 $psql = "SELECT * FROM `variation` WHERE product_name='$vardata'";
 $presult = mysqli_query($conn, $psql);

 if (mysqli_num_rows($presult) > 0) {
                                  ?>
                                  <a class="dropdown-item " href="./variation.php? vardata=<?php echo $row['product_id'] ?>"><b> Variation </b></a>

                                  <?php
 }

                                  ?>
                                  <a class="dropdown-item text-success" href="./product_update.php? id=<?php echo $row['id'];   ?>"><b> Edit</b></a>
                                  <a class="dropdown-item text-info" href="./product_review.php? id=<?php echo $row['product_id'];   ?>"><b> Review</b></a>
                                  <a class="dropdown-item text-danger" href="./api/product_delete.php? id=<?php echo $row['product_id'];   ?>"><b>Delete</b></a>
                                </div>
                              </div>


                            </div>
             
                    
                      </div>
                    </div>
                  </div>
              <?php
                }
              }

              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






</main><!-- End #main -->

<script>
  // Initialize the DataTable
  $(document).ready(function() {
    $('#tableID').DataTable({

      // Set the 3rd column of the
      // DataTable to ascending order
      order: [
        [4, 'asc']
      ]
    });
  });
</script>

<?php include "include/footer.php"; ?>