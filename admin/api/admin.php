<?php
require "../conn/conn.php";
session_start();
if (isset($_POST['submit'])) {
 
  $user = $_POST['userid'];
  $pwd = $_POST['pasw'];

  $query = "SELECT * FROM `adorableadmin` WHERE userid ='$user' && paw ='$pwd'";
  $data = mysqli_query($conn, $query);

  $total = mysqli_num_rows($data);

  if ($total == 1) {


  
    $_SESSION["adminusers"] = $user;
    echo " <script>
    alert('Login Successfully')
     window.location.href='../admin.php'; </script>";
  
    
  } else {
    echo "      <script>
    alert('Login Failed')
    window.location.href='../index.php'; 
  </script>";
  }
}


?>