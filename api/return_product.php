<?php
require "../admin/conn/conn.php";


 $id=$_GET['id'];
$sql="UPDATE `orderlist` SET`orderstatus`='Reutrn' WHERE id='$id'";


if(mysqli_query($conn, $sql)){
    ?>
<script>
    window.location.href="../orderlist.php";
</script>

<?php
}
