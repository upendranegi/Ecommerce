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
<div class="row px-5">
    <div class="col-12" style=" box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22); border-radius: 13px;">
    <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name </th>
      <th scope="col">Email </th>
      <th scope="col">product Review</th>
      <th scope="col">Rating</th>
      <th scope="col"> Status </th>
      <th scope="col"> Delete </th>
      <th scope="col">Edit  </th>
  </thead>
  <tbody>

  <?php $i=1;

if(empty($_GET['id'])){
   $sql="SELECT * FROM `review` WHERE 1"; 
    
}else{
  $pro_id=$_GET['id'];
  $sql="SELECT * FROM `review` WHERE product_id='$pro_id'";  
}

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  

?>
    <tr>
      <th scope="row"> <?php echo $i   ?> </th>
      <td><?php echo $row['name']   ?></td>
      <td><?php echo $row['userid']   ?></td>
      <td><?php echo $row['product_rview']   ?></td>
      <td><?php echo $row['rating']   ?></td>
     
   
      <td> <?php if($row['pstatus']==1){  ?>
        <button  class="btn btn-success px-4"> <B> Active  </B></button>
      <?php  }
      if($row['pstatus']==0){   ?>
      <button  class="btn btn-warning"> <B> Deactive  </B></button>
      <?php  } ?>
      </td>
      <td> <a href="./api/Product_review_delete.php? id=<?php echo $row['id']   ?>" type="button" class="btn btn-danger">Delete</a></td>
      <td>
    <form action="./api/review_edit.php" method="post">
        <input type="text" name="id" value="<?php echo $row['id']   ?>" style="display:none;">
<select id="cars" name="status"  onchange="showUser(this)" style="    border-radius: 7px;">
  <option value="">Edit</option>
  <option value="1">Active</option>
  <option value="0">Deactive</option>

</select>
</form></td>
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
</Section>



  <script>
function showUser(str) {


 var perform=str.parentElement.submit();


}

</script>


<?php

include "./include/footer.php";

?>