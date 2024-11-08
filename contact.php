

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(
      !empty($_POST['name'])
      && !empty($_POST['email'])
      && !empty($_POST['phone'])
      && !empty($_POST['message'])
  ){
      $name = $_POST["name"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $message = $_POST["message"];


      $to = "aniketparkhi2004@gmail.com";
      $subject = "New Contact Form Submission";
      $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nMessage: {$message}";
      $headers = "From: {$email}";

      ini_set("SMTP","smtp.gmail.com");
      ini_set("smtp_port",2525);
      ini_set("sendmail_from","me@example.com");
      ini_set("sendmail_path", "");
   

      if (mail($to, $subject, $body, $headers)) {
          echo "Message sent successfully!";
      } else {
          echo "Failed to send message.";
      }
  }
}
?>

<?php
// Get data from form  
// if(isset($_POST['submit']))
// {
 

// $name = $_POST['name'];
// $email= $_POST['email'];
// $phone= $_POST['phone'];
// $message= $_POST['message'];

// 
// ini_set("SMTP","aniketparkhi2004@gmail.com");
// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.

// ini_set("smtp_port","25");

// Please specify the return address to use

// ini_set('sendmail_from', $email);

// 
// $to = "aniketparkhi2004@gmail.com";
// $subject = "This is the subject line";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
// $txt ="Name = ". $name . "\r\n  Email = " 
//     . $email .   "\r\n Phone =" . $phone . "\r\n Message =" . $message;

// $headers = "From: softgrowth@demosite.com" . "\r\n" .
//             "CC: somebodyelse@example.com";
// if($email != NULL) {
//     mail($to, $subject, $txt, $headers);
// }
// }
// Redirect to
// header("Location:contact.php");
?>

<!DOCTYPE html>

<html lang="en" lang="mr">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>OFS</title>

<!-- popup form -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


<!-- slider stylesheet -->
<!-- slider stylesheet -->
<link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/contact.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="css\neww.css">
<link rel="stylesheet" type="text/css" href="css\new.css">
<link rel="stylesheet" type="text/css" href="css\benefit.css">

</head>

<body>
  <div class="hero_area">


  <?php require_once "header.php"; ?>
    
    <!-- end header section -->

  </div>

  <!-- how section -->
  <section class="how_section layout_padding">
    <div class="heading_container">
      <h2 class="inner_text">
       Contact Us 
      </h2>
    </div>
    <div class="how_container">
    <form id="form" action="contact.php" method="post">
  
  <p>Please take a moment to get in touch, we will get back to you shortly.</p>

  <div class="column">
    <label for="the-name">Your Name</label>
    <input type="text" name="name" id="the-name" style="height:200px;width:200px; font-family:Mangal;">

    <label for="the-email">Email Address</label>
    <input type="email" name="email" id="the-email">

    <label for="the-phone">Phone Number</label>
    <input type="tel" name="phone" id="the-phone">

    <label for="the-reason">How can we help you?</label>
    <select name="reason" id="the-reason">
    <option value="">Choose one</option>
    <option value="web">I need web design services</option>
    <option value="video">I need you to produce a video</option>
    <option value="3d">I need 3D polygon things</option>
  </select>
  </div>
  <div class="column">
    <label for="the-message">Message</label>
    <textarea name="message" id="the-message"></textarea>
    <label>
    <input type="checkbox" name="newsletter" value="yes"> Join our mailing list?
    </label>
    <input type="submit" name="submit" class="bg-dark" value="Send Message">
  </div>
</form>
    </div>
  </section>
  <!-- end how section -->

    <!-- info section -->
    <?php require_once "footer.php" ?>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->
</body>

</html>