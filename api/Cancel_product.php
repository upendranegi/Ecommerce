<?php
require "../admin/conn/conn.php";

$user_id=$_GET['user_id'];
$id=$_GET['id'];
$sql="UPDATE `orderlist` SET`orderstatus`='Cancel' WHERE id='$id' and userid='$user_id'";


if(mysqli_query($conn, $sql)){
    ?>
<script>
    window.location.href="../orderlist.php";
</script>

<?php
}













?>