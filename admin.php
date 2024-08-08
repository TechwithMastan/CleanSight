<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

include("connection.php");


// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_name'])) {
  header("Location: login.php");
  exit();
}

// Check for session timeout
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1200)) {
  // Session expired after 20 minutes (1200 seconds)
  session_unset();     // unset $_SESSION variable for the run-time
  session_destroy();   // destroy session data in storage
  header("Location: login.php"); // Redirect to login page
  exit();
}

$_SESSION['last_activity'] = time(); // Update last activity timestamp

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['complaint_id']) && isset($_POST['new_status'])) {
    $complaintId = $_POST['complaint_id'];
    $newStatus = $_POST['new_status'];

    $updateQuery = "UPDATE complaints SET status = '$newStatus' WHERE id = $complaintId";
    mysqli_query($conn, $updateQuery);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8f8b1fbe65.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="l1.png" type="image/x-icon">
  <style>
    body {
      background: #07374a;
      width: 100%;
      color: white;

      margin-top: 200px;
    }

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



    .about1 {
      text-decoration: none;
      color: aqua;
      padding-top: 17px;
      cursor: pointer;
      margin-right: 20px;
      transition: color 0.5s;
    }

    .about1:hover {
      color: white;
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
        /* Change this to the desired color */
      }
    }



    .container {
      margin-top: 100px;
    }



    .navbar-brand {
      font-size: 2rem;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
    }

    .userlogo {
      width: 12pxpx;
      border-radius: 38px;
      height: 25px;
      margin-right: 5px;
      margin-top: 15px;
      background-color: white;
    }

    #logo {
      display: flex;
      flex-direction: row;
    }

    .logo1 {
      display: flex;
      flex-direction: row;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      /* Adjust the margin as needed */
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    img {
      max-width: 100%;
      /* Set a maximum width for the images */
      height: auto;
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

    @media only screen and (max-width: 400px) {
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
        <a href="index,php">
          <button class="about">Home</button>
        </a>
      </li>

      <li>
        <a href="about.php"><button class="complaint">About</button></a>
      </li>
      <li>
        <a href="profile.php">
          <button class="about">Profile</button>
        </a>
      </li>
      <li>
        <a href="logout.php"><button class="about">logout</button>
        </a>
      </li>

    </ul>

  </div>
  <div class="move">
    <div class="move">
      <div class="moving-text">Click to know more about the CLEAN SIGHT.<a href="more.html" style="a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}">Here</a></div>
    </div>
  </div>
  <div style="margin-top:190px; background-color:">
    <table border=1 cellspacing=0 cellpadding=10>
      <tr>
        <td><strong>S.NO</strong></td>
        <td><strong>Location Details</strong></td>
        <td><strong>Image</strong></td>
        <td><strong>Status</strong></td>
      </tr>

      <?php
      $i = 1;
      $username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
      $user_zipcode_result = mysqli_query($conn, "SELECT zipcode FROM users WHERE user_name = '$username'");
      $user_zipcode_row = mysqli_fetch_assoc($user_zipcode_result);

      if ($user_zipcode_row) {
        // Check if the query returned any results
        $user_zipcode = $user_zipcode_row['zipcode'];

        // The rest of your code using $user_zipcode goes here
      } else {
        // Handle the case where the query did not return any results
        // For example, set a default value or display an error message
        $user_zipcode = 'default_value'; // Replace with an appropriate default value
      }

      $rows = mysqli_query($conn, "SELECT * FROM complaints WHERE status = 'incomplete' AND postcode = '$user_zipcode'");
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
            <form method="post" action="">
              <input type="hidden" name="complaint_id" value="<?php echo $row['id']; ?>">
              <select style=" background-color: rgb(29, 82, 117);color:white; border:none;" name="new_status">
                <option value="incomplete" selected>Incomplete</option>
                <option value="completed">completed</option>
              </select>
              <button style=" background-color: rgb(29, 82, 117);color:white; border:none;" type="submit">Update</button>
            </form>
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