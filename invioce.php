<?php
require "./pdf/vendor/autoload.php";
require "./admin/conn/conn.php";


function productvalue($productid){
  global $conn,$proname;
  $psql = "SELECT * FROM `product_table` WHERE product_id='$productid'";
$presult = mysqli_query($conn, $psql);

if (mysqli_num_rows($presult) > 0) {

  while($prow = mysqli_fetch_assoc($presult)) {
    $proname=$prow['product_name'];
  }
}
else{
  $vsql = "SELECT * FROM `variation` WHERE variationid='$productid'";
  $vresult = mysqli_query($conn, $vsql);
  
  if (mysqli_num_rows($vresult) > 0) {
 
    while($vrow = mysqli_fetch_assoc($vresult)) {
      $proname=$vrow['name'];
    }
  }
}


return  $proname;
}

$pid=$_GET['pid'];
$tr=$_GET['tr'];
productvalue($pid);
$sql="SELECT * FROM `orderlist` WHERE product_name='$pid' && trasctionid='$tr'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
 

$html='
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="width:100%;">





<div style="float:left; width:60%;">

<p style="padding:0px 25px;     font-size:14px;   margin:0px; font-weight:600;"><b> Order id :  </b>'.$row['orderid'].'  </p>

</div>



<div style="float:left; width:40%;">

<p style="padding:0px 25px;     font-size:14px;   margin:0px; font-weight:600;"><b> Order Date :  </b> '.$row['timestamp'].'  </p>

</div>

</div>

<hr style="width:100%;">

<div>




<div  style="width:100%; border:1px solid; border-radius:10px; padding:0px 0px; margin:5px 5px;  float:left;">


<div  style="padding:10px 0px; border-right:1px solid; width:49%; height:120px; margin:0px 3px; float:left;">

<h5 style="padding:0px 25px;     font-size: 1.28571429em;  margin:3px 6px 1px; font-weight:600;">Sold By   </h5>
<hr style="width:100%; ">
<p  style="padding:0px 2px;  font-size:15px; margin:2px 2px 1px; ">
<b>
Name :
</b> Adorable Lightnings
</p>

<p  style="padding:0px 2px; font-size:15px; margin:3px 2px 1px; ">
<b>
Address :
</b> Adobe
</p>

  

</div>



<div style="padding:10px 0px;  height:;  width:50%; margin:0px; float:left;">

<h5 style="padding:0px 25px;     font-size: 1.28571429em;  margin:3px 0px 1px; font-weight:600;">Shipping ADDRESS   </h5>
<hr style="width:100%; ">
<p  style="padding:0px 2px;  font-size:15px; margin:2px 2px 1px; ">
<b>
Name :
</b> '.$row['Name'].'
</p>

<p  style="padding:0px 2px; font-size:15px; margin:3px 2px 1px; ">
<b>
Address :
</b> '.$row['Adrees'].', '. $row['Area'].', '.$row['city'].', '.$row['State'].'
</p>

  

</div>



</div>






</div>



<table style="width:100%; margin:20px 0px; border-collapse: collapse;">
<thead>
<tr>
  <th style=" border: 1px solid; padding:10px 0px;"><center>
  Product  
  </center>
  </th>
  <th  style=" border: 1px solid; padding:10px 0px;"><center>
  Personalisation
  </center></th>
  <th  style=" border: 1px solid; padding:10px 0px;"><center>
  Qty  
  </center></th>
  <th  style=" border: 1px solid; padding:10px 0px;"><center>
  Gross
Amount  
  </center></th>
  <th  style=" border: 1px solid; padding:10px 0px;"><center>
  Taxable
Value  
  </center></th>
  <th  style=" border: 1px solid; padding:10px 0px;"><center>
  Total  
  </center></th>
</tr>
</thead>

<tbody>

<tr>
<td  style=" border: 1px solid; padding:10px 2px;"><center>
<p>
'.productvalue($row['product_name']).'
</p>
 </center></td>
<td  style=" border: 1px solid; padding:10px 2px;"><center> '.$row['Personalisation'].' </center></td>
<td  style=" border: 1px solid; padding:10px 2px;"><center> '.$row['quntity'].'

</center></td>
<td  style=" border: 1px solid; padding:10px 2px;"> <center> '.$row['price'].' </center>  </td>
<td  style=" border: 1px solid; padding:10px 2px;"><center> 2   </center> </td>
<td  style=" border: 1px solid; padding:10px 2px;"><center>   '.$row['quntity']*$row['price'].' </center></td>
</tr>
<tr style=" border: 1px solid;">
<td  colspan="4" style="padding:10px 2px;" >
<center>   TOTAL QTY:'.$row['quntity'].'</center>
</td>
<td  colspan="2" style="padding:10px 2px;" >
<center>  <p>
<center>   TOTAL PRICE: '.$row['quntity']*$row['price'].'  </center>
</p>
 </center>
</td>

</tr>
</tbody>
 
 
</table>





</body>
</html>
';

}
}


$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>

