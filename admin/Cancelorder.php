<?php
session_start();


$adminusers1 = $_SESSION["adminusers"];

if ($adminusers1 == true) {
} else {
  header('Location: index.php');
}


include "./include/header.php";



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


function varitiontype($varid){
  global $conn,$varname;

  $vsql = "SELECT * FROM `variation` WHERE variationid='$varid'";
  $vresult = mysqli_query($conn, $vsql);
  
  if (mysqli_num_rows($vresult) > 0) {
 
    while($vrow = mysqli_fetch_assoc($vresult)) {
      $varname=$vrow['variation_name'];
    }
  }
  else{
    $varname="None";
  }



return  $varname;
}

if ($adminusers1 == true) {
} else {
  header('Location: index.php');
}


include "conn/conn.php"; ?>





<Section class="my-5 py-5">


<style>

</style>

    <div class="container">
      <div class="header_wrap px-1">
        <div class="num_rows">
		
				<div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
			 		<select class  ="form-control" name="state" id="maxRows">
						 
						 
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
            <option value="5000">Show ALL Rows</option>
						</select>
			 		
			  	</div>
        </div>
        <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
        </div>
      </div>
<table class="table table-striped table-class" id= "table-id">
  
	
<thead>
                        <tr class="bg-dark tablesdata">
                          
                            <th scope="col" class="">Order id </th>
                            <th scope="col" class="">product_name </th>
                            <th scope="col" class="">quntity </th>
                            <th scope="col" class=""> price </th>
                            <th scope="col" class=""> Name </th>
                            <th scope="col" class=""> Email </th>
                            <th scope="col" class="">Addrees </th>
                            <th scope="col" class="">Transaction id </th>
                            <th scope="col" class=""> Personalisation </th>
                            <th scope="col" class="">coupon_code used </th>
                            <th scope="col" class="">Payment Staus</th>
                            <th scope="col" class="">Order Staus</th>
                            <th scope="col" class="">Order Date</th>
</tr>
                    </thead>
<tbody>

<?php $i=1;

$sql="SELECT * FROM `orderlist` where orderstatus='Cancel'  ORDER BY id DESC;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  

?>
                        <tr>
                         
                            <td><?php echo $row['orderid']   ?></td>
                            <td class="px-0"><p> <?php echo productvalue($row['product_name'])   ?> 
                            </p>
                          
                          <p>
                            <b>
                              Variation Type :
                            </b> <?php echo varitiontype($row['product_name'])   ?> 
                          </p>
                          </td>
                            <td><?php echo $row['quntity']   ?></td>
                            <td><?php echo $row['price']   ?></td>
                            <td><?php echo $row['Name']   ?></td>
                            <td><?php echo $row['userid']   ?> </td>
                            <td class="px-0"> <?php echo $row['Adrees'].', '. $row['Area'].', '. $row['city'].', '. $row['State']   ?>  </td>
                            <td><?php echo $row['trasctionid']   ?></td>
                            <td><?php echo $row['Personalisation']   ?></td>
                            <td><?php echo $row['coupon_code']   ?></td>
                            <td><?php echo $row['pyament']   ?></td>
                            <td><?php echo $row['orderstatus']   ?></td>
                            <td><?php echo $row['timestamp']   ?></td>
                         





                        </tr>
                        <?php    
                        
  }
} else {
 
}
?>
	
  
    <tbody>
</table>

<!--		Start Pagination -->
			<div class='pagination-container'>
				<nav>
				  <ul class="pagination">
				   <!--	Here the JS Function Will Add the Rows -->
				  </ul>
				</nav>
			</div>
      <div class="rows_count">Showing 11 to 20 of 91 entries</div>

</div>



<style>
  .pagination>li>span{
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
  }
</style>










</Section>

<style>
.table-striped>tbody>tr:nth-of-type(odd)>* {
    --bs-table-accent-bg: white;
    color: var(--bs-table-striped-color);
}

  table th , table td{
    text-align: center;
}

table tr:nth-child(even){
   
}

th {

  color: #fff;
}

.pagination {
  margin: 0;
}

.pagination li:hover{
    cursor: pointer;
}

