<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
include("connection.php");

include('p2.php');


// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Your existing login logic here
    
    // Set session variables for logged-in user
    $_SESSION['user_name'] = $user_name; // Replace with your actual username variable
    $_SESSION['last_activity'] = time();

    // Redirect to admin page
    header("Location: admin.php");
    exit();
}
if (isset($_SESSION['user_name']) && isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] <= 1200)) {
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | CLEAN SIGHT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8f8b1fbe65.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="l1.png" type="image/x-icon">
    <style>
 
     .title-icon {
  background-image: url('sprite.png');
  background-position: 0 0;
  width: 16px;
  height: 16px;
}
#title {
  position: relative;
}
#title:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 16px;
  height: 16px;
  background-position: -16px 0;
}
        body {
            font-family: 'Roboto',sans-serif;
            background: #07374a;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height:100vh;
        }      
             
        .navbar-brand {
            font-size: 2rem;
            color: #FFF; 
            font-weight: bold;
            text-transform: uppercase;
        }
        .success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
       
        .error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
        }
        .success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
        }
     

.container {
	margin-top: 50px;
    max-width:85%;
}

.form-wrapper {
	background-color: #fff;
	padding: 30px;
	border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
@media screen and (min-width: 992px) {
	.form-wrapper {
		margin-top: 80px;
	}
}

@media screen and (max-width: 767px) {
	.form-wrapper {
		padding: 20px;
	}
}
@media screen and (max-width: 767px) {
    #navbarNav .navbar-toggler-icon {
        color: #000 !important; /* Change this to the desired color */
    }
}

.container{
    margin-top: 150px;
}
        .header-link:hover {
            color: #83effd;
        }

.btn-primary {
	background-color: #e62721;
	border-color: #d81515;
}

.btn-primary:hover {
	background-color: #e44622;
	border-color: #C82400;
}

.register-link {
	color: #E53D00;
}

.register-link:hover {
	color: #C82400;
}

.fa-eye-slash {
	cursor: pointer;
}


        .password-container{
  width: 400px;
  position: relative;
}
.password-container input[type="password"],
.password-container input[type="text"]{
  width: 100%;
  padding: 12px 36px 12px 12px;
  box-sizing: border-box;
}
.fa-eye{
  position: absolute;
  top: 28%;
  right: 1%;
  cursor: pointer;
  color: lightgray;
}
.header{
      
      background-color: white;
      display: flex;
      flex-direction: row;
      height: 70px;
      position: fixed;
      left: 0;
      right: 0;
      top: 0;
      z-index: 1000;
      padding-top: 10px;
      box-shadow:1px 1px 10px rgb(67, 63, 63) ;
   }
   .header-1{
      position:absolute;
      right: 0px;
      left: 0px;
      background-color: whitesmoke;
      top: 70px;
      position: fixed;
      z-index: 100;
      box-shadow:1px 1px 10px rgb(67, 63, 63) ;
      display: flex;
      flex-direction: row;
      justify-content:right;
     
      padding-bottom: -5px;
      height: 40px;
     
    }
    @media only screen and (max-width: 400px){
            .header
            {
        background-color: white;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        height: 50px;
     }
     .second{
        display: flex;
        flex-direction: row;
     }
     .name{
        font-size:large;
       
       font-weight: bold;
       color: #25b79f;
       display: block;
       margin-top: 8px
       
     }
    }
     .first{
        display: flex;
        flex-direction: row;
        z-index: 11;
        flex-shrink: 0;
     }
     .second{
        display: flex;
        flex-direction: row;
        flex-shrink: 0;
     }
     .l1{
        width: 30%;
        height: 50px;
     }
      .name{
        font-size:x-large;
       
       font-weight: bold;
       color:black;
       display: block;
       margin-top: 13px;
       cursor: pointer;
       
     }
     .flag{
        width: 100%;
        height: 50px;
        margin-left: 70%;
        
     }
     .third{
      display: flex;
      flex-direction: row;
      list-style-type: none;
    }
    .about, .complaint{
height: 20px;
border: none;
font-size: small;
border-radius: 25px;
      color: black;
      font-weight: bold;
      margin-top: 10px;
transition: box-shadow 0.5s;

}
.about:hover{
color: #07374a;
  box-shadow:1px 1px 10px rgb(67, 63, 63) ;
}
.complaint:hover{
color: #07374a;
  box-shadow:1px 1px 10px rgb(67, 63, 63) ;
}
.contact {
  background: #07374a;
  position: relative;
  height: 50vh;
}

