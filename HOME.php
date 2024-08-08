<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
include("connection.php");
$_SESSION;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="https://i.postimg.cc/MTg06KrH/l1.jpg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clean Sight</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8f8b1fbe65.js" crossorigin="anonymous"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
      background: #07374a;
      width: 100%;
      color: white;
      font-family: 'Roboto', sans-serif;
      margin-top: 200px
    }

    .header {

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
      box-shadow: 1px 1px 10px rgb(67, 63, 63);
    }

    .header-1 {
      position: absolute;
      right: 0px;
      left: 0px;
      background-color: whitesmoke;
      top: 70px;
      position: fixed;
      z-index: 100;
      box-shadow: 1px 1px 10px rgb(67, 63, 63);
      display: flex;
      flex-direction: row;
      justify-content: right;

      padding-bottom: -5px;
      height: 40px;

    }
   

    @media only screen and (max-width: 300px) {
      .header {
        background-color: white;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        height: 50px;
      }

      .second {
        display: flex;
        flex-direction: row;
      }

      .name {
        font-size: large;

        font-weight: bold;
        color: #25b79f;
        display: block;
        margin-top: 8px
      }
    }
       @media screen and (max-width:300px) {
      .flag {
        margin-left: 5%;
      }
    }

    .first {
      display: flex;
      flex-direction: row;
      z-index: 11;
      flex-shrink: 0;
    }

    .second {
      display: flex;
      flex-direction: row;
      flex-shrink: 0;
    }

    .l1 {
      width: 30%;
      height: 50px;
    }

    .name {
      font-size: x-large;

      font-weight: bold;
      color: black;
      display: block;
      margin-top: 13px;
      cursor: pointer;

    }

    .flag {
      width: 100%;
      height: 50px;
      margin-left: 70%;

    }

    @media screen and (max-width:600px) {
      .flag {
        margin-left: 5%;
      }
    }
     

    .third {
      display: flex;
      flex-direction: row;
      list-style-type: none;
    }

    .about,
    .complaint {
      height: 20px;
      border: none;
      font-size: small;
      border-radius: 25px;
      color: black;
      font-weight: bold;
      margin-top: 10px;
      transition: box-shadow 0.5s;

    }

    .about:hover {
      color: #07374a;
      box-shadow: 1px 1px 10px rgb(67, 63, 63);
    }

    .complaint:hover {
      color: #07374a;
      box-shadow: 1px 1px 10px rgb(67, 63, 63);
    }

    @keyframes moveText {
      0% {
        transform: translateX(101%);
      }

      100% {
        transform: translateX(-100%);
      }
    }

    .move {
      margin-top: 110px;
      background-color: rgb(29, 82, 117);
      height: 50px;
      position: fixed;
      top: 0px;
      left: 0px;
      right: 0px;
      z-index: 99;

      box-shadow: 1px 1px 10px rgb(67, 63, 63);
    }

    .moving-text {
      top: 50px;
      animation: moveText 15s linear infinite;
      margin-top: 12px;
      padding-left: 10px;
      font-size: 20px;
      color: white;
      cursor: pointer;
      width: 130%;

    }

    .moving-text:hover {
      animation-play-state: paused;
    }

    .main {
      display: flex;
      flex-direction: column;
      margin-top: 100px;
      row-gap: 50px;
      margin-right: 15%;
      margin-left: 15%;

      max-width: 100%;

      align-items: center;

    }

    .main1 {
      align-items: center;
    }

    .main2 {
      background-color: rgb(29, 82, 117);
      display: flex;
      padding-top: 17px;
      flex-direction: column;
      justify-content: center;
      box-shadow: 1px 1px 10px rgb(67, 63, 63);
      border-radius: 10px;



    }

    .login-btn:hover {
      text-decoration: none !important;
      font-size: 22px;
    }

    .com-btn:hover {
      text-decoration: none !important;
      font-size: 22px;
    }

    .login-btn,
    .com-btn {
      display: block;
      margin-bottom: 15px;
      background: #07374a;
      color: white;
      margin-left: 60px;
      margin-right: 60px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      border: none;
    }

    .main3 {
      margin-left: 5%;
      margin-right: 5%;
      margin-top: 10%;
      line-height: 2;
      margin-bottom: 1.5rem;
      letter-spacing: .25px;
      word-spacing: 1.5px;
      font-size: 1rem;
    }

    .img {
      width: 100%;
      box-shadow: 1px 1px 10px rgb(67, 63, 63);
    }

    .s1,
    .s11 {

      font-weight: bold;
      font-size: x-large;
      display: block;
      line-height: 1.5;

    }

    .s11 {
      margin-top: 22px;
    }

    .s2 {
      margin-top: 22px;

      font-weight: bold;

    }

    .s3,
    .s4 {

      margin-top: 22px;

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

    .container {
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
      <p class="name">Clean Sight</p>
    </div>
    <div class="second">
      <img class="flag" src="https://i.postimg.cc/jjFPcSTc/flag.gif">
    </div>
  </div>
  <div class="header-1">
    <ul class="third">
      <li>
        <a href="confirmation.php">
          <button class="about">Confirmation Page</button>
        </a>
      </li>

      <li>
        <a href="HowToFillComplaint.php"><button class="complaint">How to fill a complaint</button></a>
      </li>
      <li>
        <a href="about.php">
          <button class="about">About</button>
        </a>
      </li>

    </ul>

  </div>


  <div class="move">
    <div class="moving-text">Click to know more about the CLEAN SIGHT.<a href="more.php" style="a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}">Here</a></div>
  </div>
  <div class="main">
    <div class="main1">
      <img src="https://i.postimg.cc/XNyc2dpC/logo.png" class="logo">
    </div>
    <div class="main2">
      <div>
        <a style="text-decoration:none;" href="login.php"> <button type="submit" onclick=""
            style="display:inline-block block;text-decoration:none !important;" class="login-btn"> Login as
            Admin</button></a>
      </div>
      <div>
        <a style="text-decoration:none;" href="complaint.php"> <button type="submit" onclick="" class="com-btn">Fill a
            Complaint</button></a>
      </div>
    </div>
  </div>
  <div class="main3">
    <p class="s1">How the New Clean Sight App Helped a Citizen Get Rid of a Garbage Dump in His Area in Just a Few Hours
    </p>
    <img class="img" src="https://i.postimg.cc/cCYRryVm/city.webp">
    <p class="s2">Reporting a garbage problem and getting it resolved can be a painful and laborious process. The
      students of VELTECH University has launched an app to make it easier.</p>
    <p class="s3"> As an Indian citizen, reporting a civic problem and getting it resolved can be a painful and
      laborious process. To overcome this limitation, the students of VELTECH University has launched a new CLEAN SIGHT
      app for citizen assistance.</p>
    <p class="s4">What do we normally do if we encounter a garbage dump, or unclean road, or overflowing dustbins? We
      just close our nose, ignore the situation, and walk away, as nothing can be done as an individual.
      </br>
      But in the recent past, a new mobile application (called the CLEAN SIGHT app) launched by the Ministry of students
      of VELTECH University enables a citizen to post any garbage-related issue. Citizens can download the mobile
      application and use it to file complaints. The citizens only need to take a picture of the complaint they see on
      the ground and post it through this app. The complaint automatically gets forwarded to the municipal corporation
      for action, and the matter is assigned to the concerned sanitary inspector.
      </br>
      To test this application, I posted a picture of a garbage dump near my residency on it (as shown below). About 30
      minutes later, I received a call from someone from the corporation. He wanted to confirm whether I was the
      complainant.</p>
    <img class="img" src="https://i.postimg.cc/MptycYrh/city3.webp">
    <p class="s11">On confirmation, he said that the work would be completed soon.</p>
    <img class="img" src="https://i.postimg.cc/0y9Y24ZY/city2.webp">
    <p class="s4">I was pretty surprised! I had not expected such a fast response. But still I was sceptical about
      whether the garbage would be cleaned or not. About 3-4 hours later, I decided to inspect the place, and found a
      few workers in action.</p>

  </div>
  <div class="contact" id="contact-me">
    <div class="container">
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
        <a href="https://www.instagram.com/4___tuneee?igsh=Ynl2dTE0anhhdzZt" target="blank"><i
            class="fab fa-instagram"></i> Instagram</a>
      </div>
    </div>
  </div>
</body>

</html>