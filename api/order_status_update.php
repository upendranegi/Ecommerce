<?php
require "../admin/conn/conn.php";

$orderstatus=$_POST['Status'];
$id=$_POST['id'];
$sql="UPDATE `orderlist` SET`orderstatus`='Cancel' WHERE id='$id'";


if(mysqli_query($conn, $sql)){
    ?>
<script>
    window.location.href="../orderlist.php";
</script>

<?php
}
