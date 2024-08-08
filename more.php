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
      body{
        background: #07374a;
     width: 100%;
     color: white;
     font-family: 'Roboto',sans-serif;
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
     @media screen and (max-width:600px)
     {
      .flag{
        margin-left:5%;
      }
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
.content{
  margin-top: 130px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  
  letter-spacing: .25px;
    word-spacing: 1.5px;
    line-height: 2;
}
.content h1{
  font-size: 2.5rem;
  font-weight: 400;
  color: #ffffff;
  padding-bottom: 0.5rem;
}
@media  screen and( min-width:600px) {
  .content{
   max-width: 70%;
  }

}
@media screen and (min-width: 600px) {

  .img{
   max-width: 600px;
  }
 } 
 .img{
  width:100%;
  margin-top: 3%;
  margin-bottom:3%;
 }

.link{

text-decoration: none;
width: 100%;
color: white;

}
.list{
  display:grid;
  
  
  grid-template-columns:1fr 1fr 1fr ;
  column-gap: 20px;
 
}
@media screen and(max-width:500px){
  .list{
    padding-left: -40px;
  }
  #Home{
    padding-top: 800px;
  }
}
.content1{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #07374a;

  padding-left: 11%;
  padding-right: 11%;
}
#Home{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #25b79f;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Home h1{
  color: #07374a;
  font-weight: bold;
  
}
#Home span{
  color: #07374a;
  font-weight: bold;
  display: inline-block;
}
.content1 span{
  color: #25b79f;
  font-weight: bold;
}
.content1 button{
  background-color:#25b79f;
  color: #07374a;
  margin-top: 5px;
  border: none;
  border-radius: 3px;
  border-bottom: 2px solid #ffffff;
  transition: background-color 0.4s,border-radius 0.4s;
}
.content1 button:hover{
  background-color: #f0f0e6;
  color: #25b79f;
  border-radius: 8px;
}
#Home img{
  border-radius: 10px;
  height: 20rem;
}
#Complaint img{
  border-radius: 10px;
  height: 20rem;
}

#Complaint{
  display: flex;
  color: #ffffff;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #07374a;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
}
#Complaint h1{
  color:#25b79f;
  font-weight: bold;
}
#Complaint h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Complaint span{
  color: #25b79f;
  font-weight: bold;
  display: inline-block;
}
#Admin{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #25b79f;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Admin h1{
  color: #07374a;
  font-weight: bold;
  
}
#Admin h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Admin span{
  color: #07374a;
  font-weight: bold;
  display: inline-block;
}
#About{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #07374a;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#About h1{
  color:#25b79f;
  font-weight: bold;
  
}
#About h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#About span{
  color: #25b79f;
  font-weight: bold;
  display: inline-block;
}
#Confirmation{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #25b79f;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Confirmation h1{
  color: #07374a;
  font-weight: bold;
  
}
*h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Confirmation  span{
  color: #07374a;
  font-weight: bold;
  display: inline-block;
}
#Profile{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #07374a;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Profile h1{
  color:#25b79f;
  font-weight: bold;
  
}
#Profile span{
  color: #25b79f;
  font-weight: bold;
  display: inline-block;
}
#Edit{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #25b79f;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Edit h1{
  color: #07374a;
  font-weight: bold;
  
}

#Edit  span{
  color: #07374a;
  font-weight: bold;
  display: inline-block;
}
#Login{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #07374a;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Login h1{
  color:#25b79f;
  font-weight: bold;
  
}
#Login span{
  color: #25b79f;
  font-weight: bold;
  display: inline-block;
}
#Register{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #25b79f;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Register h1{
  color: #07374a;
  font-weight: bold;
  
}

#Register  span{
  color: #07374a;
  font-weight: bold;
  display: inline-block;
}
#Server{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #07374a;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Server h1{
  color:#25b79f;
  font-weight: bold;
  
}
#Server span{
  color: #25b79f;
  font-weight: bold;
  display: inline-block;
}
#Errors{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #25b79f;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Errors h1{
  color: #07374a;
  font-weight: bold;
  
}

