<?php
session_start();

include("connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header('location: login.php');
    exit();
}

// Retrieve user details from the database based on the session information
$user_name = $_SESSION['user_name'];
$query = "SELECT * FROM users WHERE user_name='$user_name'";
$result = mysqli_query($conn, $query);

if (!$result) {
    // Handle database error
    die("Database error: " . mysqli_error($conn));
}

// Check if a user was found
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    // Handle the case where no user was found
    die("User not found in the database.");
}

// Update user profile
if (isset($_POST['update_profile'])) {
    $newUsername = mysqli_real_escape_string($conn, $_POST['new_username']);
    $newEmail = mysqli_real_escape_string($conn, $_POST['new_email']);
    $newZipCode = mysqli_real_escape_string($conn, $_POST['new_zipcode']);

    // Perform update query
    if ($user['email'] != $newEmail) {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'techwithmastan@gmail.com';
            $mail->Password = 'qbhvigqrpyozelwr';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom('techwithmastan@gmail.com', 'TechwithMastan.com');
            $mail->addAddress($newEmail, $newUsername);
            $mail->isHTML(true);
            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
            $mail->Subject = 'Email_verification';
            $mail->Body = '<p>Your verification code is:<b style="font-size: 30px;">' .
                $verification_code . '</b></p>';
            $mail->send();


            // Finally, register user if there are no errors in the form
            if (count($errors) == 0) {
                //encrypt the password before saving in the database
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO users (user_name, zipcode, email, password, verification_code, email_verified_at) VALUES ('$user_name', '$zipcode', '$email', '$hashed_password', '$verification_code', NULL)";

                mysqli_query($conn, $query);
                if ($user['email_verified_at'] == NULL) {
                    header("Location: verification.php?email=$email");
                    exit;
                }
                header('location: login.php');
            }


        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        $updateQuery = "UPDATE users SET user_name='$newUsername', email='$newEmail', zipcode='$newZipCode', verification_code='$verification_code', email_verified_at = NULL WHERE user_name='$user_name'";
    } else {
        $updateQuery = "UPDATE users SET user_name='$newUsername', email='$newEmail', zipcode='$newZipCode' WHERE user_name='$user_name'";
    }
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        // Update successful, redirect to profile page
        header('location: logout.php');
        exit();
    } else {
        // Handle update failure
        echo "Update failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8f8b1fbe65.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="l1.png" type="image/x-icon">
    <!-- Add your stylesheets and other head elements here -->
    <style>
        body {
            background: #07374a;
            width: 100%;
            color: white;
            font-family: 'Roboto', sans-serif;
            margin-top: 5%;
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

        .container {
            margin-top: 30%;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: left;
            border: 2px solid #07374a;
            /* Add border to the table */
        }

        @media screen and (max-width:600px) {
            .flag {
                margin-left: 5%;
            }
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            color: white;
        }

        th {
            background-color: #07374a;
        }

        .btn {
            display: block;

        }

        .edit,
        .log {
            margin-left: 20px;
            border: none;
            background: rgb(29, 82, 117);
            color: white;
            height: 40px;
            transition: background-color 0.5s, border-radius 0.5s;
        }

        .edit:hover {
            background-color: #07374a;
            border-color: white;
            border-radius: 50px;

        }

        .log:hover {
            background-color: #07374a;
            border-color: white;
            border-radius: 50px;
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
                <a href="admin.php"><button class="complaint">Admin</button></a>
            </li>
            <li>
                <a href="logout.php">
                    <button class="about">Logout</button>
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <h2 style="display:block; margin-left:18%;margin-right:18%;">Welcome,
            <?php echo $user['user_name']; ?>!
        </h2>
        <form method="post" action="">
            <table>
                <tr>
                    <th><label for="new_username">Username</label></th>
                    <td><input type="text" style="background-color:#07374a;color:white;border:none;" id="new_username"
                            name="new_username" value="<?php echo $user['user_name']; ?>" required></td>
                </tr>
                <tr>

                    <th> <label for="new_email">Email</label></th>
                    <td><input type="email" style="background-color:#07374a;color:white;border:none;" id="new_email"
                            name="new_email" value="<?php echo $user['email']; ?>" required></td>
                </tr>
                <tr>
                    <th> <label for="new_zipcode"> ZIP-CODE</label></th>
                    <td> <input type="text" style="background-color:#07374a;color:white;border:none;" id="new_zipcode"
                            name="new_zipcode" value="<?php echo $user['zipcode']; ?>" required></td>
                </tr>
            </table>
            <div class="btn">
                <button type="submit" class="edit" name="update_profile">Save</button>
                <a style="text-decoration:none;" href="logout.php"><button class="log">Logout</button></a>
            </div>
        </form>
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
    <!-- Add your footer section here -->
</body>

</html>