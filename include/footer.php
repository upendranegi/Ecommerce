<style>
.modal {

    display: none;
    position: fixed;
    top: 63%;
    left: 50%;
    height: 98%;
    width: 98%;
    max-width: 23% !important;
    border-radius: 20px;
    opacity: 0;
    transition: 0.2s;
}

.modal.show {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

.modal .close {
    margin-inline-start: auto;
    width: 20px;
    height: 20px;
    display: block;
    cursor: pointer;
}

@media (max-width: 540px) {
    .modal {
        max-width: 88% !important;
    }

}
</style>




<style>
.main {
    width: 100%;
    height: 551px;

    overflow: hidden;
    background: rgb(123, 159, 190);
    background: linear-gradient(90deg, rgba(123, 159, 190, 1) 0%, rgba(90, 112, 133, 1) 100%);
    border-radius: 10px;
    box-shadow: 5px 20px 50px #000;

}

#chk {
    display: none;
}

.signup {
    position: relative;
    width: 100%;
    height: 100%;
}

label {
    color: #fff;
    font-size: 2.3em;
    justify-content: center;
    display: flex;
    margin: 60px;
    font-weight: bold;
    cursor: pointer;
    transition: .5s ease-in-out;
}

.inputval {
    width: 60%;
    height: 40px !important;
    background: #fff;
    justify-content: center;
    display: flex;
    margin: 20px auto;
    padding: 10px;
    border: none;
    outline: none;
    border-radius: 5px;
}

.btns2 {
    width: 60%;
    height: 40px;
    margin: 10px auto;
    justify-content: center;
    display: block;
    color: #fff;
    background: #573b8a;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in;
    cursor: pointer;
}

.btns2:hover {
    background: #6d44b8;
}

.login {
    height: 460px;
    background: #eee;
    border-radius: 60% / 10%;
    transform: translateY(-180px);
    transition: .8s ease-in-out;
}

.login label {
    color: #030304;
    transform: scale(.6);
}

#chk:checked~.login {
    transform: translateY(-548px);
}

#chk:checked~.login label {
    transform: scale(1);
}

#chk:checked~.signup label {
    transform: scale(.6);
}


@media (max-width: 600px) {

    .login {
        margin-top: -15px;
    }

    body {}

}
</style>

<div class="modal" id="myDIV">




    <div class="main">
        <button class="close mx-3" onclick="logoutdata(this)">
            <svg width="24" height="24" class="my-2 " viewBox="0 0 34 34" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_7_7)">
                    <path d="M25.5 8.5L8.5 25.5" stroke="#DADADA" stroke-width="2.125" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M9 9L26 26" stroke="#DADADA" stroke-width="2.125" stroke-linecap="round"
                        stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_7_7">
                        <rect width="34" height="34" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </button>

        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="./api/login.php" method="post">
                <label for="chk" aria-hidden="true">Login</label>

                <input class="inputval" type="email" name="email" placeholder="Email" required="">
                <input class="inputval" type="password" name="pswd" placeholder="Password" required="">
                <button class="btns2" name="Login"> Login</button>
            </form>
        </div>

        <div class="login">
            <form action="./api/signin.php" method="post">
                <label for="chk" aria-hidden="true"> Sign up</label>

                <input class="inputval" type="email" name="email" placeholder="Email" required="">
                <input class="inputval" type="text" name="Name" placeholder="name" required="">
                <input class="inputval" type="text" name="Mnumber" placeholder="Mobile Number" required="">
                <input class="inputval" type="password" name="pswd" placeholder="Password" required="">
                <button class="btns2" name="Signup">Sign up</button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-mutedm  py-2" style="background-color: #212529;">


    <section class="">
        <div class="container text-center text-md-start mt-5">

            <div class="row mt-3">

                <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4 px-md-0 px-2">

                    <h6 class="text-uppercase fw-bold mb-4 text-light px-0 mx-0" style="text-align: start;">
                        <i class="fas fa-gem me-3"></i>Company name
                    </h6>
                    <p class=" text-light " style="text-align: left;     font-size: 14px;    font-weight: 500;">

                        We offer the best handmade modern, contemporary, industrial, rustic, mid-century and custom
                        fixtures available. Offering Sputnik lights, updated classics, as well as unique fixtures
                        designed in-house, built to order here in Palm Springs, California. Our store has a new look,
                        and still offering the same high quality bespoke lights our customers have come to enjoy.


                    </p>
                </div>



                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4  text-light">

                    <h6 class="text-uppercase fw-bold mb-4  text-light" style="text-align: start;">
                        Category
                    </h6>
                    <?php
        $sql = "SELECT * FROM `categories` WHERE 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while ($row = mysqli_fetch_assoc($result)) {


        ?>
                    <p style="text-align: start;">
                        <a href="./productlist.php? catname=<?php echo $row['name'] ?>" class="text-reset  text-light"
                            style="text-align: left;    font-size: 14px;    font-weight: 500;"><?php echo $row['name'] ?></a>
                    </p>
                    <?php

          }
        }
          ?>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4  text-light" style="text-align: start;">
                        Useful links
                    </h6>
                    <p style="text-align: start;">
                        <a href="./index.php" class="text-reset  text-light"
                            style="text-align: left;     font-size: 14px;    font-weight: 500; text-align: left;">Home</a>
                    </p>
                    <p style="text-align: start;">
                        <a href="./about.php" class="text-reset  text-light"
                            style="text-align: left;     font-size: 14px;    font-weight: 500; text-align: left;">About</a>
                    </p>
                    <p style="text-align: start;">
                        <a href="./privacy.php" class="text-reset  text-light"
                            style="text-align: left;     font-size: 14px;    font-weight: 500; text-align: left;">Privacy
                            Policy</a>
                    </p>
                    <!-- <p>
            <a href="#!" class="text-reset  text-light" >Help</a>
          </p> -->
                </div>

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4  text-light" style="text-align: start;">Contact</h6>

                    <p class=" text-light" style="text-align: start;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="  " fill="currentColor"
                            class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                        adorablelightnings@gmail.com
                    </p>
                    <!-- <p class=" text-light" style="text-align: start;"><svg xmlns="http://www.w3.org/2000/svg"
                            style="    " width="16" height="16" fill="currentColor" class="bi bi-telephone-fill"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg> +91847106400</p> -->

                </div>

            </div>

        </div>
    </section>

</footer>











<!-- Bootstrap core JavaScript -->
<script src="./bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="./bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>


<script language="text/Javascript">
cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
function clearField(t) { //declaring the array outside of the
    if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
    }
}
</script>
<script>
// const feedbackBtn = document.querySelector('.feedback-btn');
function logdata(feedbackBtn) {
    const modal = document.querySelector('.modal');

    feedbackBtn.addEventListener('pointerdown', () => {
        modal.style.display = 'block';
        setTimeout(() => modal.classList.add('show'), 0)
    });

    modal.querySelector('.close').addEventListener('pointerdown', () => {
        hideModal();
    });

    modal.querySelector('.cancel').addEventListener('pointerdown', () => {
        hideModal();
    });

    document.addEventListener('pointerdown', (e) => {
        if (!e.composedPath().includes(modal)) {
            hideModal();
        }
    });

    modal.addEventListener('transitionend', function(e) {
        if (!this.classList.contains('show')) {
            if (e.propertyName == 'transform') {
                this.style.display = '';
            }
        }
    });
}

function hideModal() {
    modal.classList.remove('show')
}




function logoutdata() {
    document.querySelector('.modal').style.display = 'none';
    document.querySelector('.modal').classList.remove('show')
}
</script>

</body>

</html>