.contact-content {
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.contact-content h2 {
  font-size: 2.5rem;
  font-weight: 400;
  color: #25b79f;
  padding-bottom: 0.5rem;
}

.contact-content .mail {
  color: #f0f0e6;
  padding-bottom: 0.2rem;
  font-size: 1rem;
}

.contact-content .links {
  color: #25b79f;
  padding: 0.5rem;
  padding-bottom: 1.8rem;
  font-size: 1rem;
}

.contact-content a {
  text-decoration: none;
  color: #25b79f;
  padding: 0.5rem;
  transition: 0.3s ease-in-out;
}


.contact-content a:hover {
  color: #f0f0e6;
}
.contact-content {
    width: 100%;
  }
  @media (min-width: 501px) and (max-width: 768px) {
   .contact-content {
    width: 100%;
  }
  }
  .container1 {
  max-width: 1200px;
  width: 90%;
  margin: auto;
}


    </style>
</head>
<body>
<div class="header">
    <div class="first">
    <img src="https://i.postimg.cc/MTg06KrH/l1.jpg" class="l1">
    <p class="name" >Clean Sight</p>
</div>
<div class="second">
    <img class="flag" src="https://i.postimg.cc/jjFPcSTc/flag.gif">
</div>
</div>
<div class="header-1">
   <ul class="third">
      <li>
        <a href="HOME.php">
    <button class="about" >Home</button>
        </a>
   </li>
  
   <li>
    <a href="confirmation.php"><button class="complaint">Confirmation page</button></a>
   </li>
   <li>
   <a href="about.php">
    <button class="about" >About</button>
        </a>
   </li>
   
   </ul>

</div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4 form-wrapper bg-light rounded-lg shadow-lg py-4 px-5">
                <h3 class="text-center mb-4">Welcome to CLEAN SIGHT</h3>
                <form  method="post" action="">
                <?php include('errors.php'); ?>
                    <div class="form-group">
                        <label for="username" class="font-weight-bold">Username:</label>
                        <input type="text" class="form-control form-control-lg" id="username" name="user_name" placeholder="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="font-weight-bold">Password:</label>
                        <div class="input-group">
                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter password" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-eye" id="eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" name="login_user" class="btn btn-primary btn-block btn-lg" value="Login">Login</button>
                    </div>
                </form>
                <p class="text-center mt-2 mb-0">Don't have an account? <a href="register.php" class="register-link">Register here</a></p>
            </div>
        </div>
    </div>
    <div class="contact" id="contact-me">
    <div class="container1">
      <div class="contact-content">
        <h2>Contact Me</h2>
        <p class="mail">
          Get in touch with me <i class="fas fa-arrow-right"></i> shaikmastan2482004@gmail.com
        </p>
        <p class="links">Or find me on:</p>
        <a href="https://www.linkedin.com/in/shaik-mastan-ab4246296/" target="blank"><i class="fab fa-linkedin">
            Linkedin</i></a>
        <a href="https://codepen.io/TechwithMastan" target="blank"><i class="fab fa-codepen"> CodePen</i></a>
        <a href="https://github.com/TechwithMastan" target="blank"><i class="fab fa-github"></i> Github</a></br>
        <a href="https://wa.me/+919182217747" target="blank"><i class="fab fa-whatsapp"></i>whatsapp</a>
        <a href="https://twitter.com/MastanShai97399" target="blank"><i class="fab fa-twitter"> Twitter</i></a>
        <a href="https://www.instagram.com/4___tuneee?igsh=Ynl2dTE0anhhdzZt" target="blank"><i class="fab fa-instagram"></i> Instagram</a>
      </div>
    </div>
  </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
<script>

const passwordInput = document.querySelector("#password");
    const eyeIcon = document.querySelector("#eye");

    // Function to toggle password visibility
    eyeIcon.addEventListener("mouseover", function () {
        passwordInput.type = "text";
    });

    eyeIcon.addEventListener("mouseout", function () {
        passwordInput.type = "password";
    });
</script>
</body>
</html>                          