#Errors  span{
  color: #07374a;
  font-weight: bold;
  display: inline-block;
}
#Logout{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #25b79f;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Logout h1{
  color: #07374a;
  font-weight: bold;
  
}

#Logout  span{
  color: #07374a;
  font-weight: bold;
  display: inline-block;
}
#Howtofillcomplaint{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #07374a;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Howtofillcomplaint h1{
  color:#25b79f;
  font-weight: bold;
  
}
#Howtofillcomplaint span{
  color: #25b79f;
  font-weight: bold;
  display: inline-block;
}
#Verification{
  display: flex;
  color: #f0f0e6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #07374a;
  padding-left: 11%;
  padding-right: 11%;
  padding-top: 8rem;
  padding-bottom: 10%;
  
}
#Verification h1{
  color:#25b79f;
  font-weight: bold;
  
}
#Verification span{
  color: #25b79f;
  font-weight: bold;
  display: inline-block;
}

#About img{
  border-radius: 10px;
  margin-bottom: 15px;
  height: 9rem;
}
#Confirmation h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Profile h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Profile img{
  border-radius: 10px;
  margin-bottom: 15px;
  height: 20rem;
}
#Edit h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Edit img{
  border-radius: 10px;
  margin-bottom: 15px;
  height: 20rem;
}
#Login h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Login img{
  border-radius: 10px;
  margin-bottom: 15px;
  height: 9rem;
}
#Register h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Register img{
  border-radius: 10px;
  margin-bottom: 15px;
  height: 9rem;
}
#Server h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Errors h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Howtofillcomplaint h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Howtofillcomplaint img{
  border-radius: 10px;
  margin-bottom: 15px;
  height: 9rem;
}
#Logout h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
#Verification h2{
  font-size: large;
  color:#ffffff;
  font-weight: bold;
}
</style>
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
            <a href="index.php">
        <button class="about" >Home</button>
            </a>
       </li>
      
       <li>
        <a href="login.php"><button class="complaint">Login</button></a>
       </li>
       <li>
       <a href="about.php">
        <button class="about" >About</button>
            </a>
       </li>
       
       </ul>
    
    </div>
    
    <div class="content">
      <div class="content1">
      <p><span style="font-size: 1.2rem;font-weight: bold;">Clean sight addresses community concerns about unattended garbage:</span></br>
        Provides a platform for residents to capture and report instances of prolonged garbage. Empowers individuals to document and complain about garbage affecting their daily lives.
       Prompts municipal action by highlighting specific instances of delayed cleanup.</p>
       <img src="https://i.postimg.cc/XNyc2dpC/logo.png" class="logo">
       <p>Community members capture and submit images when they personally experience the impact of unattended garbage.
       The website facilitates the reporting process, linking captured uncleaned for an extended period.
       Creates a visual record of instances where garbage remains uncleaned for an extended period.
       Promotes community involvement in addressing localized cleanup issues.
       Clean Sight envisions a community-driven approach to prompt timely municipal action on garbage cleanup.
       Aims to improve communication between residents and the municipal office, fostering a cleaner and more responsive environment.
       </p>
<img class="img"  src="https://i.postimg.cc/jSFC6LK9/edit.jpg">
<p>
  <span style="font-size: 1.2rem;font-weight: bold;">Enabling community members to easily capture and submit images of unattended garbage:</span></br>
