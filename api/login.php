<?php
session_start();
require "../admin/conn/conn.php";


if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];


    $sql = "SELECT * FROM `userdata` WHERE email='$email' and password='$pswd'";
    
    if (mysqli_query($conn, $sql)) {
      $_SESSION["Adobeuserdata12"]=$email;
      echo "<script>
      alert('Welcome to Adorable lighing')
      window.location.href='../index.php';
  </script>";
    } else {
      echo  "<script>
      alert('Your is not register please singin')
      window.location.href='../login.php';
  </script>";
    }
    
}

?>