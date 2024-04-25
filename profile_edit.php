<?php
include "./include/header.php";
require "./admin/conn/conn.php";
session_start();
$usermail = $_SESSION["Adobeuserdata12"];

$email = $_GET['eid'];

if ($usermail == true) {
?>

    <style>
        .inputform {
            padding: 10px;
            margin: 1px 0px;
            border: 1px solid #000000;
            border-radius: 4px;
            transition: border-color 0.3s ease-in-out;
            outline: none;
            width: 98%;
        }

        .inputlabel {
            color: #fff;
            font-size: 16px;

            display: block;
            margin: 60px;
            font-weight: bold;
            cursor: pointer;

        }
    </style>

    <section class="py-5 my-5">
    <div class="container">

<center>
    <h1 style="    font-size: 26px;">
        User Profile Edit
    </h1>
</center>

<form action="./api/profile_edit.php" method="post" class="d-flex flex-wrap col-12">
    <?php
    $sql = "SELECT * FROM `userdata` WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

    ?>
            <div class="col-md-6 my-3">

                <label for="username" class="m-0 text-dark inputlabel">Name :</label>

                <input type="text" class="inputform" value="<?php echo $row['name']   ?>" id="username" name="name" required>
            </div>

            <div class="col-md-6 my-3">

                <label for="username" class="m-0 text-dark inputlabel">Email :</label>

                <input type="text" class="inputform" value="<?php echo $row['email']   ?>" id="username" readonly name="email" required>
            </div>



            <div class="col-md-6 my-3">

                <label for="username" class="m-0 text-dark inputlabel">Mobile Number :</label>

                <input type="text" class="inputform" value="<?php echo $row['Mnumber']   ?>" id="username" name="Mnumber" required>
            </div>




            <div class="col-md-6 my-3">

                <label for="username" class="m-0 text-dark inputlabel">Address :</label>

                <input type="text" class="inputform" value="<?php echo $row['Address']   ?>" id="username" name="Address" required>
            </div>



            <div class="col-md-6 my-3">

                <label for="username" class="m-0 text-dark inputlabel">Area :</label>

                <input type="text" class="inputform" value="<?php echo $row['Area']   ?>" id="username" name="Area" required>
            </div>



            <div class="col-md-6 my-3">

                <label for="username" class="m-0 text-dark inputlabel">City :</label>

                <input type="text" class="inputform" value="<?php echo $row['City']   ?>" id="username" name="City" required>
            </div>


            <div class="col-md-6 my-3">

                <label for="username" class="m-0 text-dark inputlabel">Pin Code :</label>

                <input type="text" class="inputform" value="<?php echo $row['pincode']   ?>" id="username" name="PinCode" required>
            </div>


            <div class="col-md-6 my-3">

                <label for="username" class="m-0 text-dark inputlabel">State :</label>

                <input type="text" class="inputform" value="<?php echo $row['state']   ?>" id="username" name="State" required>
            </div>
            <div class="col-12">
         <center>       <button class="btn text-dark px-5 py-2" name="submit" style="background: rgb(50,222,132);
background: linear-gradient(90deg, rgba(50,222,132,1) 35%, rgba(79,255,176,1) 100%);">
            <b>

            
                Edit  Profile  
                </b>
                </button>
                </center>
            </div>
</form>

<?php
                    }
                }
                
           
?>
</div>
       
    </section>
<?php
}
else{

    echo "<script>  window.location.href='./index.php';
    </script>";
}
?>


<?php

include "./include/footer.php";

?>