<?php 
session_start();


$adminusers1 = $_SESSION["adminusers"];

if ($adminusers1 == true) {
} else {
  header('Location: index.php');
}


include "include/header.php"; ?>
<main id="main" class="main">
  
  <center><h3><b>Custmore Query</b></h1></center><br>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <!-- <h5 class="card-title text-center"><u>Product List</u></h5> -->
            
            <style>
            .dataTables_wrapper .dataTables_filter input {
            border: 2px solid ;
            border-radius: 12px;
            padding: 2px;
            background-color: transparent;
            margin-left: 3px;
            }
            label {
            display: inline-block;
            text-transform: uppercase;
            font-size: 16px;
            font-weight: 700;
            }
            .dataTables_wrapper .dataTables_filter input:focus{
            border: none;
            padding-left: 9px;
            }
            .dataTables_wrapper .dataTables_paginate {
              margin-right: 4px;
           
            }
            .dataTables_wrapper .dataTables_paginate .paginate_button.disabled{
            border: 2px solid ;
            margin-right: -2px;
            margin-left: -2px;
            
            }
            .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            border-top: 2px solid;
            border-bottom: 2px solid;
            }
            .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover{
            border: 2px solid ;
            }
            .dataTables_wrapper .dataTables_length select {
            border: 2px solid #211d1d;
            border-radius: 10px;
            
            background-color: transparent;
            padding: 2px;
            }
            @media (max-width:540px){
              .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter {
   
    text-align: left;
}

.dataTables_wrapper .dataTables_paginate{
  margin: 19px 0px;
}
            }
            </style>
            
            <!-- Default Table -->
            <div class="table-responsive">
            <table class="table  pt-2 table-hover " id="tableID" class="display nowrap"><br><br>
              <thead style="    background:  #17a2b8!important;">
                <tr>
                  <th scope="col "  class="text-uppercase py-2"  style="font-size: 14px; color:#fff;">S.No.</th>
                  <th scope="col"  class="text-uppercase py-2" style="font-size: 14px; color:#fff;"> Name</th>
                  <th scope="col"  class="text-uppercase py-2" style="font-size: 14px; color:#fff;">Email</th>
                  <th scope="col"  class="text-uppercase py-2" style="font-size: 14px; color:#fff;">Moblie Number</th>
                  <th scope="col"  class="text-uppercase py-2" style="font-size: 14px; color:#fff;">Message</th>
                  
                  <!-- <th scope="col" style="font-size: 12px;">Phone</th> -->
                  <!-- <th scope="col" style="font-size: 12px;">Phone</th> -->
                </tr>
              </thead>
              <tbody>
                
                <?php
                
                
                include "conn/conn.php";
                // $sql1 = "SELECT count(name) FROM `customerquery` WHERE 1 ORDER BY id DESC";
                // $query2 = mysqli_query($conn,$sql1);
                // if(!$query2)
                // {
                // echo "Query does not work.".mysqli_error($conn);die;
                // }
                // while($data2 = mysqli_fetch_array($query2))
                // {
                // $i=$data2['count(name)'];
                // }
             
          $i=1;
                $sql = "SELECT  * FROM `customerquery` WHERE 1 ORDER BY id DESC";
                $query = mysqli_query($conn,$sql);
                if(!$query)
                {
                echo "Query does not work.".mysqli_error($conn);die;
                }
                while($data = mysqli_fetch_array($query))
                {
                
                ?>
                <tr class="table-bordered">
                  <td class="text-capitalize"  style="font-size: 14px;"><b> <?php
                   echo $i;
                   ?> </b></td>
                  <td class="text-capitalize" style="font-size: 14px;"><?php 
                  echo $data['name']; 
                  ?></td>
                  
                  <td class="text-capitalize" style="font-size: 14px;"><?php 
                  echo $data['email']; 
                  ?></td>
                  <td class="text-capitalize" style="font-size: 14px;"><?php 
                  echo $data['Mobilenumber']; 
                  ?></td>
                  <td class="text-capitalize" style="font-size: 14px;"><?php 
                  echo $data['message'];
             
                  ?></td>
                  
                  
                </tr>
                <?php
                 $i++;  }
                ?>
              </tbody>
            </table>
            </div>
            <br>
            <!-- End Default Table Example -->
          </div>
        </div>
        
      </div>
    </div>
  </section>
  
  </main><!-- End #main -->
  <script>
  // Initialize the DataTable
  $(document).ready(function () {
  $('#tableID').DataTable({
  // Set the 3rd column of the
  // DataTable to ascending order
  order: [[4, 'asc']]
  });
  });
  </script>
  <?php include "include/footer.php"; ?>