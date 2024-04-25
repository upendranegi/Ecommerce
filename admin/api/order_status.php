<?php
require "../conn/conn.php";

$orderstatus=$_POST['Status'];
$id=$_POST['id'];
if($orderstatus=='Deliverd'){
    $tdate=date("Y-m-d");
}
$sql="UPDATE `orderlist` SET`orderstatus`='$orderstatus' ,`order_staus_date`='$tdate' WHERE id='$id'";


if(mysqli_query($conn, $sql)){
    ?>
<script>
    window.location.href="../orderlist.php";
</script>

<?php
}
