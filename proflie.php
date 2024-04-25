<?php
include "./include/header.php";
require "./admin/conn/conn.php";
session_start();
$ueseremail =$_SESSION["Adobeuserdata12"];


if ($ueseremail == true) {
?>

<style>
    .submenu{
        flex: auto;
 
    margin: 0.5rem;
    padding: 0 1.5rem;
    position: relative;
    color: #fff;
    border-radius: 0.5rem;
    background: linear-gradient(45deg, #0e71c8, #1da1f2);
    box-shadow: 0px 4px 10px rgba(19, 127, 212, 0.5);
    transition: all 0.3s ease;
    }
  
</style>
<section>
    <div class="container my-md-5 py-md-5 col-12">
<div class="d-flex flex-wrap ">
<div class="col-md-3 my-3">
<ul class="d-flex flex-wrap col-12">
    <li class="submenu col-md-12 col-5">
        <a href=""  style="color: #fff;">
          <center>
<p class="py-2" style="color: #fff; font-size: 18px;">
    <b>
    Profile
    </b>
</p>
          </center>  
        </a>
    </li>

    <li class="submenu col-md-12 col-5">
        <a href="./orderlist.php">
        <center>
<p class="py-2" style="color: #fff; font-size: 18px;">
    <b>
    Order
    </b>
</p>
          </center> 
            
        </a>
    </li>
</ul>
</div>
<div class="col-md-9">
    <div class="d-flex flex-wrap">
<div class="col-9">
<center>
        <h3>
            User Profile
        </h3>
    </center>
</div>
<div class="col-3">
<a href="./profile_edit.php? eid=<?php echo $ueseremail  ?>" class="btn p-1" style="    background-color: #28a745; color:#fff;    border-color: #28a745;"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="20px" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a>
</div>
    </div>



<?php 
$sql = "SELECT * FROM `userdata` WHERE email='$ueseremail'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  
  ?>

<div class="">

<table class="table my-3">

  
  <tbody>
    <tr class="py-2">
      <th scope="row"> Name :</th>
      <td><?php echo $row['name']  ?></td>
     
    </tr>
    <tr class="py-2">
      <th scope="row">Email :</th>
      <td><?php echo $row['email']  ?></td>
     
    </tr>
    <tr class="py-2">
      <th scope="row">Mobile Number :</th>
      <td><?php echo $row['Mnumber']  ?></td>
     
    </tr>

    <tr class="py-2">
      <th scope="row">Address :</th>
      <td><?php echo $row['Address']  ?></td>
     
    </tr>

    
    <tr class="py-2">
      <th scope="row">Area :</th>
      <td><?php echo $row['Area']  ?></td>
     
    </tr>

    <tr class="py-2">
      <th scope="row">City :</th>
      <td><?php echo $row['City']  ?></td>
     
    </tr>

    <tr class="py-2">
      <th scope="row">Pin code :</th>
      <td><?php echo $row['pincode']  ?></td>
     
    </tr>

    <tr class="py-2">
      <th scope="row">State :</th>
      <td><?php echo $row['state']  ?></td>
     
    </tr>

  </tbody>
</table>

<?php
  }
}
}
else{

  echo "<script>  window.location.href='./index.php';
  </script>";
}
?>
</div>
</div>
</div>
    </div>
</section>









<?php
include "./include/footer.php";

?>