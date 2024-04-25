


<div class="row">
    <div class="col-md-12 col-12" id="myForm">
        <div class="modal-box">

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content clearfix" style="background: linear-gradient(90deg, rgba(123,159,190,1) 0%, rgba(90,112,133,1) 100%);">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none;"><span aria-hidden="true" style="float: right;" class="px-2">×</span></button>
                        <div class="modal-body">
                            <center>
                                <h3 class="title text-light"> <b> Add Category </b></h3>
                            </center>
                            <form action="./api/addcategory.php" method="post" enctype="multipart/form-data">
                                <div class="col-12">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input type="file" id="" name="pic" class="my-2 form-control btn bg-light" style="border-color: black;" require>

                                </div>
                                <div class="col-12">
                                    <span class="input-icon"><i class="fas fa-key"></i></span>
                                    <input type="text" name="Category_name" placeholder="Category Name" value="" class="form-control btn btn mt-2 bg-light" required style="border-color: black; text-align:start;">
                                </div>

                                <center> <button name="submit" class="btn btn-success my-3">Add Category</button> </center>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script> 
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>