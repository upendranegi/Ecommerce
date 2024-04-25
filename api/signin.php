<?php

require "../admin/conn/conn.php";


if(isset($_POST['Signup'])){
    $name=$_POST['Name'];
    $email=$_POST['email'];
    $Mnumber=$_POST['Mnumber'];
    $pswd=$_POST['pswd'];
    #check user all ready exist
   $usercheck=" SELECT * FROM `userdata` WHERE email='$email'";
 $rs=  mysqli_query($conn, $usercheck);
   if(mysqli_num_rows($rs)>1){
    echo "<script>
    alert('Your email is  all ready register please login')
    window.location.href='../index.php';
</script>";
   }
    else{


    $sql = "INSERT INTO `userdata`( `name`, `email`, `Mnumber`, `password`) VALUES ('$name','$email','$Mnumber','$pswd')";
    
    if (mysqli_query($conn, $sql)) {

      echo "<script>
      alert('Welcome to Adorable lighing')
      window.location.href='../index.php';
  </script>";
    } else {
      echo "<script>
      alert(' We are unable to register  please sign up again ')
      window.location.href='../index.php';
  </script>";
    }
    
}
    mysqli_close($conn);


}

?>
