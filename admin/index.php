<?php 
session_start();

include "conn/conn.php"; ?>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url("./img/background.jpg") no-repeat;

  background-position: center;
  background-size: cover;
}

.wrapper {
  width: 420px;
  background-color: transparent;
  color: #fff;
  border-radius: 10px;
  padding: 30px 40px;
  border: 2px solid rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(20px);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.wrapper h1 {
  font-size: 36px;
  text-align: center;
}

.wrapper .input-box {
  position: relative;
  width: 100%;
  height: 50px;
  margin: 30px 0;
}

.input-box input {
  width: 100%;
  height: 100%;
  background-color: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, 0.2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
}

.input-box input::placeholder {
  color: #fff;
}

.input-box i {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
}

.wrapper .remember-forgot {
  display: flex;
  justify-content: space-between;
  font-size: 14px;
  margin: -15px 0 15px;
}

.remember-forgot label input {
  accent-color: #fff;
  margin-right: 3px;
}

.remember-forgot a {
  color: #fff;
  text-decoration: none;
}

.remember-forgot a:hover {
  text-decoration: underline;
  color: #568b8c;
}

.wrapper .btn {
  width: 100%;
  height: 45px;
  background-color: #fff;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
  transition: all 0.8s ease-out;
}

.wrapper .btn:hover {
  background-color: #568b8c;
  color: #fff;
}

.wrapper .register-link {
  font-size: 14px;
  text-align: center;
  margin: 20px 0 15px;
}

.register-link p a {
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}

.register-link p a:hover {
  text-decoration: underline;
  color: #568b8c;
}

</style>

<html lang="en">

<head>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <div class="wrapper">
    <form action="./api/admin.php" method="post">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" name="userid" placeholder="Username" required />
        <i class='bx bxs-user' style="color:black;"></i>
      </div>
      <div class="input-box">
        <input type="password" name="pasw" placeholder="Password" required />
        <i class='bx bxs-lock-alt' style="color:black;"></i>
      </div>
      <div class="remember-forgot">
        <label>
          <input type="checkbox">
          Remember me
        </label>
    
      </div>
      <button  name="submit" class="btn">Login</button>
     
    </form>
  </div>
</body>

</html>




