<?php
session_start();


$adminusers1 = $_SESSION["adminusers"];

if ($adminusers1 == true) {
} else {
  header('Location: index.php');
}




function totalnum($sql, $conn){
  $r =mysqli_query($conn,$sql);

  if($r){
    $rowcount = mysqli_num_rows($r);

}
return $rowcount;
}


include "conn/conn.php";
?>


<style>
.login-box {
    background: rgb(23, 63, 98);
    background: linear-gradient(90deg, rgba(23, 63, 98, 1) 0%, rgba(14, 50, 86, 1) 100%);
    border-radius: 20px;
    box-shadow: 11px 11px 23px -7px rgba(0, 0, 0, 0.4);

    width: 96%;
}
</style>


<?php include "include/header.php"; ?>
<main id="main" class="main">

    <section class="section dashboard" style="text-align: center;">
        <div class="row">





            <div class="d-flex flex-wrap  justify-content-center">


                <div class=" col-md-6  col-12  my-2">
                    <div class="login-box py-3 d-flex "
                        style="background: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%) !important;">
                        <div class="col-8 d-flex align-items-center justify-content-between">

                            <h4 class="text-light"> <b>
                                    Total Category
                                </b>

                            </h4>

                        </div>

                        <div class="col-4">
                            <center>
                                <p class="text-light" style="    font-size: 25px;">
                                    <b><?php echo totalnum("SELECT * FROM `categories` WHERE 1",$conn)   ?></b>

                                </p>
                            </center>

                        </div>






                    </div>
                </div>



                <div class=" col-md-6  col-12 my-2">
                    <div class="login-box py-3 d-flex "
                        style="background: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%) !important;">
                        <div class="col-8 d-flex align-items-center justify-content-between">

                            <h4 class="text-light"> <b>
                                    Total Product
                                </b>

                            </h4>

                        </div>

                        <div class="col-4">
                            <center>
                                <p class="text-light" style="    font-size: 25px;">
                                    <b><?php echo totalnum("SELECT * FROM `product_table` WHERE 1",$conn)   ?></b>

                                </p>
                            </center>

                        </div>






                    </div>
                </div>

                <div class=" col-md-6  col-12 my-2">
                    <div class="login-box py-3 d-flex "
                        style="background: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%) !important;">
                        <div class="col-8 d-flex align-items-center justify-content-between">

                            <h4 class="text-light"> <b>
                                    Total Variation
                                </b>

                            </h4>

                        </div>

                        <div class="col-4">
                            <center>
                                <p class="text-light" style="    font-size: 25px;">
                                    <b><?php echo totalnum("SELECT * FROM `variation` WHERE 1",$conn)    ?></b>

                                </p>
                            </center>

                        </div>






                    </div>
                </div>

                <div class=" col-md-6  col-12   my-2">
                    <div class="login-box py-3 d-flex "
                        style="background: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%) !important;">
                        <div class="col-8 d-flex align-items-center justify-content-between">

                            <h4 class="text-light"> <b>
                                    Total Order
                                </b>

                            </h4>

                        </div>

                        <div class="col-4">
                            <center>
                                <p class="text-light" style="    font-size: 25px;">
                                    <b><?php echo  totalnum("SELECT * FROM `orderlist` WHERE 1",$conn)    ?></b>

                                </p>
                            </center>

                        </div>






                    </div>
                </div>


            





             
            </div>
        </div>





    </section>


    <Section class="my-5 py-5">
        <div class="container-md container-fluid px-0">

            <div class="px-md-5">
                <div class="py-3"  style=" box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22); border-radius: 13px;">
                    <center>
                        <h3 class="mt-4">
                            <b>

                                Category
                            </b>
                        </h3>
                    </center>
                    <div class="table-responsive">
                    <table class="table my-5">
                        <thead>
                            <tr>
                                <th class="my-3" scope="col">S.No.</th>
                                <th class="my-2" scope="col"> Category Image </th>
                                <th class="my-2" scope="col">Category Name </th>
                                <th class="my-2" scope="col"> Edit </th>

                                <th class="my-2" scope="col"> Delete </th>

                        </thead>
                        <tbody>

                            <?php $i=1;

$sql="SELECT * FROM `categories` WHERE 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  

?>
                            <tr>
                                <th scope="row"> <?php echo $i   ?> </th>
                                <td> <img src="./api/cat_img/<?php echo $row['cat_img']   ?>" width="60px" alt=""> </td>
                                <td><?php echo $row['name']   ?></td>



                                <td> <a href="./categori_edit.php? id=<?php echo $row['productid']  ?>"
                                        class="btn btn-success">Edit</a></td>

                                <td> <a href="./api/category_delete.php? id=<?php echo $row['productid']  ?>"
                                        class="btn btn-danger">Delete</a></td>

                            </tr>
                            <?php    
                        $i++;
  }
} else {
 
}
?>

                        </tbody>
                    </table>
                    </div>
                </div>

            </div>
        </div>
    </Section>



</main>

<?php include "./include/footer.php" ?>