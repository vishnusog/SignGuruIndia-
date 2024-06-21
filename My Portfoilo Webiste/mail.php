<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:" . $name . "<" . $email . ">\r\n";

$recipient = "vishnursog@gmail.com";

mail($recipient, $subject, $mailheader),
// or die("Error");

echo '


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/Images/favicon.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Concert+One&family=EB+Garamond&family=Mukta:wght@300&family=Quicksand&family=Roboto+Slab&family=Ubuntu:wght@700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Concert+One&family=EB+Garamond&family=Mukta:wght@300&family=Quicksand&family=Roboto+Slab&family=Ubuntu:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./contact.css">
    <title>Sign Guru India || Contact </title>
</head>

<body>
    <div class="nav">
        <div class="container">
            <a href="../index.html"><img src="../assets/Images/logo.png" alt=""></a>
            <ul>
                <a href="../Public/aboutme.html">
                    <li>About me</li>
                </a>
                <a href="../Public/portfolio.html">
                    <li>Portfolio</li>
                </a>
                <a href="../Public/service.html">
                    <li>Courses</li>
                </a>
                <a href="../Public/contact.html">
                    <li>Contact</li>
                </a>
                <div class="navbtn">
                    <a href=""><button> <i class="ri-youtube-fill"></i> Watch our channel</button></a>
                </div>
            </ul>
        </div>
    </div>
     <div class="contact-area">
        <div class="box1">
            <h1>Thank you for contacting me</h1>
            <p class="back">Go back to the <a href="../index.html">homepage</a>.</p>
        </div>
      
    <div class="footer">
        <div class="container">
         <div class="left-footer">
             <img src="../assets/Images/logo.png" alt="">
         </div>
         <div class="right-footer">
             <p>© 2023 SignGuruIndia, Inc.</p>
         </div>
        </div>
    </div>
</body>

</html>

'
?>