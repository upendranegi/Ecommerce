<?php
require "../admin/conn/conn.php";

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $Mnumber= $_POST['Mnumber'];
    $Address= $_POST['Address'];
    $Area= $_POST['Area'];
    $City= $_POST['City'];
    $PinCode= $_POST['PinCode'];
    $State= $_POST['State'];
    $email= $_POST['email'];
   $sql="UPDATE `userdata` SET `name`='$name',`Mnumber`='$Mnumber',`Address`='$Address',`Area`='$Area',`City`='$City',`state`='$State',`pincode`='$PinCode' WHERE email='$email'";
   if (mysqli_query($conn, $sql)) {
    echo  "<script>
    alert('Profile Edit Successful')
    window.location.href='../index.php';
</script>";
}
else{
    echo  "<script>
    alert('Failed to Edit Profile ')
    window.location.href='../profile.php';
</script>";
}
}



?>