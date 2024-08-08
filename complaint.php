<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("connection.php");

$errors = array();
if (isset($_POST['complaint_form'])) {
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $status = "incomplete";
    $postcode = $_COOKIE['zipcode'];

    if (empty($details)) {
        array_push($errors, "Address is required");
    }
    if ($_FILES["photo"]["error"] !== 0) {
        array_push($errors, "Photo is required");
    } 
    if (count($errors) == 0)
    {
        $fileName = $_FILES["photo"]["name"];
        $fileSize = $_FILES["photo"]["size"];
        $tmpName = $_FILES["photo"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script>alert('Invalid Image Extension');</script>";
        } else if ($fileSize > 10000000) {
            echo "<script>alert('Image Size is too Large');</script>";
        } else {
            $uploadDirectory = 'img/';

            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }

            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
            move_uploaded_file($tmpName, $uploadDirectory . $newImageName);

            $query = "INSERT INTO complaints(details,photo,status,postcode) VALUES ('$details','$newImageName','$status','$postcode')";
            mysqli_query($conn, $query);

            echo "<script>alert('Complaint filed successfully');</script>";
            header("Location:confirmation.php");
            exit();
        }
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Complaint Form</title>
    <meta charset="utf-8">
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
            background: #07374a;
            width: 100%;
            color: white;
            font-family: 'Roboto', sans-serif;
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

        form {
            background-color: rgb(248, 246, 246);
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;

        }

        @media only screen and(max-width :600px) {
            form {
                margin-left: 14%;
            }

        }

        @media screen and (min-width:992px) {
            form {
                margin-left: 35%;
            }

        }

        @media screen and (max-width:600px) {
            .flag {
                margin-left: 5%;
            }
        }


        form label,
        form input,
        form textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            font-size: 20px;
        }

        form label {
            font-weight: bold;
        }

        form input,
        form textarea {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: rgba(255, 255, 255, 0.7);
            color: black;
            font-size: 18px;
        }

        form input[type="submit"] {
            background-color: #4285F4;
            color: rgb(15, 13, 13);
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        form input[type="submit"]:hover {
            background-color: #3367D6;
        }

        form p {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }

        #getLocationBtn {
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
            margin-bottom: 10px;
            transition: background-color 0.3s ease-in-out;
        }

        #getLocationBtn:hover {
            background-color: #0e5ce6;
        }

        #image-input {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;
        }

        #openCamera {
            font-size: 20px;
            color: black;
            cursor: pointer;
            margin-bottom: 10px;
            transition: color 0.3s ease-in-out;
            margin-left: 30px;
            display: block;
            background-image: none;
        }

        #openCamera.photo-uploaded {
            background-image: none;
        }

        #openCamera:hover {
            color: blue;
        }

        #imageInput {
            display: none;

        }

        #locationDetails {
            font-size: 16px;
            margin-top: 10px;

            box-shadow: 1px 1px 3px rgb(67, 63, 63);
        }

        .container {
            margin-top: 50px;
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

        @media screen and (min-width:767px) {
            form {
                margin-left: 32%;
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

        @media screen and (min-width:600px) {
            .cam {
                margin-top: 10%;
                margin-left: 33%;
            }

            .can {
                margin-top: 10%;
                margin-left: 33%;
            }

            .cap {
                margin-left: 47%;
            }
        }

        @media screen and (max-width:600px) {
            .cam {
                margin-top: 100px;
            }

            .can {
                margin-top: 100px;
            }

            .cap {
                margin-left: 40%;
            }
        }

        .cap {
            font-size: 40px;
            border-radius: 40px;
            display: block;

            background-color: #07374a;
            padding-bottom: 5px;
        }

        video {
            width: 100%;
            max-width: 400px;

            margin-bottom: 10px;
            display: none;

        }

        canvas {
            display: none;
            width: 100%;

            max-width: 400px;
            margin-bottom: 10px;
        }

        #captureImage {
            display: none;
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
                <a href="HOME.php">
                    <button class="about">Home</button>
                </a>
            </li>

            <li>
                <a href="HowToFillComplaint.php"><button class="complaint">How to fill a complaint</button></a>
            </li>
            <li>
                <a href="confirmation.php">
                    <button class="about">Confirmation page</button>
                </a>
            </li>

        </ul>

    </div>
    <div class="container">
        <form id="complaintForm" style="margin-top: 180px;" autocomplete="off" method="post"
            enctype="multipart/form-data">
            
            <button type="button" id="getLocationBtn" required>Get Location</button>
            <textarea id="locationDetails" name="details" rows="10" readonly    required></textarea>
            <div id="image-input">
                <label for="imageInput" id="openCamera">&#128247;Open Camera </label>
                <input type="file" accept="image/*;capture=camera" id="imageInput" name="photo" onchange="showPhoto()"
                    required />
            </div>
            <div id="location-details"></div>
            <input type="submit" name="complaint_form" value="Submit">
            <?php include('errors.php'); ?>
        </form>
        <div class="error-message">
        <?php
            
            foreach ($errors as $error) {
                echo "<p>$error</p>";
            }
            ?>
        </div>
        <div cam>
            <video class="cam" id="video" autoplay></video>
            <canvas class="can" id="canvas"></canvas>
            <button class="cap" id="captureImage">&#128247;</button>

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
                <a href="https://www.instagram.com/4___tuneee?igsh=Ynl2dTE0anhhdzZt" target="blank"><i
                        class="fab fa-instagram"></i> Instagram</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script>
        const openCameraButton = document.getElementById('openCamera');
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const captureImageButton = document.getElementById('captureImage');
        const imageInput = document.getElementById('imageInput');

        openCameraButton.addEventListener('click', openCamera);

        async function openCamera() {
            event.preventDefault();
            try {
                const stream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } });
                video.srcObject = stream;
                video.play();
                // Show relevant elements
                video.style.display = 'block';
                canvas.style.display = 'none';
                captureImageButton.style.display = 'block';
                openCameraButton.style.display = 'none';
            } catch (error) {
                console.error('Error accessing camera:', error);
            }
        }

        captureImageButton.addEventListener('click', captureImage);

        function captureImage() {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
            canvas.style.display = 'block';
            video.style.display = 'none';
            captureImageButton.style.display = 'none';
            openCameraButton.style.display = 'block';
            canvas.toBlob((blob) => {
                const imageUrl = URL.createObjectURL(blob);
                const files = [new File([blob], 'captured-image.png', { type: 'image/png' })];


                // Create a FileList object using DataTransfer
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(files[0]);
                imageInput.files = dataTransfer.files;
            }, 'image/png');
        }

        const form = document.getElementById("complaintForm");
        const button = document.getElementById("getLocationBtn");
        const locationDetailsTextarea = document.getElementById("locationDetails");
        const cameraIcon = document.getElementById("openCamera");

        button.addEventListener("click", async (event) => {
            event.preventDefault(); // Prevent the default button behavior

            try {
                const permissionStatus = await navigator.permissions.query({ name: 'geolocation' });

                if (permissionStatus.state === 'granted') {
                    getLocation();
                } else if (permissionStatus.state === 'prompt') {
                    const result = await navigator.geolocation.getCurrentPosition(
                        position => {
                            getLocationDetails(position.coords);
                        },
                        error => {
                            console.error(`Error getting location: ${error.message}`);
                        }
                    );

                    if (result) {
                        getLocationDetails(result.coords);
                    }
                } else {
                    console.log('Geolocation permission is denied.');
                }
            } catch (error) {
                console.error('Error checking geolocation permission:', error);
            }
        });

        function getLocation() {
            navigator.geolocation.getCurrentPosition(
                position => {
                    getLocationDetails(position.coords);
                },
                error => {
                    console.error(`Error getting location: ${error.message}`);
                }
            );
        }

        function getLocationDetails(coords) {
            const { latitude, longitude } = coords;
            const url = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`;

            fetch(url)
                .then(res => res.json())
                .then(data => {
                    console.log("Nominatim API Response:", data);

                    const formattedAddress = formatAddress(data.address);

                    const currentDateAndTime = getCurrentDateAndTime();

                    locationDetailsTextarea.value = `${formattedAddress}\nTime and Date: ${currentDateAndTime}`;
                })
                .catch(() => {
                    console.log("Error fetching data from API");
                });
        }

        function formatAddress(address) {

            const suburb = address.suburb || '';
            const county = 'New Vellanur';
            const state_district = address.state_district || '';
            const state = address.state || '';
            const postcode = address.postcode || '';
            const country = address.country || '';


            document.cookie = "zipcode = " + postcode;



            return `${suburb}, ${county}, ${state_district}, ${state}, ${postcode}, ${country}`;
        }

        function getCurrentDateAndTime() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit', timeZoneName: 'short' };
            return now.toLocaleDateString('en-US', options);
        }

        function showPhoto() {
            var input = document.getElementById('imageInput');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                cameraIcon.style.backgroundImage = "none";
                cameraIcon.textContent = "Photo Selected";
                cameraIcon.classList.add("photo-uploaded");
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                cameraIcon.style.backgroundImage = "none";
                cameraIcon.textContent = "&#128247; Open camera";
                cameraIcon.classList.remove("photo-uploaded");
            }
        }
    </script>
</body>

</html>