<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
include("connection.php");

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Confirmation</title>
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
      color: white;
      background: #07374a;
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
      font-size: 1rem;
      color: white;
      cursor: pointer;
      width: 130%;

    }

    .moving-text:hover {
      animation-play-state: paused;
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
        color: #000 !important;
      }
    }


    .container {
      margin-top: 100px;
    }



    .navbar-brand {
      font-size: 2rem;
      color: #FFF;
      font-weight: bold;
      text-transform: uppercase;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    @media screen and (max-width:600px) {
      .flag {
        margin-left: 5%;
      }
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
      <p class="name">Clean Sight</p>
    </div>
    <div class="second">
      <img class="flag" src="https://i.postimg.cc/jjFPcSTc/flag.gif">
    </div>
  </div>
  <div class="header-1">
    <ul class="third">
      <li>
        <a href="index.php">
          <button class="about">Home</button>
        </a>
      </li>

      <li>
        <a href="HowToFillComplaint.php"><button class="complaint">How to fill a complaint</button></a>
      </li>
      <li>
        <a href="complaint.php">
          <button class="about">complaint page</button>
        </a>
      </li>

    </ul>

  </div>

  <div class="move">
    <div class="moving-text"><strong>NOTE:</strong>Please remember or note your S.NO to check the status</div>
  </div>
  <div style="margin-top:180px;">
    <table border="1" cellspacing="0" cellpadding="10">
      <tr>
        <td><strong>S.NO</strong></td>
        <td><strong>Location Details</strong></td>
        <td><strong>Image</strong></td>
        <td><strong>Status</strong></td>
      </tr>

      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM complaints");
      ?>
      <?php foreach ($rows as $row): ?>
        <tr>
          <td>
            <?php echo $i++; ?>
          </td>
          <td>
            <?php echo $row["details"]; ?>
          </td>
          <td><img src="img/<?php echo $row['photo']; ?>" alt=""></td>
          <td>
            <?php echo $row["status"]; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
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
        <a href="https://www.instagram.com/4___tuneee?igsh=Ynl2dTE0anhhdzZt" target="blank"><i
            class="fab fa-instagram"></i> Instagram</a>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>