.header_wrap {
  padding:30px 0;
}
.num_rows {
  width: 20%;
  float:left;
}
.tb_search{
  width: 20%;
  float:right;
}
.pagination-container {
  width: 70%;
  float:left;
}

.rows_count {
  width: 20%;
  float:right;
  text-align:right;
  color: #999;
}
</style>


<script>
function showUser(str) {


    var perform = str.parentElement.submit();


}


getPagination('#table-id');
	$('#maxRows').trigger('change');
	function getPagination (table){

		  $('#maxRows').on('change',function(){
		  	$('.pagination').html('');						// reset pagination div
		  	var trnum = 0 ;									// reset tr counter 
		  	var maxRows = parseInt($(this).val());			// get Max Rows from select option
        
		  	var totalRows = $(table+' tbody tr').length;		// numbers of rows 
			 $(table+' tr:gt(0)').each(function(){			// each TR in  table and not the header
			 	trnum++;									// Start Counter 
			 	if (trnum > maxRows ){						// if tr number gt maxRows
			 		
			 		$(this).hide();							// fade it out 
			 	}if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
			 });											//  was fade out to fade it in 
			 if (totalRows > maxRows){						// if tr total rows gt max rows option
			 	var pagenum = Math.ceil(totalRows/maxRows);	// ceil total(rows/maxrows) to get ..  
			 												//	numbers of pages 
			 	for (var i = 1; i <= pagenum ;){			// for each page append pagination li 
			 	$('.pagination').append('<li data-page="'+i+'">\
								      <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
								    </li>').show();
			 	}											// end for i 
     
         
			} 												// end if row count > max rows
			$('.pagination li:first-child').addClass('active'); // add active class to the first li 
        
        
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
       showig_rows_count(maxRows, 1, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

        $('.pagination li').on('click',function(e){		// on click each page
        e.preventDefault();
				var pageNum = $(this).attr('data-page');	// get it's number
				var trIndex = 0 ;							// reset tr counter
				$('.pagination li').removeClass('active');	// remove active class from all li 
				$(this).addClass('active');					// add active class to the clicked 
        
        
        //SHOWING ROWS NUMBER OUT OF TOTAL
       showig_rows_count(maxRows, pageNum, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL
        
        
        
				 $(table+' tr:gt(0)').each(function(){		// each tr in table not the header
				 	trIndex++;								// tr index counter 
				 	// if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
				 	if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
				 		$(this).hide();		
				 	}else {$(this).show();} 				//else fade in 
				 }); 										// end of for each tr in table
					});										// end of on click pagination list
		});
											// end of on select change 
		 
								// END OF PAGINATION 
    
	}	


			

// SI SETTING
$(function(){
	// Just to append id number for each row  
default_index();
					
});

//ROWS SHOWING FUNCTION
function showig_rows_count(maxRows, pageNum, totalRows) {
   //Default rows showing
        var end_index = maxRows*pageNum;
        var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
        var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';               
        $('.rows_count').html(string);
}

// CREATING INDEX
function default_index() {
  $('table tr:eq(0)').prepend('<th> ID </th>')

					var id = 0;

					$('table tr:gt(0)').each(function(){	
						id++
						$(this).prepend('<td>'+id+'</td>');
					});
}

// All Table search script
function FilterkeyWord_all_table() {
  
// Count td if you want to search on all table instead of specific column

  var count = $('.table').children('tbody').children('tr:first-child').children('td').length; 

        // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("search_input_all");
  var input_value =     document.getElementById("search_input_all").value;
        filter = input.value.toLowerCase();
  if(input_value !=''){
        table = document.getElementById("table-id");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) {
          
          var flag = 0;
           
          for(j = 0; j < count; j++){
            td = tr[i].getElementsByTagName("td")[j];
            if (td) {
             
                var td_text = td.innerHTML;  
                if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                //var td_text = td.innerHTML;  
                //td.innerHTML = 'shaban';
                  flag = 1;
                } else {
                  //DO NOTHING
                }
              }
            }
          if(flag==1){
                     tr[i].style.display = "";
          }else {
             tr[i].style.display = "none";
          }
        }
    }else {
      //RESET TABLE
      $('#maxRows').trigger('change');
    }
}
</script>


<?php

include "./include/footer.php";

?>