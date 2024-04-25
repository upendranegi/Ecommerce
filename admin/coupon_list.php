<?php
include "./include/header.php";
require "./conn/conn.php";
?>


<Section class="my-5 py-5">
    <div class="container">
        <center>
            <h3>
                <b>

                    Product Review
                </b>
            </h3>
        </center>
        <div class="row px-md-5">
            <div class="col-12"
                style=" box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22); border-radius: 13px;">
                <div class="table-responsive">
                    <table class="table my-5">
                        <thead>
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">Coupon Code </th>
                                <th scope="col">Amount </th>
                                <th scope="col">Coupon Status </th>
                                <th scope="col"> Delete </th>

                        </thead>
                        <tbody>

                            <?php $i=1;

$sql="SELECT * FROM `cupon_code` WHERE 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  

?>
                            <tr>
                                <th scope="row"> <?php echo $i   ?> </th>
                                <td><?php echo $row['coupencode']   ?></td>
                                <td><?php echo $row['amount']   ?></td>


                                <td><?php echo $row['coupon_status']   ?></td>

                                <td> <a href="./api/coupon_delete.php? id=<?php echo $row['id']   ?>" class="btn btn-danger">Delete</a></td>

                            </tr>
                            <?php    
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



<script>
function showUser(str) {


    var perform = str.parentElement.submit();


}
</script>


<?php

include "./include/footer.php";

?>