Provide a user-friendly platform for residents to voice their concerns about garbage-related issues.
Establish a direct and efficient channel for community members to complain to the municipal office.
Highlight instances where garbage remains uncleaned for an extended period due to holidays or irregular municipal services.
Foster community engagement in addressing localized cleanup problems.
Improve communication between residents and the municipal office regarding waste management issues.</p>
<span style="font-size: 1.4rem;font-weight: bold;">Clean Sight Involves Several pages here are the list</span>
       <ul class="list">
        <button > <li style="list-style-type: none;"><a class="link" style="text-decoration: none; color: #07374a;" href="#Home">Home</a></li></button> 
        <button> <li style="list-style-type: none;" ><a class="link" style="text-decoration: none;color: #07374a;" href="#Complaint" >complaint</a></li></button> 
        <button> <li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Admin">Admin</a></li></button> 
        <button><li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#About">About</a></li></button> 
        <button> <li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Confirmation">Confirmation</a></li></button> 
        <button><li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Profile">Profile</a></li></button> 
          <button><li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Edit">Edit</a></li></button> 
          <button><li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Login">Login</a></li></button> 
          <button><li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Register">Register</a></li></button> 
          <button> <li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Server">Server</a></li></button> 
          <button> <li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Errors">Errors</a></li></button> 
          <button> <li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Howtofillcomplaint">Process</a></li></button> 
          <button> <li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Logout">logout</a></li></button> 
          <button><li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#Verification">Verification</a></li></button> 
          <button><li style="list-style-type: none;"><a class="link" style="text-decoration: none;color: #07374a;" href="#contact-me">More</a></li></button> 
          
        </ul>
    
    </div>
    <section id="Home">
      <span><h1 >HOME</h1></span>
      <img src="https://i.postimg.cc/gkbvrRCg/Home.jpg">
      <p>
     <span> Header Section:</span>The header section includes the Clean Sight logo, site name, and a flag image.
      There is a navigation bar in the header with links to different sections of the website, such as the Confirmation Page, How to Fill a Complaint, and About page.</br>
      <span>Moving Text Section:</span>
      
      There is a dynamic moving text section at the top that encourages users to click and learn more about Clean Sight. The text moves horizontally across the screen.
      </br><span>Main Content Section:</span>
      
      The main content section consists of three parts:
    </br><span>Main1:</span> Displays the Clean Sight logo.
    </br><span>Main2:</span> Provides buttons for users to log in as an admin or fill a complaint.
    </br><span>Main3:</span> Contains a detailed description of how the Clean Sight app helped a citizen resolve a garbage issue quickly. It includes images to illustrate the process.
    </br><span>Contact Section:</span>
      
      There is a contact section at the end of the page with information on how users can get in touch with the website owner. It includes an email address and links to social media profiles.
    </br><span>Styling and Responsiveness:</span>
      
      The page is styled using CSS for a clean and professional look. Bootstrap and Font Awesome libraries are used for styling and icons.
      Media queries are included to make the website responsive for different screen sizes, adjusting the layout and styles accordingly.
    </br><span>Background and Colors:</span>
      
      The background color of the page is a dark blue shade (#07374a), providing a visually appealing contrast.
      The content is presented in a white background for better readability.
    </br><span>Animation:</span>
      
      The moving text in the header creates a visually engaging element, drawing attention to the link for more information.
    </br><span>External Links:</span>
      
      External links are provided to the website owner's LinkedIn, CodePen, GitHub, WhatsApp, Twitter, and Instagram profiles.
    </br><span>Contact Me Section:</span>
      
      The "Contact Me" section includes an email address and links to the website owner's social media profiles, encouraging users to connect.
    </br><span>Responsive Design:</span>
      
      The design is responsive, making it suitable for different devices and screen sizes. The layout and styling are adjusted for smaller screens.
    </br><span>Favicon:</span>
      
      A favicon (site icon) is set for the website, displaying the Clean Sight logo.
      Overall, the index.php file serves as the landing page for the Clean Sight website, providing information about the app, its functionality, and ways for users to engage with the platform or contact the website owner. The content is presented in a visually appealing and organized manner, making it easy for users to navigate and understand the purpose of the platform.
    </p>
      
    </section>
    <section id="Complaint">

  <h1>Complaint</h1>
  <img src="https://i.postimg.cc/G2yBKr7x/COMPLAINT.png">
  <h2>complaint.php file appears to be a PHP script responsible for handling and processing user complaints. Here's a brief description of the main components:</h2>
  <p>
 <span> PHP Code:</span>Starts a PHP session using session_start() and includes necessary PHP files (connection.php and server.php).
Checks if the complaint form has been submitted (isset($_POST['complaint_form'])).
  </br><span>Complaint Form Handling:</span>

Retrieves complaint details, status, and postal code from the submitted form.
Validates and processes the uploaded photo, checking for errors and ensuring it meets specified criteria.
Moves the uploaded photo to a designated directory and inserts relevant information into the database.
</br><span>HTML Form (Middle Section):</span>

Provides an HTML form (<form>) for users to submit complaints.
Includes fields for details, photo upload, and a "Get Location" button to retrieve the user's location.
Displays a textarea for showing the location details obtained via geolocation.
</br><span>JavaScript Section (Bottom Section):</span>

<span>Contains JavaScript code for handling various functionalities: Geolocation:</span> Retrieves the user's current location using the Geolocation API and displays it in the textarea.
Camera Interaction: Allows users to open the camera, capture an image, and upload it for the complaint.
Updates the UI based on user actions, such as changing the camera icon and displaying the uploaded photo status.
Sends asynchronous requests to the Nominatim API to reverse-geocode the user's location.
</br><span>Contact Section (After Form):</span>

Includes a contact section at the end with information about how users can contact you.
Provides links to your LinkedIn, CodePen, GitHub, WhatsApp, Twitter, and Instagram profiles.
</br><span>Styling :</span>

Includes CSS styles for formatting and styling the layout.
Utilizes Bootstrap and other external stylesheets and fonts.
</br><span>Responsive Design:</span>

Implements responsive design with media queries to ensure a good user experience across different screen sizes.
</p>
    </section>
    <section id="Admin">
<h1>Admin</h1>
<h2>This PHP file, named "Admin.php," appears to be a part of a web application with functionality related to user complaints and administration. Let's break down the key components and functionalities of this file:</h2>
<p>
  <span>Session Handling:</span>

  The file starts by including necessary PHP files (connection.php and server.php).
  It checks if the user is logged in by verifying the presence of the 'user_name' session variable. If not logged in, it redirects the user to the login page (login.php).
</br> <span>Session Timeout Handling:</span>
  
  It checks for session timeout by comparing the last activity timestamp with the current time. If the session has timed out (20 minutes inactivity), it redirects the user to the login page.
</br> <span> Post Request Handling:</span>
  
  If the request method is POST, it checks for the existence of 'complaint_id' and 'new_status' parameters.
  If present, it updates the status of the corresponding complaint in the database using an SQL UPDATE query.
</br> <span> HTML Content:</span>
  
  The HTML content of the file includes meta tags, external stylesheets (Bootstrap and custom styles), and a favicon.
  It has a fixed header with the application name ("Clean Sight") and a flag image.
  The navigation bar includes links to the Home, About, Profile, and Logout pages.
</br> <span> Table Displaying User Complaints:</span>
  
  Below the navigation bar, there's a table displaying user complaints with columns for Serial Number (S.NO), Location Details, Image, and Status.
  Complaints are fetched from the database based on the user's zip code and displayed in the table.
  There is a form within each row of the table, allowing the admin to update the status of each complaint (incomplete or completed).
</br> <span> Note Display:</span>
  
  A fixed bar with a moving text note is displayed at the top, advising users to remember or note their Serial Number (S.NO) to check the status.
</br> <span> Contact Section:</span>
  
  At the end of the page, there is a "Contact Me" section displaying contact information and social media links for the admin.
</br> <span> JavaScript Libraries:</span>
  
  The file includes jQuery and Bootstrap JavaScript libraries.
</br> <span> Styling:</span>
  
  The file includes custom CSS for styling, including a fixed header, navigation bar, and other elements.
</br> <span> Responsive Design:</span>
  
  The design is responsive, with adjustments for different screen sizes.</p>
    </section>
    <section id="About">
 <h1>About</h1>
 <Img src="https://i.postimg.cc/JnWFRfY4/About.png">
 <h2> "About.php" file seems to be an HTML document written in the English language. Here's a brief description of the content:</h2>
 <p>
<span>HTML Structure:</span>

The document begins with the HTML tag, specifying the language as English (<html lang="en">).
The head section contains metadata, including character set, viewport settings, and links to external resources (stylesheet, font-awesome icons, and jQuery library).
The document's title is set to "About me."
</br><span>CSS Styling:</span>

The document includes an internal style block with CSS rules for styling the webpage.
It uses the Poppins font from Google Fonts.
The styling covers the header, navigation bar, home content, about me section, skills, portfolio, and contact sections.
Media queries are used for responsive design on different devices.
</br><span>Navbar:</span>

The navigation bar is fixed at the top and includes links to Home, About, Portfolio, and Contact sections.
The logo "Sanket Bodake" is included in the navbar.
</br><span>Home Content:</span>

The home section features a background image, a greeting, and a call-to-action with an arrow icon to scroll down to the next section.
</br><span>About Me Section:</span>

Includes a brief introduction about the individual (Mastan), a profile image, and information about being a full-stack developer in training.
Skills section displays proficiency in HTML, CSS, Bootstrap, JavaScript, C, Java, and Python with progress bars.
</br><span>Portfolio Section:</span>

Showcases two projects ("CleanSight Website" and "Profile Card") with project details, icons representing technologies used, and buttons for viewing the source code and trying the live demo.
</br><span>Contact Section:</span>

Displays contact information, including an email address and links to LinkedIn, CodePen, GitHub, WhatsApp, Twitter, and Instagram.
</br><span>Responsive Design:</span>

Media queries are used to adjust the layout and font sizes for different screen sizes.
</br><span>Scripts:</span>

The document includes references to external JavaScript files ("app.js" and jQuery library).
 </br><span>External Links:</span>

Links to external resources like Font Awesome for icons.
 </p>
    </section>
    <section id="Confirmation">
      <h1>Confirmation</h1>
      <h2>Confirmation.php file is a PHP script that generates an HTML page for displaying information related to user complaints. Let me provide a brief description of the content:</h2>
      <p>
      </br> <span> PHP Session Handling:</span>

It starts with PHP code to check if a session is active. If not, it starts a new session.
Includes necessary PHP files (connection.php and server.php).
</br> <span>HTML Head Section:</span>

Sets up the document's metadata, including character set, title, viewport settings, and external stylesheet and script links.
Utilizes Bootstrap and Font Awesome for styling.
</br> <span>Styling:</span>

Defines CSS styles for various elements, including the page background, header, navigation, and table.
</br> <span>Header Section:</span>

Creates a fixed header with a logo (l1.jpg), site name ("Clean Sight"), and a flag image.
</br> <span>Navigation Bar:</span>

Consists of a navigation bar with links to "Home," "How to fill a complaint," and "Complaint page."
</br> <span>Moving Text Section:</span>

Displays a fixed bar at the top with moving text, providing a note to users.
</br> <span>Complaints Table:</span>

Fetches complaint data from the database and displays it in a table.
Columns include Serial Number (S.NO), Location Details, an Image related to the complaint, and the Status of the complaint.
</br> <span>Contact Section:</span>

Includes a contact section at the bottom with information on how to contact the site owner.
Displays links to the owner's LinkedIn, CodePen, GitHub, WhatsApp, Twitter, and Instagram profiles.
</br> <span>Scripts:</span>

Includes jQuery and Bootstrap JavaScript files for enhanced functionality.
      </br> <span>Note:</span>

There's an animation (moveText) applied to the moving text in the header.
      </p>
    </section>
    <section id="Profile">
      <h1>Profile</h1>
      <h2>Profile.php file is a PHP script that generates an HTML page for displaying a user's profile information. Below is a brief description of the content:</h2>
      <p>
     <span> PHP Session Handling and Database Connection:</span>

Starts a PHP session.
Includes necessary PHP files (connection.php and server.php).
Checks if the user is logged in; if not, redirects to the login page.
</br> <span> Retrieving User Information:</span>

Retrieves user details from the database based on the session information (logged-in user).
Displays an error message if there is an issue with the database query.
</br> <span> HTML Head Section:</span>

Sets up the document's metadata, including character set, title, viewport settings, and external stylesheet and script links.
Utilizes Bootstrap and Font Awesome for styling.
</br> <span> Styling:</span>

Defines CSS styles for various elements, including the page background, header, navigation, tables, and buttons.
</br> <span> Header Section:</span>

Creates a fixed header with a logo (l1.jpg), site name ("Clean Sight"), and a flag image.
</br> <span> Navigation Bar:</span>

Consists of a navigation bar with links to "Home," "Admin," and "Logout."
</br> <span> User Profile Section:</span>

Displays the user's details in a table format, including the username, email, and ZIP code.
Provides options to edit the profile or log out.
</br> <span> Contact Section:</span>

Includes a contact section at the bottom with information on how to contact the site owner.
Displays links to the owner's LinkedIn, CodePen, GitHub, WhatsApp, Twitter, and Instagram profiles.
</br> <span> Scripts:</span>

Includes jQuery and Bootstrap JavaScript files for enhanced functionality.
      </br> <span> Note:</span>

The design is responsive, adapting to different screen sizes.
      </p>
    </section>
    <section id="Edit">
      <h1>Edit</h1>
      <h2>Edit.php file is a PHP script that handles the editing of user profiles. Below is a brief description of the content:</h2>
      <p>
     <span> PHP Session Handling and Database Connection:</span>

Starts a PHP session.
Includes necessary PHP files (connection.php and server.php).
Checks if the user is logged in; if not, redirects to the login page.
</br><span> Retrieving User Information:</span>

Retrieves user details from the database based on the session information (logged-in user).
Displays an error message if there is an issue with the database query.
</br><span> PHPMailer for Email Verification:</span>

Utilizes the PHPMailer library for sending email verification codes when the user updates their email address.
Sends an email to the new email address with a verification code.
</br><span> Updating User Profile:</span>

Handles the form submission for updating the user profile.
Performs validation and sanitization on the input data.
If the new email address is different from the existing one, it sends an email verification code and updates the user's email and verification code in the database.
If the new email address is the same, it updates the username, email, and ZIP code in the database.
</br><span> HTML Head Section:</span>

Sets up the document's metadata, including character set, title, viewport settings, and external stylesheet and script links.
Utilizes Bootstrap and Font Awesome for styling.
</br><span> Styling:</span>

Defines CSS styles for various elements, including the page background, header, navigation, tables, buttons, and form inputs.
</br><span> Header Section:</span>

Creates a fixed header with a logo (l1.jpg), site name ("Clean Sight"), and a flag image.
</br><span> Navigation Bar:</span>

Consists of a navigation bar with links to "Home," "Admin," and "Logout."
</br><span> User Profile Edit Form:</span>

Displays a form with input fields for the new username, email, and ZIP code.
Prefills the input fields with the user's existing information.
Provides buttons to save changes or log out.
      </br><span> Contact Section:</span>

Includes a contact section at the bottom with information on how to contact the site owner.
Displays links to the owner's LinkedIn, CodePen, GitHub, WhatsApp, Twitter, and Instagram profiles.
      </p>
    </section>
    <section id="Login">
      <h1>Login</h1>
      <img src="https://i.postimg.cc/bJY9mXqZ/Login.png">
      <h2>Login.php file is a PHP script that handles user authentication and login. Below is a brief description of the content:</h2>
      <p>
   <span>  PHP Session Handling and Redirect to Admin Page: </span>

Starts a PHP session.
Checks if the user is already logged in and the session is still active (within 20 minutes or 1200 seconds).
If true, redirects the user to the admin page.
</br> <span> Including Necessary Files:</span>

Includes the connection.php file, which likely contains the database connection details.
Includes the server.php file, which contains the server-side logic for user registration, login, and other functions.
</br> <span> HTML Head Section:</span>

Sets up the document's metadata, including the title, viewport settings, and external stylesheet and script links.
Utilizes Bootstrap, Font Awesome, and a custom favicon.
</br> <span> Styling:</span>

Defines CSS styles for various elements, including the body, navigation bar, form wrapper, buttons, and other components.
</br> <span> Header Section:</span>

Creates a fixed header with the site logo ("Clean Sight") and a flag image.
Includes navigation links for "Home," "Confirmation Page," and "About."
</br> <span> Login Form:</span>

Uses a Bootstrap-based form with username and password input fields.
Handles form submission using the POST method.
Includes PHP code to display error messages if there are authentication errors.
</br> <span> Eye Icon for Password Visibility Toggle:</span>

Integrates a JavaScript snippet to toggle password visibility when the eye icon is hovered over.
</br> <span> Contact Section:</span>

Includes a contact section at the bottom with information on how to contact the site owner.
Displays links to the owner's LinkedIn, CodePen, GitHub, WhatsApp, Twitter, and Instagram profiles.
</br> <span> JavaScript Section:</span>

Includes JavaScript code to toggle the visibility of the password when the eye icon is hovered over.
 </br> <span>  External Libraries:</span>

Utilizes external libraries such as jQuery and Bootstrap for enhanced functionality and styling.
      </p>
    </section>
    <section id="Register">
      <h1>Register</h1>
      <img src="https://i.postimg.cc/bw8LFVHf/Register.png">
      <h2>Register.php file is a PHP script that handles user registration. Below is a brief description of the content:</h2>
      <p>
      <span>  PHP Includes:</span>

Includes the connection.php file, which likely contains the database connection details.
Includes the server.php file, which contains the server-side logic for user registration, login, and other functions.
</br><span>  HTML Head Section:</span>

Sets up the document's metadata, including the title, viewport settings, and external stylesheet and script links.
Utilizes Bootstrap, Font Awesome, and a custom favicon.
</br><span>  Styling:</span>

Defines CSS styles for various elements, including the body, form wrapper, buttons, and other components.
</br><span>  Header Section:</span>

Creates a fixed header with the site logo ("Clean Sight") and a flag image.
Includes navigation links for "Home," "Confirmation Page," and "About."
</br><span>  Registration Form:</span>

Uses a Bootstrap-based form with input fields for OfficeID, ZIP-CODE, email, password, and confirm password.
Handles form submission using the POST method.
Includes PHP code to display error messages if there are issues with user registration.
</br><span>   Eye Icons for Password Visibility Toggle:</span>

Integrates JavaScript snippets to toggle password visibility for both the password and confirm password fields when the eye icons are hovered over.
</br><span>  Contact Section:</span>

Includes a contact section at the bottom with information on how to contact the site owner.
Displays links to the owner's LinkedIn, CodePen, GitHub, WhatsApp, Twitter, and Instagram profiles.
</br><span>  JavaScript Section:</span>

Includes JavaScript code to toggle the visibility of the password and confirm password fields when the eye icons are hovered over.
      </br><span>  External Libraries:</span>

Utilizes external libraries such as jQuery and Bootstrap for enhanced functionality and styling.
      </p>
    </section>
    <section id="Server">
      <h1>Server</h1>
      <h2>server.php file is a PHP script that handles user registration and login functionalities. Here's a brief description of the content:</h2>
      <p>
        <span>Session Start:</span>

Checks if a session is already started; if not, it starts a new session. Sessions are used to persist user data across multiple pages.
      </br> <span> PHP Mailer Configuration:</span>

Configures the PHPMailer library for sending email verification codes.
Uses Gmail SMTP for sending emails.
Sets up the sender's email address and authentication details.
</br> <span> User Registration Handling:</span>

Listens for the form submission with the name reg_user.
Retrieves user input for OfficeID, ZIP-CODE, email, password, and confirm password.
Validates the form data and adds corresponding errors to the $errors array if validation fails.
Checks the database to ensure no existing user has the same OfficeID, ZIP-CODE, or email.
If no errors, sends an email verification code to the user's email address using PHPMailer.
Inserts the user's information into the database, including a hashed password, and redirects to the verification page.
If an exception occurs during email sending, it catches the exception and outputs an error message.
</br> <span> User Login Handling:</span>

Listens for the form submission with the name login_user.
Retrieves user input for OfficeID and password.
Validates the form data and adds errors to the $errors array if validation fails.
Retrieves the user from the database based on the provided OfficeID.
Verifies the password using password_verify.
If successful, starts a session, sets session variables, and redirects the user to the admin page.
If the user's email is not verified, redirects the user to the verification page.
If login fails (incorrect OfficeID or password), adds an error message to the $errors array.
</br> <span> Exception Handling:</span>

If an exception occurs during the execution of PHPMailer (email sending), it catches the exception and outputs an error message.
      </p>
    </section>
    <section id="Errors">
      <h1>Errors</h1>
      <h2>errors.php file is a PHP script that displays error messages on the web page. Here's a brief description of the content:</h2>
      <p>
       <span> Error Display Logic:</span>

Checks if the $errors array is not empty (count($errors) > 0).
If there are errors, it displays them on the webpage.
      </br> <span> Error Output:</span>

Utilizes a div with the class error to style the error messages.
Uses a foreach loop to iterate through each error message in the $errors array.
Outputs each error message within a p (paragraph) element.
      </p>
    </section>
    <section id="Howtofillcomplaint">
      <h1>Complaint Filling Process</h1>
      <img src="https://i.postimg.cc/cHDMjDJX/Process.png">
      <h2>howtofillcomplaint.php file is an HTML document with embedded CSS styles and a bit of JavaScript. Here's a brief description of the content:</h2>
      <p>
      <span> HTML Structure:</span>

Defines the document type (<!DOCTYPE html>).
Contains the HTML root element (<html>) with the lang attribute set to "en."
</br> <span> Head Section:</span>

Sets the character set (<meta charset="UTF-8">).
Defines the viewport for responsive design (<meta name="viewport" content="width=device-width, initial-scale=1.0">).
Specifies the title of the webpage .
Includes external CSS stylesheets and fonts from Bootstrap and other sources.
</br> <span> Body Section:</span>

Begins with a fixed header containing a logo, website name ("Clean Sight"), and a flag image.
Includes a navigation bar with links to different sections of the website (Home, Fill a Complaint, About).
Contains a container with information on how to fill a complaint.
Provides a step-by-step guide with images on getting location, entering location details, uploading a photo, and submitting the complaint.
Displays a note emphasizing the importance of accurate and detailed information.
Includes a contact section at the bottom with information and links to contact the website owner.
</br> <span> Styles:</span>

Defines CSS styles for various elements to control the layout and appearance of the webpage.
Uses media queries to adjust styles based on screen width, ensuring a responsive design.
</br> <span> JavaScript:</span>

Includes the Bootstrap JS library and jQuery for interactive features.
      </p>
    </section>
    <section id="Logout">
      <h1>Logout</h1>
      <h2>logout.php file is a PHP script that handles user logout functionality. Here's a brief description of the content:</h2>
      <p>
      <span> Session Handling:</span>

Initiates a session using session_start().
Unsets all session variables by setting $_SESSION to an empty array ($_SESSION = array()).
</br> <span> Session Cleanup:</span>


Calls session_unset() to free all session variables.
Calls session_destroy() to destroy the session data on the server.
</br> <span> Redirect:</span>

Redirects the user to the login page (login.php) after the logout process is complete.
Uses the header function to send a raw HTTP header for the redirection.
Calls exit() to ensure that no further code is executed after the redirection.
      </p>
    </section>
    <section id="Verification">
      <h1>Verification</h1>
      <h2>verification.php file appears to be a PHP script that handles the verification of a user's email address. Here's a brief description of the content:</h2>
      <p>
       <span> Session Handling:</span>

Starts a session using session_start() if a session is not already started.
</br> <span> Include Files:</span>

Includes necessary files like "connection.php" and "server.php."
The "errors.php" file is included to display error messages.
</br> <span> Verification Logic:</span>

Checks if the form with the name "verify_email" has been submitted.
Retrieves email and verification code from the form using $_POST.
Constructs and executes an SQL query to update the "email_verified_at" field in the "users" table where the email and verification code match.
Checks the affected rows using mysqli_affected_rows to verify if the update was successful.
</br> <span> Error Handling:</span>

If the verification code is incorrect (no rows affected), an error message is displayed using JavaScript alert, and the user is redirected back to the verification page.
</br> <span> Success Message:</span>

If the verification is successful, a success message is echoed, and the user is redirected to the "admin.php" page.
</br> <span> HTML Content:</span>

Contains HTML markup for the verification page.
Uses Bootstrap for styling.
Displays a form where the user can enter their email and verification code.
Includes error messages and a success message.
</br> <span> Contact Section:</span>

Includes a contact section with information about how to get in touch with the developer.
</br> <span> JavaScript:</span>

Includes a small JavaScript snippet that toggles the visibility of the password field when the eye icon is hovered over or moved away from.
      </p>
    </section>
    
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
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  
</body>